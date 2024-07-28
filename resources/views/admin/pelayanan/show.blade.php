@extends('admin.app')

@section('content')
<div class="container-fluid">
    <div class="container">
        <h1 class="text-center mb-4">{{ __('Detail Pengajuan Pelayanan') }}</h1>

        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif

        <div class="card shadow-sm">
            <div class="card-body p-4">
                <div>
                    <a href="{{ route('admin.pelayanan.index') }}"
                        class="btn btn-outline-primary btn-sm mx-1">{{ __('Kembali') }}</a>
                </div>
                <table class="table table-sm table-hover mt-3">
                    <tr>
                        <th>{{ __('Nama') }}</th>
                        <td>{{ $pelayanan->nama }}</td>
                    </tr>
                    <tr>
                        <th>{{ __('Jenis Pelayanan') }}</th>
                        <td>{{ $pelayanan->jenis_pelayanan }}</td>
                    </tr>
                    <tr>
                        <th>{{ __('NIK') }}</th>
                        <td>{{ $pelayanan->nik }}</td>
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
                </table>
            </div>
        </div>
    </div>
</div>
@endsection