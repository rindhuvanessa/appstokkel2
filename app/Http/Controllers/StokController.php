<?php

namespace App\Http\Controllers;

use App\Models\Stok;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StokController extends Controller
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
        $stok = Stok::all();
        return view('stok.stok', compact('stok'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('stok.insert');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'kode' => ['required'],
                'namab' => ['required'],
                'hargalist' => ['required'],
                'jstok' => ['required'],
                'cabang' => ['required'],

            ],
            [
                'kode.required'=> 'Masukkan Kode',
                'namab.required'=> 'Masukkan namab',
                'hargalist.required'=> 'Masukkan Harga',
                'jstok.required'=> 'Masukkan Jumlah Stok',
                'cabang.required'=> 'Masukkan Cabang',
            ]
        );

         $stok = new Stok;
        $stok -> kode = $request['kode'];
        $stok -> namab = $request['namab'];
        $stok -> hargalist = $request['hargalist'];
        $stok -> jstok = $request['jstok'];
        $stok -> cabang = $request['cabang'];
        $stok->save();

        if ($stok) {
            return redirect('/stok')->with('status', 'Data berhasil ditambahkan');
        } else {
            return redirect('/tambahstok')->with('status', 'Data gagal ditambahkan');
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
        $stok = Stok::find($id);
        return view('stok.edit', compact('stok'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate(
            [
                'kode' => ['required'],
                'namab' => ['required'],
                'hargalist' => ['required'],
                'jstok' => ['required'],
                'cabang' => ['required'],
            ],
            [
                'kode.required'=> 'Masukkan Kode',
                'namab.required'=> 'Masukkan namab',
                'hargalist.required'=> 'Masukkan Harga',
                'jstok.required'=> 'Masukkan Stok',
                'cabang.required'=> 'Masukkan Cabang',
            ]
        );

          $stok = Stok::find($id);
         $stok -> kode = $request['kode'];
         $stok -> namab = $request['namab'];
         $stok -> hargalist = $request['hargalist'];
         $stok -> jstok = $request['jstok'];
         $stok -> cabang = $request['cabang'];
         $stok->save();

        if ($stok) {
            return redirect('/stok')->with('status', 'Data berhasil ditambahkan');
        } else {
            return redirect('/tambahstok')->with('status', 'Data gagal ditambahkan');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Stok::destroy('id',$id);
        return redirect('/stok');
    }
}
