<?php

namespace App\Http\Controllers;

use App\Models\Stok;
use App\Models\Suplayer;
use App\Models\Bmasuk;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BmasukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bmasuk = Bmasuk::all();
        return view('barangmasuk.barangmasuk', compact('bmasuk'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $namabarang = Stok::all();
        $suplayer = Suplayer::all();
        return view('barangmasuk.insert', compact('namabarang','suplayer'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'suplayer_id' => ['required'],
                'tanggalfaktur' => ['required'],
                'namabarang' => ['required'],
                'hargabeli' => ['required'],
                'jumlah' => ['required'],

            ],
            [
                'suplayer_id.required'=> 'Masukkan Nama Suplayer',
                'tanggalfaktur.required'=> 'Masukkan Tanggal Faktur',
                'namabarang.required'=> 'Masukkan Nama Barang',
                'hargabeli.required'=> 'Masukkan Harga Beli',
                'jumlah.required'=> 'Masukkan Jumlah',
            ]
        );

         $bmasuk = new Bmasuk;
        $bmasuk -> suplayer_id = $request['suplayer_id'];
        $bmasuk -> tanggalfaktur = $request['tanggalfaktur'];
        $bmasuk -> namabarang = $request['namabarang'];
        $bmasuk -> hargabeli = $request['hargabeli'];
        $bmasuk -> jumlah = $request['jumlah'];
        $bmasuk->save();

        if ($bmasuk) {
            return redirect('/bmasuk')->with('status', 'Data berhasil ditambahkan');
        } else {
            return redirect('/tambahbmasuk')->with('status', 'Data gagal ditambahkan');
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
        $bmasuk = Bmasuk::find($id);
        return view('barangmasuk.edit', compact('bmasuk'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate(
            [
                'suplayer_id' => ['required'],
                'tanggalfaktur' => ['required'],
                'namabarang' => ['required'],
                'hargabeli' => ['required'],
                'jumlah' => ['required'],

            ],
            [
                'suplayer_id.required'=> 'Masukkan Nama Suplayer',
                'tanggalfaktur.required'=> 'Masukkan Tanggal Faktur',
                'namabarang.required'=> 'Masukkan Nama Barang',
                'hargabeli.required'=> 'Masukkan Harga Beli',
                'jumlah.required'=> 'Masukkan Jumlah',
            ]
        );

         $bmasuk = Bmasuk::find($id);
        $bmasuk -> suplayer_id = $request['suplayer_id'];
        $bmasuk -> tanggalfaktur = $request['tanggalfaktur'];
        $bmasuk -> namabarang = $request['namabarang'];
        $bmasuk -> hargabeli = $request['hargabeli'];
        $bmasuk -> jumlah = $request['jumlah'];
        $bmasuk->save();

        if ($bmasuk) {
            return redirect('/bmasuk')->with('status', 'Data berhasil ditambahkan');
        } else {
            return redirect('/tambahbmasuk')->with('status', 'Data gagal ditambahkan');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Bmasuk::destroy('id',$id);
        return redirect('/bmasuk');
    }
}
