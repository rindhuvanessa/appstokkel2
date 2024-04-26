<?php

namespace App\Http\Controllers;

use App\Models\Stok;
use App\Models\Suplayer;
use App\Models\Bmasuk;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BmasukController extends Controller
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
        $bmasuk = Bmasuk::all();
        return view('bmasuk.bmasuk', compact('bmasuk'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $namabarang = Stok::all();
        $suplayer = Suplayer::all();
        return view('bmasuk.insert', compact('suplayer','namabarang'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'tglfktr' => ['required'],
                'suplayer_id' => ['required'],
                'stok_id' => ['required'],
                'hargabeli' => ['required'],
                'jumlahbm' => ['required'],

            ],
            [
                'tglfktr.required'=> 'Masukkan Tanggal Faktur',
                'suplayer_id.required'=> 'Masukkan Nama Suplayer',
                'stok_id.required' => 'Masukkan Stok',
                'hargabeli.required'=> 'Masukkan Harga Beli',
                'jumlahbm.required'=> 'Masukkan Jumlah',
                
            ]
        );

         $bmasuk = new Bmasuk;
        $bmasuk -> tglfktr = $request['tglfktr'];
        $bmasuk -> suplayer_id = $request['suplayer_id'];
        $bmasuk -> stok_id = $request['stok_id'];
        $bmasuk -> hargabeli = $request['hargabeli'];
        $bmasuk -> jumlahbm = $request['jumlahbm'];
        $bmasuk->save();

        $idstok = $request ['stok_id'];
        $updatestok = Stok::findOrfail($idstok);
        $updatestok->update([
            'jstok' => $updatestok->jstok + $request ['jumlahbm'],
        ]);

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
        $namabarang = Stok::all();
        $suplayer = Suplayer::all();
        $bmasuk = Bmasuk::find($id);
        return view('bmasuk.edit', compact('bmasuk','suplayer','namabarang'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate(
            [
                'tglfktr' => ['required'],
                'suplayer_id' => ['required'],
                'stok_id' => ['required'],
                'hargabeli' => ['required'],
                'jumlahbm' => ['required'],

            ],
            [
                'tglfktr.required'=> 'Masukkan Tanggal Faktur',
                'suplayer_id.required'=> 'Masukkan Nama Suplayer',
                'stok_id.required' => 'Masukkan Stok',
                'hargabeli.required'=> 'Masukkan Harga Beli',
                'jumlahbm.required'=> 'Masukkan Jumlah',
                
            ]
        );

        $bmasuk =  Bmasuk::find($id);
        $bmasuk -> tglfktr = $request['tglfktr'];
        $bmasuk -> suplayer_id = $request['suplayer_id'];
        $bmasuk -> stok_id = $request['stok_id'];
        $bmasuk -> hargabeli = $request['hargabeli'];
        $bmasuk -> jumlahbm = $request['jumlahbm'];
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
