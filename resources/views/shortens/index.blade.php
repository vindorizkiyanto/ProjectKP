@extends('layout/main')

@section('title', 'Data Shorten')

@section('container')
<link rel="stylesheet" href="/css/shorten.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">
<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
<a href="/shortens/create" class="btn btn-primary mt-5 ml-5 mb-4">Create</a>
@if (session('pesan'))
<div class="alert alert-success">
    {{ session('pesan') }}
</div>
@endif
<table class="col-15 table mt-2" id="tables">
    <thead class="table-dark ">
        <tr>
            <td>Id</td>
            <td>Nama</td>
            <td>Judul</td>
            <td>Short Link</td>
            <td>Create-Update</td>
            <td>QR Code</td>
            <td>Jml Pengunjung</td>
            <td>Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($shortens as $index => $str)
        <tr class="table-primary">
            <td>{{ $index +1}}</td>
            <td>{{ $str->user->name}}</td>
            <td>{{ $str->judul }}</td>
            <td>
                <p id="short_url"> {{ $str->short_url }}</p>
                <button id="copy_btn" class="btn btn-primary">Copy</button>
            </td>
            <td>{{ $str->created_at }} <br> {{ $str->updated_at }}</td>

            <td>
                <form action="/shortens/{{ $str->id }}/download" method="post" class="d-inline">
                    @csrf
                    <button type="submit" class="btn btn-success">Download</button>
                </form>
            </td>
            <td>
                -
            </td>
            <td><a href="/shortens/{{ $str->random }}/edit" class="btn btn-primary">Edit</a>
                <form action="/shortens/{{ $str->id}}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus link?')">Delete</button>
                </form>
                <a href="/shortens/{{ $str->random }} " class="btn btn-success ">Detail</a>
            </td>
        </tr>
        @endforeach
    </tbody>

</table>
<script>
    $(document).ready(function() {
        $('#tables').DataTable({
            "columnDefs": [{
                "sortable": false,
                "targets": [2, 4, 5]
            }]
        });
    });
</script>
<script>
    $(document).on('click', "#copy_btn", (ev) => {
        let textArea =
            ev.target.closest('tr').querySelector('#short_url');
        let selection = window.getSelection();
        let range = document.createRange();
        range.selectNodeContents(textArea);
        selection.removeAllRanges();
        selection.addRange(range);
        console.dir(range.toString());
        document.execCommand('copy');
        alert('link copied!')
    })
    // $('.copy_url').click(function() {})
</script>
@endsection