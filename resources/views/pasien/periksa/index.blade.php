@extends('layouts.app')


{{-- Customize layout sections --}}


@section('subtitle', 'Welcome')
@section('content_header_title', 'Home')
@section('content_header_subtitle', 'Periksa')

@section('content')
<div class="container">
    <h3 class="mb-3">Pasien</h3>

    <div class="card">
        <div class="card-header bg-primary text-white">
            <strong>Periksa</strong>
        </div>
        <div class="card-body">
            <form>
                {{-- Nama --}}
                <div class="form-group">
                    <label for="nama">Nama Anda</label>
                    <input type="text" class="form-control" id="nama" placeholder="Input your name">
                </div>

                {{-- Pilih Dokter --}}
                <div class="form-group mt-3">
                    <label for="dokter">Pilih Dokter</label>
                    <select class="form-control" id="dokter">
                        <option>Value 1</option>
                        <option>Value 2</option>
                        <option>Value 3</option>
                    </select>
                </div>

                {{-- Submit --}}
                <button type="submit" class="btn btn-primary mt-4">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection