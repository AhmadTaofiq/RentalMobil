<x-main>
    <div class="container mt-10">
        <form action="{{ route('check.store') }}" method="POST" class="form-control">
            @csrf
            <input class="form-control mb-3" type="number" name="nik_user" id="nik_user">
            <input class="form-control mb-3" type="text" name="plat_mobil" id="plat_mobil">
            <input class="form-control mb-3" type="date" name="tgl_peminjaman" id="tgl_peminjaman">
            <input class="form-control mb-3" type="date" name="tgl_pengembalian" id="tgl_pengembalian">
            <input class="form-control mb-3" type="number"name="total_hari" id="total_hari">
            <input class="form-control mb-3" type="text" name="total_harga" id="total_harga">
            <input class="form-control mb-3" type="text" name="transaksi_pembayaran" id="transaksi_pembayaran">
            <button class="btn btn-primary mt-10"> Submit </button>
        </form>
    </div>
</x-main>
