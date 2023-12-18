<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function showTransaksis()
    {
        $transaksis = Transaksi::all();
        return view('transaksi', ['transaksis' => $transaksis]);
    }
}
