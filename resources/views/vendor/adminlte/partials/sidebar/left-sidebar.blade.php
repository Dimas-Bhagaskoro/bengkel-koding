<aside class="main-sidebar {{ config('adminlte.classes_sidebar', 'sidebar-dark-primary elevation-4') }}">

    {{-- Sidebar brand logo --}}
    @if(config('adminlte.logo_img_xl'))
        @include('adminlte::partials.common.brand-logo-xl')
    @else
        @include('adminlte::partials.common.brand-logo-xs')
    @endif

    {{-- Sidebar menu --}}
    <div class="sidebar">
        <nav class="pt-2">
            <ul class="nav nav-pills nav-sidebar flex-column {{ config('adminlte.classes_sidebar_nav', '') }}"
                data-widget="treeview" role="menu"
                @if(config('adminlte.sidebar_nav_animation_speed') != 300)
                    data-animation-speed="{{ config('adminlte.sidebar_nav_animation_speed') }}"
                @endif
                @if(!config('adminlte.sidebar_nav_accordion'))
                    data-accordion="false"
                @endif>

     {{-- Kondisi sidebar --}}       
     @auth
    @if (Auth::user()->role == 'dokter')
        <li class="nav-item">
            <a href="{{ route('dokter') }}" class="nav-link">Dashboard Dokter</a>
        </li>
        <li class="nav-item">
            <a href="{{ route('memeriksa.index') }}" class="nav-link">Memeriksa</a>
        </li>
        <li class="nav-item">
            <a href="{{ route('obat.index') }}" class="nav-link">Obat</a>
        </li>
    @elseif (Auth::user()->role == 'pasien')
        <li class="nav-item">
            <a href="{{ route('pasien') }}" class="nav-link">Dashboard Pasien</a>
        </li>
        <li class="nav-item">
            
            <a href="{{ route('riwayat.index') }}" class="nav-link">Riwayat Periksa</a>
        </li>
        <li class="nav-item">
            <a href="{{ route('periksa.index') }}" class="nav-link">Periksa</a>
        </li>
    @endif
@endauth

            </ul>
        </nav>
    </div>

</aside>
