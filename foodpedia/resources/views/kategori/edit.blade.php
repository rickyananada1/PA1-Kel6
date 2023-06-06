@extends('welcome')
@section('title')
    Edit Kategori
@endsection
@section('subtitle')
    Kategori
@endsection
@section('content')
    <form action="/kategori/{{$kategori->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">Nama Kategori</label>
            <input type="text" name="nama" class="form-control" value="{{ $kategori->nama }}">
        </div>
        @error('nama')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="mb-3">
            <label class="form-label">Deskripsi</label>
            <textarea name="deskripsi" name="deskripsi" class="form-control" id="" cols="30"
                rows="10">{{ $kategori->deskripsi }}</textarea>
        </div>
        @error('deskripsi')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="/kategori" class="btn btn-danger">Cancel</a>
    </form>
@endsection
