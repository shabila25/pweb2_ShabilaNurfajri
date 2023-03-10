<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\tabel_pemasukan;

class PemasukanController extends Controller
{
    public function index()
    {
        $pemasukan = tabel_pemasukan::all();
        return view('sneat.html.pemasukan',compact(['pemasukan']));
        // return view('sneat.html.pemasukan',compact(['pemasukan']));
    }

    public function store(Request $request)
    {
        pemasukan::create($request->except(['_token','submit']));
        return redirect('/pemasukan');
    }
}
