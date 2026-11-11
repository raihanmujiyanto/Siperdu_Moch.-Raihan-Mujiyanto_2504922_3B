@extends ('layout.admin')

@section('title', 'Dashboard')
@section('subtitle', 'Selamat datang di halaman dashboard admin')

@section('content')
    <div class="row g-4">
        <div class="col-sm-6 col-lg-3">
        <div class="card card-custom card-hover-shadow h-100">
            <div class="card-body d-flex align-items-center justify-content-between">
            <div>
                <h6 class="card-title">Total Buku</h6>
                <h3 class="cardvalue">{{ $totalBuku }}</h3>
            </div>
            <i class="bi bi-book card-icon text-primary"></i>
            </div>
        </div>
        </div>
        <div class="col-sm-6 col-lg-3">
        <div class="card card-custom card-hover-shadow h-100">
            <div class="card-body d-flex align-items-center justify-content-between">
            <div>
                <h6 class="card-title">Buku Tersedia</h6>
                <h3 class="cardvalue">{{ $bukuTersedia }}</h3>
            </div>
            <i class="bi bi-check-circle card-icon text-success"></i>
            </div>
        </div>
        </div>
        <div class="col-sm-6 col-lg-3">
        <div class="card card-custom card-hover-shadow h-100">
            <div class="card-body d-flex align-items-center justify-content-between">
            <div>
                <h6 class="card-title">Buku Habis</h6>
                <h3 class="cardvalue">{{ $bukuHabis }}</h3>
            </div>
            <i class="bi bi-x-circle card-icon text-danger"></i>
            </div>
        </div>
        </div>
        <div class="col-sm-6 col-lg-3">
        <div class="card card-custom card-hover-shadow h-100">
            <div class="card-body d-flex align-items-center justify-content-between">
            <div>
                <h6 class="card-title">Total Kategori</h6>
                <h3 class="cardvalue">{{ $totalKategori }}</h3>
            </div>
            <i class="bi bi-tags card-icon text-info"></i>
            </div>
        </div>
        </div>
    
    </div>
@endsection

