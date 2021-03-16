<?php

namespace App\Http\Controllers;

use App\Shorten;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class ShortensController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shortens = Shorten::all();
        return view('shortens.index', compact('shortens'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('shortens.insert');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // generate random string
        $random_gen = Str::random(7);
        $short_url = URL::to('/') . '/' . $random_gen;

        // create qrcode and save it in public folder
        QrCode::format('png')->size(500)->generate($short_url, public_path('qrcodes/' . $random_gen . '.png'));

        $request->validate([
            'long_url' => 'required',
            'judul' => 'required|max:255',
        ]);

        // simpan inputan judul, long_url dan hasil generate short_url ke table
        Shorten::create([
            'long_url' => $request->long_url,
            'short_url' => $short_url,
            'random' => $random_gen,
            'judul' => $request->judul,
            'custom_url' => $random_gen,
        ]);

        return redirect('/shortens');
    }

    public function fetch($randomLink)
    {
        // redirect short_url ke long_url lewat query
        $short_url = URL::to('/') . '/' . $randomLink;
        $query = Shorten::where('short_url', '=', $short_url);

        if ($query->exists()) {
            return redirect($query->value('long_url'));
        } else {
            return 'not exists';
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Shorten  $shorten
     * @return \Illuminate\Http\Response
     */
    public function show(Shorten $shorten)
    {

        return view('shortens.show', compact('shorten'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Shorten  $shorten
     * @return \Illuminate\Http\Response
     */
    public function edit(Shorten $shorten)
    {
        // menampilkan ui edit dan mengoper variabel shorten
        return view('shortens.edit', compact('shorten'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Shorten  $shorten
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Shorten $shorten)
    {
        $random_gen = $shorten->random;
        $judul = $request->judul;
        $custom_url = $request->custom_url;
        $short_url = URL::to('/') . '/' . $custom_url;

        $request->validate([
            'long_url' => 'required',
            'judul' => 'required|max:255',
            'custom_url' => 'required|alpha_dash',
        ]);

        // menyimpan hasil editan custom short_url
        Shorten::where('random', $shorten->random)
            ->update([
                'long_url' => $request->long_url,
                'short_url' => $short_url,
                'custom_url' => $custom_url,
                'judul' => $judul,
            ]);

        // menghapus file qrcode sebelum di custom namanya
        if (File::exists(public_path('qrcodes/' . $random_gen . '.png'))) {
            File::delete(public_path('qrcodes/' . $random_gen . '.png'));
        }

        QrCode::format('png')->size(500)->generate($short_url, public_path('qrcodes/' . $custom_url . '.png'));


        return redirect('/shortens');
    }

    // function download
    public function download(Shorten $shorten)
    {
        // buat variabel untuk letak file dan nama file yang bakal kesimpen setelah di download
        $custom_url = $shorten->custom_url;
        $source = public_path('qrcodes/' . $custom_url . '.png');

        $headers = array(
            'Content-Type : application/png',
        );

        // pakai method download
        return response()->download($source, $custom_url, $headers);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Shorten  $shorten
     * @return \Illuminate\Http\Response
     */
    public function destroy(Shorten $shorten)
    {
        $custom_url = $shorten->custom_url;

        // menghapus file gambar qrcode di public sekaligus menghapus data
        Shorten::destroy($shorten->id);
        File::delete(public_path('qrcodes/' . $custom_url . '.png'));

        return redirect('shortens')->with('status', 'Data berhasil dihapus');
    }
}
