{{-- @foreach ($profilkaryawan as $status )
@if ($status->status_karyawan=='Aktif') --}}
@extends('layout.adminpanel')
@section('title','Dashboard')
@section('content')
<style>
    .resized-image {
        width: 128px;
        /* Set the desired width */
        height: 128px;
        /* Set the desired height */
        object-fit: cover;
        /* Maintain aspect ratio and cover the given dimensions */
    }
</style>
<div class="container-fluid">
    <!-- Small boxes (Stat box) -->
    @role('admin')
    <div class="row">
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>{{ $karyawancount }}</h3>

                    <p>Jumlah Karyawan</p>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
                <a href="/karyawan" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>{{ $presensicount }}<sup style="font-size: 20px"></sup></h3>
                    <p>Karyawan Hadir</p>
                </div>
                <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                </div>
                <a href="/presensi" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
                <div class="inner">
                    <h3>{{ $notpresensicount }}</h3>

                    <p>Karyawan Tidak Hadir</p>
                </div>
                <div class="icon">
                    <i class="ion ion-pie-graph"></i>
                </div>
                <a href="/presensi" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>{{ $karircount }}</h3>
                    <p>Lowongan Yang dibuka</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person-add"></i>
                </div>
                <a href="/karirs" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        @endrole

        @foreach ( $profilkaryawan as $item )
        <div class="card card-widget widget-user">

            <div class="widget-user-header bg-info">
                <h3 class="widget-user-username">{{ $item->nama }}</h3>
                <h5 class="widget-user-desc">{{ $item->jabatan }}</h5>
            </div>
            <div class="widget-user-image">
                <img class="img-circle elevation-2 resized-image" src="{{ $item->foto_karyawan }}" alt="User Avatar">
            </div>
            <div class="card-footer">
                <div class="row">
                    <div class="col-sm-4 border-right">
                        <div class="description-block">
                            <h5 class="description-header">EMAIL</h5>
                            <span class="description-text">{{ $item->email }}</span>
                        </div>

                    </div>

                    <div class="col-sm-4 border-right">
                        <div class="description-block">
                            <h5 class="description-header">STATUS</h5>
                            <span class="description-text">{{ $item->status_karyawan }}</span>
                        </div>

                    </div>

                    <div class="col-sm-4">
                        <div class="description-block">
                            <h5 class="description-header">BERGABUNG PADA</h5>
                            <span class="description-text">{{Carbon\Carbon::parse( $item->created_at)->format(' d-m-Y ')
                                }}</span>
                        </div>

                    </div>

                </div>

            </div>
            @endforeach
            <!-- ./col -->
            <div class="card card-success">
                <div class="card-body">
                    <h5 class="mb-2">Pengumuman</h5>
                    <div class="row">
                        @foreach ($berita as $item )
                        <div class="col-md-12 col-lg-6 col-xl-4">
                            <div class="card mb-2 bg-gradient-dark">
                                <img class="card-img-top" src="{{ $item->foto_berita }}" alt="Dist Photo 1">
                                <div class="card-img-overlay d-flex flex-column justify-content-end">
                                    <h5 class="card-title text-primary text-white">{{ $item->judul_berita }}</h5>
                                    <p class="card-text text-white pb-2 pt-1">{{ $item->isi_berita }}</p>
                                    <a href="#" class="text-white">{{ $item->created_at->diffForHumans();}}</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
    {{-- @else
    <div>
        <h1>Agung Cargo | Akun anda di nonaktif silahkan hubungi HRD</h1>
    </div>
    @endif
    @endforeach --}}