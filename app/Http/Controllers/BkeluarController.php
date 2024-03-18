<?php

namespace App\Http\Controllers;

use App\Models\Stok;
use App\Models\Pelanggan;
use App\Models\Bkeluar;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BkeluarController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bkeluar = Bkeluar::all();
        return view('bkeluar.bkeluar', compact('bkeluar'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $namabarang = Stok::all();
        $namapengguna = Pelanggan::all();
        return view('bkeluar.insert', compact('namabarang','namapengguna'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                
                'tanggalfaktur' => ['required'],
                'stok_id' => ['required'],
                'jumlah' => ['required'],
                'subtotal' => ['required'],
                'user_id' => ['required'],
                'tanggalbuat' => ['required'],
                'cabang' => ['required'],
            ],
            [
                'tanggalfaktur.required' => 'Masukkan Tanggal Faktur',
                'stok_id.required' => 'Masukkan Nama Barang',
                'jumlah.required' => 'Jumlah Harus Diisi',
                'subtotal.required' => 'Masukkan Subtotal',
                'user_id.required' => 'Nama Pengguna Harus Diisi',
                'tanggalbuat.required' => ' Masukkan Tanggal Buat ',
                'cabang.required' => 'Nama Cabang Harus Diisi',
            ]
        );       
        
         $bkeluar = new Bkeluar;
         $bkeluar -> tanggalfaktur = $request['tanggalfaktur'];
         $bkeluar -> stok_id = $request['stok_id'];
         $bkeluar -> jumlah = $request['jumlah'];
         $bkeluar -> subtotal = $request['subtotal'];
         $bkeluar -> user_id = $request['user_id'];
         $bkeluar -> tanggalbuat = $request['tanggalbuat'];
         $bkeluar -> cabang = $request['cabang'];
         $bkeluar ->save();
 
         if ($bkeluar) {
                return redirect('/bkeluar')->with('status' , 'Barang Keluar Berhasil Ditambah');
         } else {
            return redirect('/tambahbkeluar')->with('status' , 'Barang Keluar Gagal Ditambah');
         }

    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $namabarang = Stok::all();
        $namapengguna = Pelanggan::all();
        $bkeluar = Bkeluar::find($id);
        return view('bkeluar.edit' , compact('bkeluar','namabarang','namapengguna'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate(
            [
                
                'tanggalfaktur' => ['required'],
                'stok_id' => ['required'],
                'jumlah' => ['required'],
                'subtotal' => ['required'],
                'user_id' => ['required'],
                'tanggalbuat' => ['required'],
                'cabang' => ['required'],
            ],
            [
                'tanggalfaktur.required' => 'Masukkan Tanggal Faktur',
                'stok_id.required' => 'Masukkan Nama Barang',
                'jumlah.required' => 'Jumlah Harus Diisi',
                'subtotal.required' => 'Masukkan Subtotal',
                'user_id.required' => 'Nama Pengguna Harus Diisi',
                'tanggalbuat.required' => ' Masukkan Tanggal Buat ',
                'cabang.required' => 'Nama Cabang Tidak Boleh Kosong',
            ]
        );       
        
         $bkeluar = Bkeluar::find($id);
         $bkeluar -> tanggalfaktur = $request['tanggalfaktur'];
         $bkeluar -> stok_id = $request['stok_id'];
         $bkeluar -> jumlah = $request['jumlah'];
         $bkeluar -> subtotal = $request['subtotal'];
         $bkeluar -> user_id = $request['user_id'];
         $bkeluar -> tanggalbuat = $request['tanggalbuat'];
         $bkeluar -> cabang = $request['cabang'];
         $bkeluar ->save();
 
         if ($bkeluar) {
                return redirect('/bkeluar')->with('status' , 'Barang Keluar Berhasil Ditambah');
         } else {
            return redirect('/tambahbkeluar')->with('status' , 'Barang Keluar Gagal Ditambah');
         }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Bkeluar::destroy('id',$id);

        return redirect('/bkeluar');
    }
}
