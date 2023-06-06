@extends('welcome')
@section('title')
    Read Kategori
@endsection
@section('subtitle')
    Kategori
@endsection
@section('content')
<div class="container">
    <h1>Nama: {{ $kategori->nama }} </h1>
    <b>Deskripsi: {{ $kategori->deskripsi }}</b> <br>
    <a href="/kategori" class="btn btn-info btn-sm my-4">Back</a>
</div>
@endsection
