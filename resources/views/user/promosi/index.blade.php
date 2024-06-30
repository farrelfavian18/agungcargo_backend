@extends('layout.adminpanel')
@section('title', 'Informasi Promosi Karyawan')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Karyawan</th>
                                    <th>Keterangan</th>
                                    <th>Tanggal Promosi</th>
                                    <th>Surat Promosi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $no = 1;
                                @endphp
                                @foreach($promosis as $item)
                                <tr>
                                    <td scope="row">{{ $no++ }}</td>
                                    <td>{{ $item->karyawans->nama}}</td>
                                    <td>{{ $item->keterangan }}</td>
                                    <td>{{ Carbon\Carbon::parse($item->tanggal_promosi)->format(' d-m-Y ') }}
                                    </td>
                                    <td><a href="{{ $item->surat_promosi }}"><button class="btn btn-success"
                                                type="button">Lihat Lampiran</button><a>
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