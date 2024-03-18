<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PelangganController extends Controller
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
        $pelanggan = Pelanggan::all();
        return view('pelanggan.pelanggan', compact('pelanggan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pelanggan.insert');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'nama' => ['required'],
                'nomortelepon' => ['required'],
                'alamat' => ['required'],
                'jeniskelamin' => ['required'],
                'kota' => ['required'],
                'provinsi' => ['required'],
            ],
            [
                'nama.required'=> 'Masukkan Nama Pelanggan',
                'nomortelepon.required'=> 'Masukkan Nomor Telepon',
                'alamat.required'=> 'Tuliskan Alamat',
                'jeniskelamin.required'=> 'Masukkan Jenis Kelamin',
                'kota.required'=> 'Masukkan Nama Kota',
                'provinsi.required'=> 'Masukkan Nama Provinsi',
            ]
        );

         $pelanggan = new Pelanggan;
        $pelanggan -> nama = $request['nama'];
        $pelanggan -> nomortelepon = $request['nomortelepon'];
        $pelanggan -> alamat = $request['alamat'];
        $pelanggan -> jeniskelamin = $request['jeniskelamin'];
        $pelanggan -> kota = $request['kota'];
        $pelanggan -> provinsi = $request['provinsi'];
        $pelanggan->save();

        if ($pelanggan) {
            return redirect('/pelanggan')->with('status', 'Data berhasil ditambahkan');
        } else {
            return redirect('/tambahpelanggan')->with('status', 'Data gagal ditambahkan');
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
        $pelanggan = Pelanggan::find($id);
        return view('pelanggan.edit', compact('pelanggan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate(
            [
                'nama' => ['required'],
                'nomortelepon' => ['required'],
                'alamat' => ['required'],
                'jeniskelamin' => ['required'],
                'kota' => ['required'],
                'provinsi' => ['required'],
            ],
            [
                'nama.required'=> 'Masukkan Nama Pelanggan',
                'nomortelepon.required'=> 'Masukkan Nomor Telepon',
                'alamat.required'=> 'Tuliskan Alamat',
                'jeniskelamin.required'=> 'Masukkan Jenis Kelamin',
                'kota.required'=> 'Masukkan Nama Kota',
                'provinsi.required'=> 'Masukkan Nama Provinsi',
            ]
        );

         $pelanggan = Pelanggan::find($id);
        $pelanggan -> nama = $request['nama'];
        $pelanggan -> nomortelepon = $request['nomortelepon'];
        $pelanggan -> alamat = $request['alamat'];
        $pelanggan -> jeniskelamin = $request['jeniskelamin'];
        $pelanggan -> kota = $request['kota'];
        $pelanggan -> provinsi = $request['provinsi'];
        $pelanggan->save();

        if ($pelanggan) {
            return redirect('/pelanggan')->with('status', 'Data berhasil ditambahkan');
        } else {
            return redirect('/tambahpelanggan')->with('status', 'Data gagal ditambahkan');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Pelanggan::destroy('id',$id);
        return redirect('/pelanggan');
    }
}
