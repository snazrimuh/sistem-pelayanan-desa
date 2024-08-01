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