<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelayanan extends Model
{
    use HasFactory;

    protected $table = 'pelayanan';

    protected $fillable = [
        'jenis_pelayanan',
        'kode_pelayanan',
        'nama',
        'nik',
        'jenis_kelamin',
        'tempat_tgl_lahir',
        'no_wa',
        'pekerjaan',
        'tempat_tinggal',
        'keperluan',
        'tujuan',
        'keterangan_lain',
        'mengetahui',
    ];
}