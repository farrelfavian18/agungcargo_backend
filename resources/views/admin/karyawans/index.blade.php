@extends('layout.adminpanel')
@section('title', 'Data Karyawan')
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
                    <div class="card-body"><a href="{{ route('karyawan.create') }}"
                            class="btn btn-success align-items-right">Tambah Karyawan +</a>
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Karyawan</th>
                                    <th>Nama Akun</th>
                                    <th>Foto</th>
                                    <th>Jabatan</th>
                                    <th>Email</th>
                                    {{-- <th>Alamat</th>
                                    <th>No Telp</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Agama</th>
                                    <th>Tanggal Lahir</th>
                                    <th>Tempat Lahir</th>
                                    <th>Status Hubungan</th>
                                    <th>No.KTP</th>
                                    <th>Pendidikan</th>
                                    <th>No Rekening</th> --}}
                                    <th>Status</th>
                                    <th>Aksi</th>
                                    <th>Detail</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $no = 1;
                                @endphp
                                @foreach ($karyawan as $item)
                                <tr>
                                    <td scope="row">{{ $no++ }}</td>
                                    {{-- <td>{{ $item->id }}</td> --}}
                                    <td>{{ $item->nama }}</td>
                                    {{-- <td>{{ $item->users->name == 'null' ? 'N/A' : $item->users->name }}</td> --}}
                                    <td>{{ $item->users->name ?? 'NA' }}</td>
                                    <td>
                                        <img src="{{ asset($item->foto_karyawan) }}" width="100" height="100"
                                            class="img img-reponsive" />
                                    </td>
                                    <td>{{ $item->jabatan }}</td>
                                    <td>{{ $item->email }}</td>
                                    {{-- <td>{{ $item->jabatans->nama_jabatan == 'null' ? 'N/A' :
                                        $item->jabatans->nama_jabatan }}
                                    </td> --}}
                                    {{-- <td>{{ $item->alamat }}</td> --}}
                                    {{-- <td>{{ $item->no_telpon }}</td>
                                    <td>{{ $item->jenis_kelamin }}</td>
                                    <td>{{ $item->agama }}</td>
                                    <td>{{ Carbon\Carbon::parse($item->tgl_lahir)->format('d-m-Y') }}
                                    <td>{{ $item->tmpt_lahir }}</td>
                                    <td>{{ $item->status_hubungan }}</td>
                                    <td>{{ $item->no_ktp }}</td>
                                    <td>{{ $item->pendidikan }}</td>
                                    <td>{{ $item->no_rekening }}</td> --}}
                                    <td>
                                        {{-- {{ $item->status_karyawan }} --}}
                                        @if ($item->status_karyawan == 'Aktif')
                                        <button class="btn btn-success">Aktif</button>
                                        @else
                                        <button class="btn btn-danger">Non-Aktif</button>
                                        @endif
                                    </td>
                                    <td class="project-actions">
                                        <a class="btn btn-info btn-sm" href="{{ route('karyawan.edit', $item->id) }}">
                                            <i class="fas fa-pencil-alt">
                                            </i>
                                            Edit
                                        </a>
                                    </td>
                                    <td>
                                        <div class="d-flex">
                                            <div class="dropdown">
                                                <button class="btn btn-secondary" type="button" id="dropdownMenuButton"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right"
                                                    aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="#" data-toggle="modal"
                                                        data-target="#modalShowData-{{ $item->id }}"
                                                        data-id="{{ $item->id }}">Detail</a>
                                                    <div role="separator" class="dropdown-divider"></div>
                                                    <form class="dropdown-item" method="POST"
                                                        action="{{ route('karyawan.destroy', $item->id) }}"
                                                        onsubmit="return confirm('Anda Yakin');">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="dropdown-item delete-button">
                                                            <i class="fas fa-trash">
                                                            </i>
                                                            Hapus
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <div class="modal fade" id="modalShowData-{{ $item->id }}" tabindex="-1"
                                        role="dialog" aria-labelledby="modalTambahDataLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="modalTambahDataLabel">Detail Karyawan
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="fotoPelamar">Foto</label>
                                                                <img src="{{ $item->foto_karyawan }}"
                                                                    alt="foto karyawan" class="img-fluid"
                                                                    name="foto_karyawan" height="400px">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="nama_lengkap">Nama</label>
                                                                <input type="text" readonly class="form-control"
                                                                    id="nama" value="{{ $item->nama}}">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="">No Telepon</label>
                                                            <input type="text" readonly class="form-control"
                                                                id="noTelpon" value="{{ $item->no_telpon }}">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="nama_lengkap">Jenis Kelamin</label><br>
                                                                @if ($item->jenis_kelamin == 'Laki-Laki')
                                                                <input type="text" readonly class="form-control"
                                                                    id="jenis_kelamin" value="Laki-Laki">
                                                                @else
                                                                <input type="text" readonly class="form-control"
                                                                    id="jenis_kelamin" value="Perempuan">
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="">Email</label>
                                                            <input type="text" readonly class="form-control"
                                                                id="noTelpon" value="{{ $item->email }}">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="alamat">Alamat</label>
                                                                <input type="text" readonly class="form-control"
                                                                    id="alamat" value="{{ $item->alamat }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="">Tanggal Lahir</label>
                                                            <input type="text" readonly class="form-control"
                                                                id="tgl_lahir"
                                                                value="{{ Carbon\Carbon::parse($item->tgl_lahir)->format('d-m-Y') }}">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="tempat_lahir">Tempat Lahir</label>
                                                                <input type="text" readonly class="form-control"
                                                                    id="tmpt_lahir" value="{{ $item->tmpt_lahir }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="">Agama</label>
                                                            <input type="text" readonly class="form-control" id="agama"
                                                                value="{{ $item->agama }}">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="pendidikan">Pendidikan</label>
                                                                <input type="text" readonly class="form-control"
                                                                    id="pendidikan" value="{{ $item->pendidikan }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="">No KTP</label>
                                                            <input type="text" readonly class="form-control" id="no_ktp"
                                                                value="{{ $item->no_ktp }}">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="">Jabatan</label>
                                                            <input type="text" readonly class="form-control"
                                                                id="jabatan" value="{{ $item->jabatan }}">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="">No Rekening</label>
                                                            <input type="text" readonly class="form-control"
                                                                id="no_rekening" value="{{ $item->no_rekening }}">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="">Bergabung Pada</label>
                                                            <input type="text" readonly class="form-control" id="no_ktp"
                                                                value="{{ Carbon\Carbon::parse($item->created_at)->format('d-m-Y')}}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </tr>
                                @endforeach
                                </tfoot>
                        </table>
                    </div>

                    {{-- BATAS --}}

                    {{-- <div class="card-body p-0">
                        <table class="table table-striped projects">
                            <a href="{{ route('adminroles.create') }}" class="btn btn-success align-items-right">Create
                                Roles +</a>
                            <thead>
                                <tr>
                                    <th style="width: 1%">
                                        #
                                    </th>
                                    <th style="width: 20%">
                                        Roles Name
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($roles as $role)
                                <tr>
                                    <td>
                                        #
                                    </td>
                                    <td>
                                        <a>
                                            {{ $role->name }}
                                        </a>
                                        <br />
                                        <small>
                                            {{ $role->created_at }}
                                        </small>
                                    </td>
                                    <td class="project-actions text-right">
                                        <a class="btn btn-info btn-sm" href="{{ route('adminroles.edit', $role->id) }}">
                                            <i class="fas fa-pencil-alt">
                                            </i>
                                            Edit
                                        </a>
                                        <form class="btn btn-danger btn-sm" method="POST"
                                            action="{{ route('adminroles.destroy', $role->id) }}"
                                            onsubmit="return confirm('Anda Yakin');">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger btn-sm" type="submit">
                                                <i class="fas fa-trash">
                                                </i>
                                                Delete
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                                {{-- <tr>
                                    <td>
                                        #
                                    </td>
                                    <td>
                                        <a>
                                            AdminLTE v3
                                        </a>
                                        <br />
                                        <small>
                                            Created 01.01.2019
                                        </small>
                                    </td>
                                    <td>
                                        <a>Admin</a>
                                    </td>
                                    <td class="project-state">
                                        <span class="badge badge-success">Success</span>
                                    </td>
                                    <td class="project-actions text-right">
                                        <a class="btn btn-primary btn-sm" href="#">
                                            <i class="fas fa-folder">
                                            </i>
                                            View
                                        </a>
                                        <a class="btn btn-info btn-sm" href="#">
                                            <i class="fas fa-pencil-alt">
                                            </i>
                                            Edit
                                        </a>
                                        <a class="btn btn-danger btn-sm" href="#">
                                            <i class="fas fa-trash">
                                            </i>
                                            Delete
                                        </a>
                                    </td>
                                </tr> --}}
                                {{--
                            </tbody>
                        </table>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</section>
@endsection