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
                
                'tanggalfkt' => ['required'],
                'stok_id' => ['required'],
                'jumlahbk' => ['required'],
                'pelanggan_id' => ['required'],
                'tanggalbuat' => ['required'],
                
            ],
            [
                'tanggalfkt.required' => 'Masukkan Tanggal fkt',
                'stok_id.required' => 'Masukkan Nama Barang',
                'jumlahbk.required' => 'Jumlah Harus Diisi',
                'pelanggan_id.required' => 'Nama Pengguna Harus Diisi',
                'tanggalbuat.required' => ' Masukkan Tanggal Buat ',
            ]
        ); 
        $idstok = $request ['stok_id'];
        $produk = Stok::findOrfail($idstok);
        $subtotal = $produk->hargalist *$request['jumlahbk'];

         $bkeluar = new Bkeluar;
         $bkeluar -> tanggalfkt = $request['tanggalfkt'];
         $bkeluar -> stok_id = $request['stok_id'];
         $bkeluar -> jumlahbkbk = $request['jumlahbk'];
         $bkeluar -> pelanggan_id = $request['pelanggan_id'];
         $bkeluar -> tanggalbuat = $request['tanggalbuat'];
         $bkeluar -> subtotal = $subtotal;
         $bkeluar ->save();

         $updatestok = Stok::findOrfail($idstok);
         $updatestok->update([
             'jstok' =>$updatestok->hargalist - $request['jumlahbk'],
         ]);
 
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
                
                'tanggalfkt' => ['required'],
                'stok_id' => ['required'],
                'jumlahbk' => ['required'],
                'pelanggan_id' => ['required'],
                'tanggalbuat' => ['required'],

            ],
            [
                'tanggalfkt.required' => 'Masukkan Tanggal fkt',
                'stok_id.required' => 'Masukkan Nama Barang',
                'jumlahbk.required' => 'Jumlah Harus Diisi',
                'pelanggan_id.required' => 'Nama Pengguna Harus Diisi',
                'tanggalbuat.required' => ' Masukkan Tanggal Buat ',
            ]
        );       
        
        $idstok = $request ['stok_id'];
        $produk = Stok::findOrfail($idstok);
        $subtotal = $produk->hargalist *$request['jumlahbk'];

         $bkeluar = Bkeluar::find($id);
         $bkeluar -> tanggalfkt = $request['tanggalfkt'];
         $bkeluar -> stok_id = $request['stok_id'];
         $bkeluar -> jumlahbkbk = $request['jumlahbk'];
         $bkeluar -> pelanggan_id = $request['pelanggan_id'];
         $bkeluar -> tanggalbuat = $request['tanggalbuat'];
         $bkeluar -> subtotal = $subtotal;
         $bkeluar ->save();

         $updatestok = stok::findOrfail($idstok);
         $updatestok->update([
             'jstok' =>$updatestok->hargalist - $request['jumlahbk'],
         ]);
 
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
