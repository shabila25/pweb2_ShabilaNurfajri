<?php

namespace App\Http\Controllers;
use App\Models\tabel_pemasukan;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function tampil()
    {
        $tabel_pemasukan = tabel_pemasukan::all();
        // return view('sneat.html.index',compact('tabel_pemasukan'));
        return view('sneat.html.index', compact('tabel_pemasukan'));
    }
   
    public function tambahmasuk()
    {
        // $tabel_pemasukan = tabel_pemasukan::all();
        // return view('sneat.html.index',compact('tabel_pemasukan'));
        return view('sneat.html.tambah-masuk');
    }

    public function insertmasuk(Request $request)
    {
        $data = $request->all();
        $masuk = new tabel_pemasukan();
        $masuk->nama = $data['nama'];
        $masuk->alamat = $data['alamat'];
        $masuk->simpanan_pokok = $data['simpanan_pokok'];
        $masuk->simpanan_wajib = $data['simpanan_wajib'];
        $masuk->simpanan_manasuka = $data['simpanan_manasuka'];
        $masuk->save();
        return redirect()->route('dashboard');
    }

    public function delete(string $id_anggota)
    {
        tabel_pemasukan::where('id_anggota',$id_anggota)->delete();
        return redirect()->to('dashboard')->with('success');
    }

}
