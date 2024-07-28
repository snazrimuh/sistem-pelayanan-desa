@extends('layouts.app')

@section('content')
<div class="container-fluid mt-3">
    <div class="container d-flex justify-content-center align-items-center">
        <div class="col-md-8">
            <div class="card shadow">
                <div class="card-body p-4">
                    <h5 class="card-title text-center">{{ __('Form Pelayanan Desa') }}</h5>
                    <p class="text-center">Isi form untuk pengajuan pelayanan desa</p>
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        {{ $message }}
                    </div>
                    @endif
                    <form action="{{ route('pelayanan.store') }}" method="POST">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="jenis_pelayanan">{{ __('Jenis Pelayanan') }}</label>
                            <select name="jenis_pelayanan" id="jenis_pelayanan" class="form-select mt-2" required>
                                <option value="">{{ __('Pilih Jenis Pelayanan') }}</option>
                                <option value="474 - Pembuatan KTP">{{ __('Pembuatan KTP') }}</option>
                                <option value="560 - Pembuatan SKCK">{{ __('Pembuatan SKCK') }}</option>
                                <option value="440 - Pembuatan KIS/BPJS">{{ __('Pembuatan KIS/BPJS') }}</option>
                                <option value="474.3 - Surat Kematian">{{ __('Surat Kematian') }}</option>
                                <option value="474.1 - Surat Kelahiran">{{ __('Surat Kelahiran') }}</option>
                                <option value="474 - Surat Izin Kerja">{{ __('Surat Izin Kerja') }}</option>
                                <option value="420 - Pembuatan KIP/Pendidikan">{{ __('Pembuatan KIP/Pendidikan') }}
                                </option>
                                <option value="580 - Surat Ket. Usaha/Bank">{{ __('Surat Ket. Usaha/Bank') }}</option>
                                <option value="475 - Surat Pindah Penduduk">{{ __('Surat Pindah Penduduk') }}</option>
                                <option value="474 - Surat Kehilangan">{{ __('Surat Kehilangan') }}</option>
                                <option value="503 - Surat Ket. NPWP">{{ __('Surat Ket. NPWP') }}</option>
                                <option value="460 - Surat Sosial Kesra">{{ __('Surat Sosial Kesra') }}</option>
                                <option value="412 - BPUM/UMKM">{{ __('BPUM/UMKM') }}</option>
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="nama">{{ __('Nama') }}</label>
                            <input type="text" name="nama" id="nama" class="form-control mt-2" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="nik">{{ __('NIK') }}</label>
                            <input type="text" name="nik" id="nik" class="form-control mt-2" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="tempat_tgl_lahir">{{ __('Tempat, Tanggal Lahir') }}</label>
                            <input type="text" name="tempat_tgl_lahir" id="tempat_tgl_lahir" class="form-control mt-2"
                                required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="no_wa">{{ __('No WA') }}</label>
                            <input type="text" name="no_wa" id="no_wa" class="form-control mt-2" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="pekerjaan">{{ __('Pekerjaan') }}</label>
                            <input type="text" name="pekerjaan" id="pekerjaan" class="form-control mt-2" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="tempat_tinggal">{{ __('Tempat Tinggal') }}</label>
                            <input type="text" name="tempat_tinggal" id="tempat_tinggal" class="form-control mt-2"
                                required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="keperluan">{{ __('Keperluan') }}</label>
                            <input type="text" name="keperluan" id="keperluan" class="form-control mt-2" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="tujuan">{{ __('Tujuan') }}</label>
                            <input type="text" name="tujuan" id="tujuan" class="form-control mt-2" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="keterangan_lain">{{ __('Keterangan Lain') }}</label>
                            <textarea name="keterangan_lain" id="keterangan_lain" class="form-control mt-2"></textarea>
                        </div>
                        <button type="submit" class="btn mt-2 w-100" style="background-color:#3498DB; color:white">
                            {{ __('Submit') }}
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection