<?php

namespace App\Http\Controllers;
use App\Models\buku;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class buku_controller extends Controller
{
    public function index(){
        $data_buku =  buku::all()->sortByDesc('id');
        $no = 0;
        $banyak_data = Buku::all()->count();
        $total_harga = DB::table('buku')->sum('harga');
        return view('buku.index', compact('data_buku', 'banyak_data', 'total_harga', 'no'));
    }

    public function create(){
        return view('buku.create');
    }

    public function store(Request $req){
        $buku = new Buku;
        $buku->judul = $req->judul;
        $buku->penulis = $req->penulis;
        $buku->harga = $req->harga;
        $buku->tanggal_terbit = $req->tgl_terbit;
        $buku->save();
        return redirect('/buku');
    }

    public function destroy($id){
        $buku = Buku::find($id);
        $buku->delete();
        return redirect('/buku');
    }

    public function edit($id){
        $buku = Buku::find($id);
        return view('buku.update', compact('buku'));
    }

    public function update(Request $req, $id){
        $buku = Buku::find($id);
        $buku->judul = $req->judul;
        $buku->penulis = $req->penulis;
        $buku->harga = $req->harga;
        $buku->tanggal_terbit = $req->tgl_terbit;
        $buku->save();
        return redirect('/buku');
    }
}
