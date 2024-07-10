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
                                    @if ($item->status == 'Diterima')
                                    <td><span class="badge badge-success">{{ $item->status }}</span></td>
                                    @elseif($item->status == 'Ditolak')
                                    <td><span class="badge badge-danger">{{ $item->status }}</span></td>
                                    @else
                                    </td>
                                    <td>
                                        <div class="d-flex">
                                            <span class="badge badge-warning my-2 mr-2">{{ $item->status_lamaran
                                                }}</span>
                                            <div class="dropdown">
                                                <button class="btn btn-secondary" type="button" id="dropdownMenuButton"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right"
                                                    aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="#" data-toggle="modal"
                                                        data-target="#modalEditData-{{ $item->id }}"
                                                        data-id="{{ $item->id }}">Validasi</a>
                                                    <!-- Modal Show -->
                                                    <!-- Modal Hapus -->
                                                    {{-- <form class="dropdown-item" method="POST"
                                                        action="{{ route('lamaran.destroy', $item->id) }}"
                                                        onsubmit="return confirm('Anda Yakin');">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="dropdown-item delete-button">
                                                            <i class="fas fa-trash">
                                                            </i>
                                                            Hapus
                                                        </button>
                                                    </form> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    @endif
                                </tr>
                                <div class="modal fade" id="modalEditData-{{ $item->id }}" tabindex="-1" role="dialog"
                                    aria-labelledby="modalTambahDataLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="modalTambahDataLabel">Validasi Cuti Karyawan
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <!-- Form untuk input data baru -->
                                                <form id="formEditData"
                                                    action="{{ route('cuti.update', ['cuti' => $item->id]) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('PATCH')
                                                    <div class="form-group">
                                                        <label for="status">Status</label>
                                                        <select class="form-control select2" id="status" name="status">
                                                            <option value="Diproses">Diproses</option>
                                                            <option value="Diterima">Diterima</option>
                                                            {{-- <option value="Interview">Interview</option> --}}
                                                            <option value="Ditolak">Ditolak</option>
                                                        </select>
                                                    </div>
                                                    <button type="submit" class="btn btn-warning">Proses Cuti</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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