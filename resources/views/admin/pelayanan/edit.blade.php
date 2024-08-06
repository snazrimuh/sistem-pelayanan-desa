@extends('admin.app')

@section('content')
<div class="container" style="max-width: 800px;">
    <div class="card shadow-sm">
        <div class="card-body p-3">
            <h2 class="text-center mb-4 mt-3">{{ __('Edit Pelayanan') }}</h2>
            <form action="{{ route('admin.pelayanan.update', $pelayanan->id) }}" method="POST">
                @csrf
                @method('PUT')

                <table class="table table-sm table-hover mb-0">
                    <tr>
                        <th><label for="jenis_kode_pelayanan">Jenis & Kode Pelayanan</label></th>
                        <td>
                            <select name="jenis_kode_pelayanan" id="jenis_kode_pelayanan" class="form-control" required>
                                <option value="">{{ __('Pilih Jenis Pelayanan') }}</option>
                                <option value="Pembuatan KTP|474"
                                    {{ $pelayanan->jenis_pelayanan == 'Pembuatan KTP' && $pelayanan->kode_pelayanan == '474' ? 'selected' : '' }}>
                                    {{ __('Pembuatan KTP') }}</option>
                                <option value="Pembuatan SKCK|560"
                                    {{ $pelayanan->jenis_pelayanan == 'Pembuatan SKCK' && $pelayanan->kode_pelayanan == '560' ? 'selected' : '' }}>
                                    {{ __('Pembuatan SKCK') }}</option>
                                <option value="Pembuatan KIS/BPJS|440"
                                    {{ $pelayanan->jenis_pelayanan == 'Pembuatan KIS/BPJS' && $pelayanan->kode_pelayanan == '440' ? 'selected' : '' }}>
                                    {{ __('Pembuatan KIS/BPJS') }}</option>
                                <option value="Surat Kematian|474.3"
                                    {{ $pelayanan->jenis_pelayanan == 'Surat Kematian' && $pelayanan->kode_pelayanan == '474.3' ? 'selected' : '' }}>
                                    {{ __('Surat Kematian') }}</option>
                                <option value="Surat Kelahiran|474.1"
                                    {{ $pelayanan->jenis_pelayanan == 'Surat Kelahiran' && $pelayanan->kode_pelayanan == '474.1' ? 'selected' : '' }}>
                                    {{ __('Surat Kelahiran') }}</option>
                                <option value="Surat Izin Kerja|474"
                                    {{ $pelayanan->jenis_pelayanan == 'Surat Izin Kerja' && $pelayanan->kode_pelayanan == '474' ? 'selected' : '' }}>
                                    {{ __('Surat Izin Kerja') }}</option>
                                <option value="Pembuatan KIP/Pendidikan|420"
                                    {{ $pelayanan->jenis_pelayanan == 'Pembuatan KIP/Pendidikan' && $pelayanan->kode_pelayanan == '420' ? 'selected' : '' }}>
                                    {{ __('Pembuatan KIP/Pendidikan') }}</option>
                                <option value="Surat Ket. Usaha/Bank|580"
                                    {{ $pelayanan->jenis_pelayanan == 'Surat Ket. Usaha/Bank' && $pelayanan->kode_pelayanan == '580' ? 'selected' : '' }}>
                                    {{ __('Surat Ket. Usaha/Bank') }}</option>
                                <option value="Surat Pindah Penduduk|475"
                                    {{ $pelayanan->jenis_pelayanan == 'Surat Pindah Penduduk' && $pelayanan->kode_pelayanan == '475' ? 'selected' : '' }}>
                                    {{ __('Surat Pindah Penduduk') }}</option>
                                <option value="Surat Kehilangan|474"
                                    {{ $pelayanan->jenis_pelayanan == 'Surat Kehilangan' && $pelayanan->kode_pelayanan == '474' ? 'selected' : '' }}>
                                    {{ __('Surat Kehilangan') }}</option>
                                <option value="Surat Ket. NPWP|503"
                                    {{ $pelayanan->jenis_pelayanan == 'Surat Ket. NPWP' && $pelayanan->kode_pelayanan == '503' ? 'selected' : '' }}>
                                    {{ __('Surat Ket. NPWP') }}</option>
                                <option value="Surat Sosial Kesra|460"
                                    {{ $pelayanan->jenis_pelayanan == 'Surat Sosial Kesra' && $pelayanan->kode_pelayanan == '460' ? 'selected' : '' }}>
                                    {{ __('Surat Sosial Kesra') }}</option>
                                <option value="BPUM/UMKM|412"
                                    {{ $pelayanan->jenis_pelayanan == 'BPUM/UMKM' && $pelayanan->kode_pelayanan == '412' ? 'selected' : '' }}>
                                    {{ __('BPUM/UMKM') }}</option>
                                <option value="Surat Ket. lainnya|___"
                                    {{ $pelayanan->jenis_pelayanan == 'Surat Ket. lainnya' && $pelayanan->kode_pelayanan == '___' ? 'selected' : '' }}>
                                    {{ __('Surat Ket. Lainnya') }}</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th><label for="nama">Nama</label></th>
                        <td><input type="text" class="form-control" id="nama" name="nama" value="{{ $pelayanan->nama }}"
                                required></td>
                    </tr>
                    <tr>
                        <th><label for="nik">NIK</label></th>
                        <td><input type="text" class="form-control" id="nik" name="nik" value="{{ $pelayanan->nik }}"
                                required>
                        </td>
                    </tr>
                    <tr>
                        <th><label for="jenis_kelamin">Jenis Kelamin</label></th>
                        <td>
                            <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" required>
                                <option value="Laki-Laki"
                                    {{ $pelayanan->jenis_kelamin == 'Laki-Laki' ? 'selected' : '' }}>
                                    Laki-Laki</option>
                                <option value="Perempuan"
                                    {{ $pelayanan->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>
                                    Perempuan</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th><label for="tempat_tgl_lahir">Tempat & Tgl Lahir</label></th>
                        <td><input type="text" class="form-control" id="tempat_tgl_lahir" name="tempat_tgl_lahir"
                                value="{{ $pelayanan->tempat_tgl_lahir }}" required></td>
                    </tr>
                    <tr>
                        <th><label for="no_wa">No WA</label></th>
                        <td><input type="text" class="form-control" id="no_wa" name="no_wa"
                                value="{{ $pelayanan->no_wa }}" required></td>
                    </tr>
                    <tr>
                        <th><label for="pekerjaan">Pekerjaan</label></th>
                        <td><input type="text" class="form-control" id="pekerjaan" name="pekerjaan"
                                value="{{ $pelayanan->pekerjaan }}" required></td>
                    </tr>
                    <tr>
                        <th><label for="tempat_tinggal">Tempat Tinggal</label></th>
                        <td><input type="text" class="form-control" id="tempat_tinggal" name="tempat_tinggal"
                                value="{{ $pelayanan->tempat_tinggal }}" required></td>
                    </tr>
                    <tr>
                        <th><label for="keperluan">Keperluan</label></th>
                        <td><input type="text" class="form-control" id="keperluan" name="keperluan"
                                value="{{ $pelayanan->keperluan }}" required></td>
                    </tr>
                    <tr>
                        <th><label for="tujuan">Tujuan</label></th>
                        <td><input type="text" class="form-control" id="tujuan" name="tujuan"
                                value="{{ $pelayanan->tujuan }}" required></td>
                    </tr>
                    <tr>
                        <th><label for="keterangan_lain">Keterangan Lain</label></th>
                        <td><textarea class="form-control" id="keterangan_lain"
                                name="keterangan_lain">{{ $pelayanan->keterangan_lain }}</textarea></td>
                    </tr>
                    <tr>
                        <th><label for="mengetahui">Mengetahui</label></th>
                        <td><input type="text" class="form-control" id="mengetahui" name="mengetahui"
                                value="{{ $pelayanan->mengetahui }}" required></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <button type="submit" class="btn btn-primary w-100">Simpan Perubahan</button>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</div>
@endsection