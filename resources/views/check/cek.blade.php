<x-main>
    <div class="container">
        <h1>Penyewa</h1>
        <form action="{{ route('check.create') }}">
            <button class="btn btn-primary">Tambah</button>
        </form>
        <table class="table">
            <tr>
                <th>No</th>
                <th>Nik user</th>
                <th>Plat Mobil</th>
                <th>tgl_peminjaman</th>
                <th>tgl_pengembalian</th>
                <th>total_hari</th>
                <th>total_harga</th>
                <th>transaksi pembayaran</th>
            </tr>
            <tr>
                @if ($penyewa->count() > 0)
                    @foreach ($penyewa as $no => $hasil)
                        <th>{{ $no + 1 }}</th>
                        <td>{{ $hasil->user?->nik_user }}</td>
                        <td>{{ $hasil->barang?->plat_mobil }}</td>
                        <td>{{ $hasil->tgl_peminjaman }}</td>
                        <td>{{ $hasil->tgl_pengembalian }}</td>
                        <td>{{ $hasil->total_hari }}</td>
                        <td>{{ $hasil->total_hari * 200 }}</td>
                        <td>{{ $hasil->transaksi_pembayaran }}</td>
                    @endforeach
                @endif
            </tr>
        </table>
    </div>
</x-main>
