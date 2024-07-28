<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelayanan;

class PelayananController extends Controller
{
    public function create()
    {
        return view('pelayanan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'jenis_pelayanan' => 'required',
            'nama' => 'required',
            'nik' => 'required',
            'tempat_tgl_lahir' => 'required',
            'no_wa' => 'required',
            'pekerjaan' => 'required',
            'tempat_tinggal' => 'required',
            'keperluan' => 'required',
            'tujuan' => 'required',
            'keterangan_lain' => 'nullable',
        ]);

        Pelayanan::create($request->all());

        return redirect()->route('pelayanan.create')->with('success', 'Pengajuan berhasil ditambahkan.');
    }
}