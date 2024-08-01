@extends('layouts.app')

@section('content')
<div class="container-fluid mt-3">
    <div class="container d-flex justify-content-center align-items-center">
        <div class="col-md-8">
            <div class="card shadow">
                <div class="card-body p-4">
                    <h5 class="card-title text-center"><strong>{{ __('Form Pelayanan Desa') }}</strong></h5>
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
                            <label for="jenis_kode_pelayanan">{{ __('Jenis Pelayanan') }}</label>
                            <select name="jenis_kode_pelayanan" id="jenis_kode_pelayanan" class="form-select mt-2"
                                required>
                                <option value="">{{ __('Pilih Jenis Pelayanan') }}</option>
                                <option value="Pembuatan KTP|474">{{ __('Pembuatan KTP') }}</option>
                                <option value="Pembuatan SKCK|560">{{ __('Pembuatan SKCK') }}</option>
                                <option value="Pembuatan KIS/BPJS|440">{{ __('Pembuatan KIS/BPJS') }}</option>
                                <option value="Surat Kematian|474.3">{{ __('Surat Kematian') }}</option>
                                <option value="Surat Kelahiran|474.1">{{ __('Surat Kelahiran') }}</option>
                                <option value="Surat Izin Kerja|474">{{ __('Surat Izin Kerja') }}</option>
                                <option value="Pembuatan KIP/Pendidikan|420">{{ __('Pembuatan KIP/Pendidikan') }}
                                </option>
                                <option value="Surat Ket. Usaha/Bank|580">{{ __('Surat Ket. Usaha/Bank') }}</option>
                                <option value="Surat Pindah Penduduk|475">{{ __('Surat Pindah Penduduk') }}</option>
                                <option value="Surat Kehilangan|474">{{ __('Surat Kehilangan') }}</option>
                                <option value="Surat Ket. NPWP|503">{{ __('Surat Ket. NPWP') }}</option>
                                <option value="Surat Sosial Kesra|460">{{ __('Surat Sosial Kesra') }}</option>
                                <option value="BPUM/UMKM|412">{{ __('BPUM/UMKM') }}</option>
                                <option value="Surat Ket. lainnya|___">{{ __('Surat Ket. Lainnya') }}</option>
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
                            <label for="jenis_kelamin">{{ __('Jenis Kelamin') }}</label>
                            <select name="jenis_kelamin" id="jenis_kelamin" class="form-control mt-2" required>
                                <option value="">Pilih Jenis Kelamin</option>
                                <option value="Laki-Laki">Laki-Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
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