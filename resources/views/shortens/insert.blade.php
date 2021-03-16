@extends('layout/main')

@section('title', 'ShortenLink')

@section('container')
<link rel="stylesheet" href="/css/shorten.css">
<form method="POST" action="/shortens">
    @csrf
    <div class="in col-5 mb-3 mt-5">
        <label for="judul" class="form-label">Judul</label>
        <input type="text" class="form-control @error('judul') is-invalid @enderror" id="judul" name="judul" placeholder="Tuliskan Judul" value="{{ old('judul') }}">
        @error('judul')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="in col-5 mb-3">
        <label for="long_url" class="form-label">Url Anda</label>
        <input type="text" class="form-control @error('long_url') is-invalid @enderror" id="long_url" name="long_url" placeholder="Masukkan URL Anda" value="{{ old('long_url') }}">
        @error('long_url')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary ml-5">Submit</button>
</form>
@endsection