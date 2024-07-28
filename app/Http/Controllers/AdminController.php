<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelayanan;

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
}