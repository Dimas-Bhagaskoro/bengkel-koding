@extends('layouts.app')


{{-- Customize layout sections --}}


@section('subtitle', 'Welcome')
@section('content_header_title', 'Home')
@section('content_header_subtitle', 'Obat')

@section('content')
<div class="container my-4">
    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4 class="fw-bold">List Obat</h4>
        <div class="input-group w-auto">
            <input type="text" class="form-control form-control-sm" placeholder="Search...">
            <button class="btn btn-outline-secondary btn-sm"><i class="bi bi-search"></i></button>
        </div>
    </div>

    <!-- Form Card -->
    <div class="card shadow-sm mb-4">
        <div class="card-header bg-primary text-white">
            <strong><i class="bi bi-plus-circle me-1"></i>Tambah Obat</strong>
        </div>
        <div class="card-body">
            <form class="row g-3">
                <div class="col-md-4">
                    <label class="form-label">Nama Obat</label>
                    <input type="text" class="form-control" placeholder="Masukkan nama obat">
                </div>
                <div class="col-md-4">
                    <label class="form-label">Kemasan</label>
                    <input type="text" class="form-control" placeholder="Dus / Pil / Sirup">
                </div>
                <div class="col-md-4">
                    <label class="form-label">Harga</label>
                    <input type="number" class="form-control" placeholder="cth: 20000">
                </div>
                <div class="col-12 text-end">
                    <button class="btn btn-primary"><i class="bi bi-save"></i> Simpan</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Table Card -->
    <div class="card shadow-sm">
        <div class="card-body p-0">
            <table class="table table-striped table-hover mb-0">
                <thead class="table-light">
                    <tr>
                        <th>No</th>
                        <th>ID Obat</th>
                        <th>Nama Obat</th>
                        <th>Kemasan</th>
                        <th>Harga</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>B001</td>
                        <td>Paracetamol</td>
                        <td>Dus</td>
                        <td>20000</td>
                        <td class="text-center">
                            <button class="btn btn-warning btn-sm"><i class="bi bi-pencil-square"></i> Edit</button>
                            <button class="btn btn-danger btn-sm"><i class="bi bi-trash"></i> Hapus</button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>B002</td>
                        <td>Obat Tidur</td>
                        <td>Pil</td>
                        <td>10000</td>
                        <td class="text-center">
                            <button class="btn btn-warning btn-sm"><i class="bi bi-pencil-square"></i> Edit</button>
                            <button class="btn btn-danger btn-sm"><i class="bi bi-trash"></i> Hapus</button>
                        </td>
                    </tr>
                    <!-- Tambahkan baris lain -->
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection