@extends('layout.adminpanel')
@section('title', 'Promosi Karyawan')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    {{-- @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                    @elseif(session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                    @endif --}}
                    <div class="card-body"><a href="{{ route('promosi.create') }}"
                            class="btn btn-success align-items-right">Promosikan Karyawan</a>
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Karyawan</th>
                                    <th>Keterangan</th>
                                    {{-- <th>Surat Promosi</th> --}}
                                    <th>Tanggal Promosi</th>
                                    <th>Surat Promosi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $no = 1;
                                @endphp
                                @foreach ($promosi as $item)
                                <tr>
                                    <td scope="row">{{ $no++ }}</td>
                                    <td>{{ $item->karyawans->nama == 'null' ? 'N/A' : $item->karyawans->nama }}</td>
                                    <td>{{ $item->keterangan }}</td>
                                    <td>{{ Carbon\Carbon::parse($item->tanggal_promosi)->format(' d-m-Y ') }}
                                    </td>
                                    <td><a href="{{ $item->surat_promosi }}"><button class="btn btn-success"
                                                type="button">Lampiran</button><a>
                                    </td>

                                    {{--
                                    <td class="project-actions">
                                        <a class="btn btn-info btn-sm" href="{{ route('promosi.edit', $item->id) }}">
                                            <i class="fas fa-pencil-alt">
                                            </i>
                                            Edit
                                        </a>
                                    </td> --}}
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