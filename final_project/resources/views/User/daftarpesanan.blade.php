@include('struktur.navbar')

<div class="container-fluid">
    <table class="table table-light ">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Harga</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @php
                $total = 0;
                $count = 1;
            @endphp

            @foreach ($keranjang as $item)
                <tr>
                    <td>{{ $count++ }}</td>
                    <td>{{ $item->product_nama }}</td>
                    <td>{{ $item->price }}</td>
                    <td>
                        @if ($item['status']==1)
                            Diterima
                        @elseif ($item['status'] == 2)
                            Ditolak
                        @else
                            Menunggu
                        @endif
                    </td>
                    <td>
                        <form action="{{ route('delete.pesanan', $item->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
                @php
                    $total += $item->price;
                @endphp
            @endforeach
            <tr>
                <td colspan="3" class="text-center">Total</td>
                <td>{{ $total }}</td>
            </tr>
        </tbody>
    </table>
</div>

<p class="m-0 text-center text-white">
    &copy; Designed by Kelompok 06 PA 2023
</p>
