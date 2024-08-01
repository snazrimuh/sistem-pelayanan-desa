@extends('admin.app')

@section('content')
<div class="container-fluid mt-3">
    <div class="container">


        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif

        <div class="card shadow-sm">
            <div class="card-body p-4">
                <h2 class="text-center mb-4 mt-3">{{ __('Daftar Pengajuan Pelayanan') }}</h2>
                <div class="table-responsive">
                    <table class="table table-sm table-hover">
                        <thead>
                            <tr>
                                <th>{{ __('Tanggal Pengajuan') }}</th>
                                <th>{{ __('Jenis Pelayanan') }}</th>
                                <th>{{ __('Nama') }}</th>
                                <th>{{ __('Nomor WA') }}</th>
                                <th class="text-center">{{ __('Actions') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pelayanans as $pelayanan)
                            <tr>
                                <td>{{ $pelayanan->created_at->format('d-m-Y') }}</td>
                                <td>{{ $pelayanan->jenis_pelayanan }}</td>
                                <td>{{ $pelayanan->nama }}</td>
                                <td>{{ $pelayanan->no_wa }}</td>
                                <td class="text-center">
                                    <form action="{{ route('admin.pelayanan.destroy', $pelayanan->id) }}" method="POST"
                                        style="display:inline;"
                                        onsubmit="return confirm('{{ __('Apakah Anda yakin ingin menghapus pelayanan ini?') }}');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm mx-1" title="Hapus">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </form>
                                    <a href="{{ route('admin.pelayanan.show', $pelayanan->id) }}"
                                        class="btn btn-info btn-sm mx-1" title="Lihat Detail">
                                        <i class="bi bi-eye"></i> Detail
                                    </a>
                                    <a href="{{ route('admin.pelayanan.cetak', $pelayanan->id) }}"
                                        class="btn btn-outline-primary btn-sm mx-1" title="Cetak">
                                        <i class="bi bi-printer"></i> Cetak
                                    </a>
                                </td>
                            </tr>

                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection