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
                'user_id' => ['required'],
                'tanggalbuat' => ['required'],
                
            ],
            [
                'tanggalfaktur.required' => 'Masukkan Tanggal Faktur',
                'stok_id.required' => 'Masukkan Nama Barang',
                'jumlah.required' => 'Jumlah Harus Diisi',
                'user_id.required' => 'Nama Pengguna Harus Diisi',
                'tanggalbuat.required' => ' Masukkan Tanggal Buat ',
            ]
        ); 
        $idstok = $request ['stok_id'];
        $produk = Stok::findOrfail($idstok);
        $subtotal = $produk->hargalist *$request['jumlah'];

         $bkeluar = new Bkeluar;
         $bkeluar -> tanggalfaktur = $request['tanggalfaktur'];
         $bkeluar -> stok_id = $request['stok_id'];
         $bkeluar -> jumlahbk = $request['jumlah'];
         $bkeluar -> user_id = $request['user_id'];
         $bkeluar -> tanggalbuat = $request['tanggalbuat'];
         $bkeluar -> subtotal = $subtotal;
         $bkeluar ->save();

         $updatestok = Stok::findOrfail($idstok);
         $updatestok->update([
             'stok' =>$updatestok->hargalist - $request['jumlah'],
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
                
                'tanggalfaktur' => ['required'],
                'stok_id' => ['required'],
                'jumlah' => ['required'],
                'user_id' => ['required'],
                'tanggalbuat' => ['required'],

            ],
            [
                'tanggalfaktur.required' => 'Masukkan Tanggal Faktur',
                'stok_id.required' => 'Masukkan Nama Barang',
                'jumlah.required' => 'Jumlah Harus Diisi',
                'user_id.required' => 'Nama Pengguna Harus Diisi',
                'tanggalbuat.required' => ' Masukkan Tanggal Buat ',
            ]
        );       
        
        $idstok = $request ['stok_id'];
        $produk = Stok::findOrfail($idstok);
        $subtotal = $produk->hargalist *$request['jumlah'];

         $bkeluar = Bkeluar::find($id);
         $bkeluar -> tanggalfaktur = $request['tanggalfaktur'];
         $bkeluar -> stok_id = $request['stok_id'];
         $bkeluar -> jumlahbk = $request['jumlah'];
         $bkeluar -> user_id = $request['user_id'];
         $bkeluar -> tanggalbuat = $request['tanggalbuat'];
         $bkeluar -> subtotal = $subtotal;
         $bkeluar ->save();

         $updatestok = stok::findOrfail($idstok);
         $updatestok->update([
             'stok' =>$updatestok->hargalist - $request['jumlah'],
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
