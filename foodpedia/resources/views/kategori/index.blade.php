@extends('welcome')
@section('title')
    List Kategori
@endsection
@section('subtitle')
    Kategori
@endsection
@push('style')
    <link href="https://cdn.datatables.net/v/dt/dt-1.13.4/datatables.min.css" rel="stylesheet" />
@endpush
@push('script')
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
    <script src="https://cdn.datatables.net/v/dt/dt-1.13.4/datatables.min.js"></script>
@endpush

@section('content')
    <table class="table" id="example">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Kategori</th>
                <th scope="col">Deskripsi</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($kategori as $key => $value)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $value->nama }}</td>
                    <td>{{ Str::limit($value->deskripsi, 50) }}</td>
                    <td>
                        <form action="/kategori/{{ $value->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <a href="/kategori/{{ $value->id }}" class="btn btn-info btn-sm mr-3"><i
                                    class="fas fa-eye"></i></a>
                            <a href="/kategori/{{ $value->id }}/edit" class="btn btn-primary btn-sm"><i
                                    class="fas fa-edit"></i></a>
                            <button type="submit" class="btn btn-danger btn-sm ml-3"><i class="fas fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td><b>Not Found Kategori</b></td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
