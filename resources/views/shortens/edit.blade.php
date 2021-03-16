@extends('layout/main')

@section('title', 'Edit Link')

@section('container')
<link rel="stylesheet" href="/css/shorten.css">
<form method="POST" action="/shortens/{{ $shorten->random}}">
    @method('put')
    @csrf
    <div class="col-5 mb-3 mt-5">
        <label for="judul" class="form-label">Judul</label>
        <input type="text" class="form-control @error('judul') is-invalid @enderror" id="judul" name="judul" value="{{ $shorten->judul }}">
        @error('judul')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="col-5 mb-3 mt-3">
        <label for="long_url" class="form-label">Url Anda</label>
        <input type="text" class="form-control  @error('long_url') is-invalid @enderror" id="long_url" name="long_url" value="{{ $shorten->long_url }}">
        @error('long_url')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="col-5 mb-3 mt-3">
        <label for="short_url" class="form-label">Custom URL</label>
        <input type="text" class="form-control @error('custom_url') is-invalid @enderror" id="custom_url" name="custom_url" placeholder="Masukkan Custom URL" value="{{ $shorten->custom_url }}">
        @error('custom_url')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary ml-3">Submit</button>
</form>
@endsection