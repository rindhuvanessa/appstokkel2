<?php

namespace App\Http\Controllers;

use App\Models\Bmasuk;
use App\Models\Bkeluar;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RecapController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $tgl_mulai = $request->tgl_mulai;
        $tgl_selesai = $request->tgl_selesai;
        if ($tgl_mulai or $tgl_selesai) {
            $bmasuk = Bmasuk::whereBetween('tglfktr',[$tgl_mulai, $tgl_selesai])->get();
            $bkeluar = Bkeluar::whereBetween('tanggalfkt',[$tgl_mulai, $tgl_selesai])->get();
            $sum_total = Bkeluar::whereBetween('tanggalfkt',[$tgl_mulai, $tgl_selesai])->sum('subtotal');

            return view('recap.recap', compact('bmasuk','bkeluar'));
        } else {

            $bmasuk = Bmasuk::all();
            $bkeluar = Bkeluar::all();
            $sum_total = Bkeluar::sum('subtotal');
            return view('recap.recap', compact('barangmasuk','bkeluar'));

        }
        return view('recap.recap', compact('bmasuk','bkeluar'));
    }
}