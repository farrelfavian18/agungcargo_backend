@extends('layout.adminpanel')
@section('title', 'Informasi Cuti Saya')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                    @elseif(session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                    @endif
                    <div class="card-body"><a href="{{ route('cuti.create') }}"
                            class="btn btn-success align-items-right">Ajukan Cuti</a></div>
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Karyawan</th>
                                    <th>Jenis Cuti</th>
                                    <th>Tanggal Mulai</th>
                                    <th>Tanggal Selsai</th>
                                    <th>Keterangan</th>
                                    <th>Alasan</th>
                                    <th>Jumlah Hari</th>
                                    <th>Sisa Cuti</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $no = 1;
                                @endphp
                                @foreach($cutis as $item)
                                <tr>
                                    <td scope="row">{{ $no++ }}</td>
                                    <td>{{ $item->karyawans->nama}}</td>
                                    <td>{{ $item->id_jenis__cuti }}</td>
                                    <td>{{ Carbon\Carbon::parse($item->tanggal_mulai)->format(' d-m-Y ') }}</td>
                                    <td>{{ Carbon\Carbon::parse($item->tanggal_selesai)->format(' d-m-Y ') }}</td>
                                    <td>{{ $item->keterangan }}</td>
                                    <td>{{ $item->alasan_cuti }}</td>
                                    <td>{{ $item->jumlah_hari }}</td>
                                    <td>{{ $item->sisa_cuti }}</td>
                                    <td>{{ $item->status }}</td>
                                </tr>
                                @endforeach
                                </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection