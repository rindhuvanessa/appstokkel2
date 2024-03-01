<?php

namespace App\Http\Controllers;

use App\Models\Suplayer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SuplayerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $suplayers = Suplayer::all();
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
        $sup = Suplayer::create($request->validate());

        if ($sup) {
            return redirect('/Suplayer')->with('status', 'Data telah ditambahkan');
        } else {
            return redirect('/tambah Suplayer')->with('status', 'Data telah ditambahkan');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
