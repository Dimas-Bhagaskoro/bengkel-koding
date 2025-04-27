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
            <form method="POST" action="{{route('periksa.store')}}">
                @csrf 
                {{-- Nama --}}
                <div class="form-group">
                    <label for="nama">Nama Anda</label>
                    <input type="text" class="form-control" id="nama" placeholder="Input your name">
                </div>

                <input type="hidden" name="id_user" value="{{ Auth::user()->id }}">
                {{-- Pilih Dokter --}}
                <div class="form-group mt-3">
                    <label for="dokter">Pilih Dokter</label>
                    <select class="form-control" id="dokter" name="id_dokter">
                        <option disabled selected>-- Pilih Dokter --</option>
                        @foreach ($dokters as $dokter)
                            <option value="{{ $dokter->id }}">{{ $dokter->name }}</option>
                        @endforeach
                    </select>
                </div>

                {{-- Submit --}}
                <button type="submit" class="btn btn-primary mt-4">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection