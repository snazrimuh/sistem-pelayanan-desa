@extends('admin.app')

@section('content')
<div class="container-fluid mt-3">
    <div class="container">
        <h1 class="text-center mb-4">{{ __('Daftar Pengajuan') }}</h1>

        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif

        <div class="card shadow-sm">
            <div class="card-body p-4">
                <div class="table-responsive">
                    <table class="table table-sm table-hover">
                        <thead>
                            <tr>
                                <th>{{ __('Tanggal Pengajuan') }}</th>
                                <th>{{ __('Nama') }}</th>
                                <th>{{ __('Jenis Pelayanan') }}</th>
                                <th class="text-center">{{ __('Actions') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pelayanans as $pelayanan)
                            <tr>
                                <td>{{ $pelayanan->created_at->format('d-m-Y') }}</td>
                                <td>{{ $pelayanan->nama }}</td>
                                <td>{{ $pelayanan->jenis_pelayanan }}</td>
                                <td class="text-center">
                                    <a href="{{ route('admin.pelayanan.show', $pelayanan->id) }}"
                                        class="btn btn-outline-info btn-sm mx-1">
                                        {{ __('Lihat Detail') }}
                                    </a>
                                    <form action="{{ route('admin.pelayanan.destroy', $pelayanan->id) }}" method="POST"
                                        style="display:inline;"
                                        onsubmit="return confirm('{{ __('Apakah Anda yakin ingin menghapus pelayanan ini?') }}');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="btn btn-outline-danger btn-sm mx-1">{{ __('Hapus') }}</button>
                                    </form>
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