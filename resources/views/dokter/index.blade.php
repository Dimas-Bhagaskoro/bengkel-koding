@extends('layouts.app')


{{-- Customize layout sections --}}


@section('subtitle', 'Welcome')
@section('content_header_title', 'Home')
@section('content_header_subtitle', 'Welcome')

@section('content')
<div class="col-md-4">
        <div class="card bg-success text-white mb-4">
          <div class="card-body d-flex justify-content-between align-items-center">
            <div>
              <h4>53</h4>
              <p class="mb-0">Jumlah Obat</p>
            </div>
            <i class="fas fa-chart-bar fa-2x"></i>
          </div>
          <div class="card-footer text-white text-center">
            <a href="#" class="text-white text-decoration-none">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card bg-warning text-white mb-4">
          <div class="card-body d-flex justify-content-between align-items-center">
            <div>
              <h4>44</h4>
              <p class="mb-0">User Registrations</p>
            </div>
            <i class="fas fa-user-plus fa-2x"></i>
          </div>
          <div class="card-footer text-white text-center">
            <a href="#" class="text-white text-decoration-none">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card bg-danger text-white mb-4">
          <div class="card-body d-flex justify-content-between align-items-center">
            <div>
              <h4>65</h4>
              <p class="mb-0">Unique Visitors</p>
            </div>
            <i class="fas fa-chart-pie fa-2x"></i>
          </div>
          <div class="card-footer text-white text-center">
            <a href="#" class="text-white text-decoration-none">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection