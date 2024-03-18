<?php

namespace App\Http\Controllers;

use App\Models\Suplayer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SuplayerController extends Controller
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
        $suplayer = Suplayer::all();
        return view('suplayer.suplayer', compact('suplayer'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('suplayer.insert');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'namasuplayer' => ['required'],
                'nomorwhatsapp' => ['required'],
                'alamatperusahaan' => ['required'],
            ],
            [
                'namasuplayer.required'=> 'Masukan Nama Suplayer',
                'nomorwhatsapp.required'=> 'Nomor Whatsapp harus diisi',
                'alamatperusahaan.required'=> 'Alamat Tidak Boleh Kosong',
            ]
        );

         $suplayer = new Suplayer;
        $suplayer -> namasupplier = $request['namasuplayer'];
        $suplayer -> nomorwhatsaap = $request['nomorwhatsapp'];
        $suplayer -> alamatperusahaan = $request['alamatperusahaan'];
        $suplayer->save();

        if ($suplayer) {
            return redirect('/suplayer')->with('status', 'Data berhasil ditambahkan');
        } else {
            return redirect('/tambahsuplayer')->with('status', 'Data gagal ditambahkan');
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
        $suplayer = Suplayer::find($id);
        return view('suplayer.edit', compact('suplayer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate(
            [
                'namasuplayer' => ['required'],
                'nomorwhatsapp' => ['required'],
                'alamatperusahaan' => ['required'],
            ],
            [
                'namasuplayer.required'=> 'Masukan Nama Suplayer',
                'nomorwhatsapp.required'=> 'Nomor Whatsapp harus diisi',
                'alamatperusahaan.required'=> 'Alamat Tidak Boleh Kosong',
            ]
        );

         $suplayer = Suplayer::find($id);
        $suplayer -> namasupplier = $request['namasuplayer'];
        $suplayer -> nomorwhatsaap = $request['nomorwhatsapp'];
        $suplayer -> alamatperusahaan = $request['alamatperusahaan'];
        $suplayer->save();

        if ($suplayer) {
            return redirect('/suplayer')->with('status', 'Data berhasil ditambahkan');
        } else {
            return redirect('/tambahsuplayer')->with('status', 'Data gagal ditambahkan');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Suplayer::destroy('id',$id);
        return redirect('/suplayer');
    }
}
