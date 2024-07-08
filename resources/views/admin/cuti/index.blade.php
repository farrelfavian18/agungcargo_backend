@extends('layout.adminpanel')
@section('title', 'Riwayat Cuti Karyawan')
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
                    <div class="card-body">
                        <a href="" class="btn btn-success align-items-right">Cuti Karyawan</a>
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Karyawan</th>
                                    <th>Tanggal Mulai Cuti</th>
                                    <th>Tanggal Selesai Cuti</th>
                                    <th>Keterangan</th>
                                    <th>Alasan</th>
                                    {{-- <th>Surat Promosi</th> --}}
                                    <th>Jumlah Hari</th>
                                    <th>Sisa Cuti</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $no = 1;
                                @endphp
                                @foreach ($cuti as $item)
                                <tr>
                                    <td scope="row">{{ $no++ }}</td>
                                    {{-- <td>{{ $item->karyawans->nama == 'null' ? 'N/A' : $item->karyawans->nama }}
                                    </td> --}}
                                    <td>Farrel Favian</td>
                                    <td>{{ Carbon\Carbon::parse($item->tanggal_mulai)->format(' d-m-Y ') }}
                                    <td>{{ Carbon\Carbon::parse($item->tanggal_selesai)->format(' d-m-Y ') }}
                                    <td>{{ $item->keterangan }}</td>
                                    <td>{{ $item->alasan_cuti }}</td>
                                    <td>{{ $item->jumlah_hari }}</td>
                                    <td>{{ $item->sisa_cuti }}</td>
                                    <td class="btn btn-success">{{ $item->status }}</td>
                                    </td>
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