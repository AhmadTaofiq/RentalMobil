<x-main>
    <div class="container mt-10">
        <form action="{{ route('check.store') }}" method="POST" class="form-control">
            @csrf
            <div class="mb-3">
                <select class="form-control" name="nik_user" id="nik_user">
                    <option value="">--pilih--</option>
                    @foreach ($user as $u)
                        <option value="{{$u->id}}">
                            {{$u->nik_user}}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <select class="form-control" name="plat_mobil" id="plat_mobil">
                    <option value="">--pilih--</option>
                    @foreach ($barang as $b)
                        <option value="{{$b->id}}">
                            {{$b->plat_mobil}}
                        </option>
                    @endforeach
                </select>
            </div>
            <input class="form-control mb-3" type="date" name="tgl_peminjaman" id="tgl_peminjaman">
            <input class="form-control mb-3" type="date" name="tgl_pengembalian" id="tgl_pengembalian">
            <input class="form-control mb-3" type="number"name="total_hari" id="total_hari">
            <input class="form-control mb-3" type="text" name="total_harga" id="total_harga">
            <input class="form-control mb-3" type="text" name="transaksi_pembayaran" id="transaksi_pembayaran">
            <button class="btn btn-primary mt-10"> Submit </button>
        </form>
    </div>
</x-main>
