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
            'jenis_kode_pelayanan' => 'required',
            'nama' => 'required|string|max:255',
            'nik' => 'required|string|max:255',
            'jenis_kelamin' => 'required|in:Laki-Laki,Perempuan',
            'tempat_tgl_lahir' => 'required|string|max:255',
            'no_wa' => 'required|string|max:255',
            'pekerjaan' => 'required|string|max:255',
            'tempat_tinggal' => 'required|string|max:255',
            'keperluan' => 'required|string|max:255',
            'tujuan' => 'required|string|max:255',
            'keterangan_lain' => 'nullable|string',
        ]);

        list($jenis_pelayanan, $kode_pelayanan) = explode('|', $request->jenis_kode_pelayanan);

        $pelayanan = new Pelayanan([
            'jenis_pelayanan' => $jenis_pelayanan,
            'kode_pelayanan' => $kode_pelayanan,
            'nama' => $request->nama,
            'nik' => $request->nik,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tempat_tgl_lahir' => $request->tempat_tgl_lahir,
            'no_wa' => $request->no_wa,
            'pekerjaan' => $request->pekerjaan,
            'tempat_tinggal' => $request->tempat_tinggal,
            'keperluan' => $request->keperluan,
            'tujuan' => $request->tujuan,
            'keterangan_lain' => $request->keterangan_lain,
        ]);

        $pelayanan->save();

        return redirect()->route('pelayanan.create')->with('success', 'Pengajuan berhasil ditambahkan, Silakan tunggu admin menghubungi Anda');
    }

}