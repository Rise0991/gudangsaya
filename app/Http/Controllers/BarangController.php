<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BarangController extends Controller
{
    public function home(){
        return view('home');
    }
    
    public function index(){
        $barang = DB::table('barang')->get();
        return view('index',['barang' => $barang]);
    }

    public function cari($id){
        $barang = DB::table('barang')->where('Idbarang',$id)->get();
        return view('index',['barang' => $barang]);
    }

    public function tambah(Request $request)
    {
        $request->file('file')->storeAs('public', $request->Idbarang);

        //insert data ke table barang
        DB::table('barang')->insert([
            'Idbarang' => $request->Idbarang,
            'NamaBarang' => $request->NamaBarang,
            'Stok' => $request->Stok,
            'Kemasan' => $request->Kemasan,
            'JenisBarang' => $request->JenisBarang,
            'Harga' => $request->Harga,
            'TanggalMasuk' => $request->TanggalMasuk,
            'Gambar' => $request->Idbarang
        ]);
        return redirect('/');
    }

    public function hapus($id){
        $barang = DB::table('barang')->where('Idbarang',$id)->delete();
        return redirect('/');
    }

    public function show($id){
        $produk = DB::table('barang')->where('Idbarang',$id)->get();
        return view('update',['barang' => $produk]);
    }

    public function edit(Request $request)
    {
        DB::table('barang')->where('Idbarang', $request->Idbarang)->update([
            'NamaBarang' => $request->NamaBarang,
            'Stok' => $request->Stok,
            'Kemasan' => $request->Kemasan,
            'JenisBarang' => $request->JenisBarang,
            'Harga' => $request->Harga,
            'TanggalMasuk' => $request->TanggalMasuk
        ]);
        return redirect('/');
    }
}