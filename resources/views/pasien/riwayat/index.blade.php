@extends('layouts.app')

@section('subtitle', 'Riwayat Pemeriksaan')
@section('content_header_title', 'Riwayat Pemeriksaan')
@section('content_header_subtitle', 'Data Pemeriksaan Anda')

@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h3 class="card-title">Riwayat Pemeriksaan</h3>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead class="bg-light">
                    <tr>
                        <th>Tanggal Periksa</th>
                        <th>Catatan Dokter</th>
                        <th>Obat yang Diberikan</th>
                        <th>Total Tagihan</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($riwayats as $riwayat)
                        <tr>
                            <td>{{ \Carbon\Carbon::parse($riwayat->tgl_periksa)->format('d-m-Y') }}</td>
                            <td>{{ $riwayat->catatan }}</td>
                            <td>
                                <ul>
                                    @foreach($riwayat->obats as $obat)
                                        <li>{{ $obat->nama_obat }} - Rp {{ number_format($obat->harga, 0, ',', '.') }}</li>
                                    @endforeach
                                </ul>
                            </td>
                            <td>
                                Rp {{
                                    number_format(
                                        $riwayat->biaya_periksa + $riwayat->obats->sum('harga'),
                                        0,
                                        ',',
                                        '.'
                                    )
                                }}
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center">Belum ada riwayat periksa.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
