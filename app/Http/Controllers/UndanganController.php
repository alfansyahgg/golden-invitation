<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UndanganController extends Controller
{
    public function index()
    {
        return view('main.homepage');
    }

    public function buatUndangan(Request $request)
    {
        $validated = $request->validate([
          'namaKamu' => 'required',
          'namaPasangan' => 'required',
      ]);

        $namaKamu     = $request->input('namaKamu');
        $namaPasangan = $request->input('namaPasangan');

        return view('main.dataundangan', compact('namaKamu', 'namaPasangan'));
    }

    public function uploadfoto()
    {
        return view('main.uploadfoto');
    }
}
