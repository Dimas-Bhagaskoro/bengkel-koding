@extends('layouts.app')


{{-- Customize layout sections --}}


@section('subtitle', 'Welcome')
@section('content_header_title', 'Home')
@section('content_header_subtitle', 'Periksa')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">Periksa</h5>
                    <form class="d-flex" role="search">
                        <input class="form-control form-control-sm me-2" type="search" placeholder="Cari..." aria-label="Search">
                        <button class="btn btn-sm btn-light" type="submit">Cari</button>
                    </form>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-bordered table-hover">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">ID Periksa</th>
                                <th scope="col">Pasien</th>
                                <th scope="col">Tanggal Periksa</th>
                                <th scope="col">Catatan</th>
                                <th scope="col">Biaya Periksa</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>1</td>
                                <td>Apip</td>
                                <td>2025-05-20</td>
                                <td>Pasien mengalami batuk-batuk</td>
                                <td>100000</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>2</td>
                                <td>Farras</td>
                                <td>2025-05-21</td>
                                <td>pasien mengalami flu</td>
                                <td>150000</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>3</td>
                                <td>Fatir</td>
                                <td>2025-05-22</td>
                                <td>Pasien mengalami demam</td>
                                <td>200000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection