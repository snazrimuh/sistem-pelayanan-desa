@extends('admin.app')

@section('content')
<div class="container-fluid">
    <div class="container" style="max-width: 800px;">
        @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        <div class="card shadow-sm">
            <div class="card-body p-3">
                <h2 class="text-center mb-4 mt-3">{{ __('Detail Pengajuan') }}</h2>
                <div class="d-flex justify-content-between mb-3">
                    <a href="{{ route('admin.pelayanan.index') }}" class="btn btn-primary btn-sm">
                        {{ __('Kembali') }}
                    </a>
                </div>

                <table class="table table-sm table-hover mb-0">
                    <tr>
                        <th>{{ __('Kode Pelayanan') }}</th>
                        <td>{{ $pelayanan->kode_pelayanan }}</td>
                    </tr>
                    <tr>
                        <th>{{ __('Jenis Pelayanan') }}</th>
                        <td>{{ $pelayanan->jenis_pelayanan }}</td>
                    </tr>
                    <tr>
                        <th>{{ __('Nama') }}</th>
                        <td>{{ $pelayanan->nama }}</td>
                    </tr>
                    <tr>
                        <th>{{ __('NIK') }}</th>
                        <td>{{ $pelayanan->nik }}</td>
                    </tr>
                    <tr>
                        <th>{{ __('Jenis Kelamin') }}</th>
                        <td>{{ $pelayanan->jenis_kelamin }}</td>
                    </tr>
                    <tr>
                        <th>{{ __('Tempat & Tanggal Lahir') }}</th>
                        <td>{{ $pelayanan->tempat_tgl_lahir }}</td>
                    </tr>
                    <tr>
                        <th>{{ __('No WA') }}</th>
                        <td>{{ $pelayanan->no_wa }}</td>
                    </tr>
                    <tr>
                        <th>{{ __('Pekerjaan') }}</th>
                        <td>{{ $pelayanan->pekerjaan }}</td>
                    </tr>
                    <tr>
                        <th>{{ __('Tempat Tinggal') }}</th>
                        <td>{{ $pelayanan->tempat_tinggal }}</td>
                    </tr>
                    <tr>
                        <th>{{ __('Keperluan') }}</th>
                        <td>{{ $pelayanan->keperluan }}</td>
                    </tr>
                    <tr>
                        <th>{{ __('Tujuan') }}</th>
                        <td>{{ $pelayanan->tujuan }}</td>
                    </tr>
                    <tr>
                        <th>{{ __('Keterangan Lain') }}</th>
                        <td>{{ $pelayanan->keterangan_lain }}</td>
                    </tr>
                    <tr>
                        <th>{{ __('Tanggal Pengajuan') }}</th>
                        <td>{{ $pelayanan->created_at->format('d-m-Y') }}</td>
                    </tr>
                    <tr>
                        <th>{{ __('Mengetahui') }}</th>
                        <td>{{ $pelayanan->mengetahui }}</td>
                    </tr>
                </table>
                <div class="d-flex justify-content-between mt-3">
                    <a href="{{ route('admin.pelayanan.edit', $pelayanan->id) }}" class="btn btn-warning w-100"
                        title="Edit">
                        <i class="bi bi-pencil-square"></i> {{ __('Edit') }}
                    </a>
                </div>
                <div class="d-flex justify-content-between mt-3">
                    <a href="{{ route('admin.pelayanan.cetak', $pelayanan->id) }}" class="btn btn-primary w-100"
                        title="Cetak">
                        <i class="bi bi-printer"></i> {{ __('Cetak PDF Surat') }}
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection