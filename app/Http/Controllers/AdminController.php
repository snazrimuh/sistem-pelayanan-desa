<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelayanan;
use Barryvdh\DomPDF\Facade\Pdf;

class AdminController extends Controller
{
    // Menampilkan daftar pelayanan
    public function index()
    {
        $pelayanans = Pelayanan::all();
        return view('admin.pelayanan.index', compact('pelayanans'));
    }

    // Menampilkan form edit pelayanan
    public function edit($id)
    {
        $pelayanan = Pelayanan::findOrFail($id);
        return view('admin.pelayanan.edit', compact('pelayanan'));
    }

    // Memproses update data pelayanan
    public function update(Request $request, $id)
    {
        $request->validate([
            'jenis_kode_pelayanan' => 'required',
            'nama' => 'required|string',
            'nik' => 'required|string',
            'jenis_kelamin' => 'required|in:Laki-Laki,Perempuan',
            'tempat_tgl_lahir' => 'required|string',
            'no_wa' => 'required|string',
            'pekerjaan' => 'required|string',
            'tempat_tinggal' => 'required|string',
            'keperluan' => 'required|string',
            'tujuan' => 'required|string',
            'keterangan_lain' => 'nullable|string',
            'mengetahui' => 'required|string',
        ]);

        $pelayanan = Pelayanan::findOrFail($id);

        list($jenis_pelayanan, $kode_pelayanan) = explode('|', $request->jenis_kode_pelayanan);

        $pelayanan->jenis_pelayanan = $jenis_pelayanan;
        $pelayanan->kode_pelayanan = $kode_pelayanan;
        $pelayanan->nama = $request->nama;
        $pelayanan->nik = $request->nik;
        $pelayanan->jenis_kelamin = $request->jenis_kelamin;
        $pelayanan->tempat_tgl_lahir = $request->tempat_tgl_lahir;
        $pelayanan->no_wa = $request->no_wa;
        $pelayanan->pekerjaan = $request->pekerjaan;
        $pelayanan->tempat_tinggal = $request->tempat_tinggal;
        $pelayanan->keperluan = $request->keperluan;
        $pelayanan->tujuan = $request->tujuan;
        $pelayanan->keterangan_lain = $request->keterangan_lain;
        $pelayanan->mengetahui = $request->mengetahui;

        $pelayanan->save();

        return redirect()->route('admin.pelayanan.show', $pelayanan->id)->with('success', 'Data pelayanan berhasil diperbarui');
    }

    // Menghapus pelayanan
    public function destroy($id)
    {
        $pelayanan = Pelayanan::findOrFail($id);
        $pelayanan->delete();
        return redirect()->route('admin.pelayanan.index')->with('success', 'Data berhasil dihapus.');
    }

    public function show($id)
    {
        $pelayanan = Pelayanan::findOrFail($id);
        return view('admin.pelayanan.show', compact('pelayanan'));
    }

    public function cetakPDF($id)
    {
        $image = base64_encode(file_get_contents(public_path('/images/sukoharjo.png')));
        $pelayanan = Pelayanan::find($id);

        if ($pelayanan) {
            $pdf = Pdf::loadView('admin.pelayanan.pdf', compact('pelayanan', 'image'));
            $fileName = 'cetak_pengajuan_' . preg_replace('/\s+/', '_', $pelayanan->nama) . '.pdf';
            return $pdf->download($fileName);
        } else {
            return redirect()->route('admin.pelayanan.index')->with('error', 'Data tidak ditemukan.');
        }
    }
}