@extends('welcome')
@section('title')
    Create Kategori
@endsection
@section('subtitle')
    Kategori
@endsection
@section('content')
    <form action="/kategori" method="POST">
        @csrf
        <div class="mb-3">
            <label  class="form-label">Nama Kategori</label>
            <input type="text" name="nama" class="form-control">
        </div>
        @error('nama')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
        <div class="mb-3">
            <label class="form-label">Deskripsi</label>
            <textarea name="deskripsi" name="deskripsi" class="form-control" id="" cols="30" rows="10"></textarea >
        </div>
        @error('deskripsi')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
@endsection
