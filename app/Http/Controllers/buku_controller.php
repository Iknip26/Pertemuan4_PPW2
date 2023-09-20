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
}
