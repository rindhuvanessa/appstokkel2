<?php

namespace App\Http\Controllers;

use App\Models\Bkeluar;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BkeluarController extends Controller
{
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
        return view('bkeluar.insert');
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
        $bkeluar = Bkeluar::find($id);
        return view('bkeluar.bkeluar' , compact('bkeluar'));
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
        //
    }
}
