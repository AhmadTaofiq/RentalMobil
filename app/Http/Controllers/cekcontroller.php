<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Penyewa;
use App\Models\User;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class cekcontroller extends Controller
{
    /**
     * Summary of index
     * @return void
     */
    public function index(Request $request)
    {
        return view('check.cek')->with([
            'user' => User::all(),
            'penyewa' => Penyewa::all(),
            'barang' => Barang::all(),
        ]);
    }
    public function create()
    {
        return view('check.create')->with([
            'user' => User::all(),
            'barang' => Barang::all()
        ]);
    }
    public function store(Request $request)
    {
        $request->validate([
            'nik_user' => 'required',
            'plat_mobil' => 'required',
            'tgl_peminjaman' => 'required',
            'tgl_pengembalian' => 'required',
            'total_hari' => 'required',
            'total_harga' => 'required',
            'transaksi_pembayaran' => 'required',
        ]);
        $penyewa = new Penyewa;
        $penyewa->nik_user = $request->nik_user;
        $penyewa->plat_mobil = $request->plat_mobil;
        $penyewa->tgl_peminjaman = $request->tgl_peminjaman;
        $penyewa->tgl_pengembalian = $request->tgl_pengembalian;
        $penyewa->total_hari = $request->total_hari;
        $penyewa->total_harga = $request->total_harga;
        $penyewa->transaksi_pembayaran = $request->transaksi_pembayaran;
        $penyewa->save();

        return to_route('check.cek');
    }
}
