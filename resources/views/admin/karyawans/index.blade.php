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
                                    <th>Alamat</th>
                                    <th>No Telp</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Agama</th>
                                    <th>Tanggal Lahir</th>
                                    <th>Tempat Lahir</th>
                                    <th>Status Hubungan</th>
                                    <th>No.KTP</th>
                                    <th>Pendidikan</th>
                                    <th>No Rekening</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
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
                                    <td>{{ $item->users->name == 'null' ? 'N/A' : $item->users->name }}</td>
                                    <td>
                                        <img src="{{ asset($item->foto_karyawan) }}" width="100" height="100"
                                            class="img img-reponsive" />
                                    </td>
                                    <td>{{ $item->jabatan }}</td>
                                    <td>{{ $item->email }}</td>
                                    {{-- <td>{{ $item->jabatans->nama_jabatan == 'null' ? 'N/A' :
                                        $item->jabatans->nama_jabatan }}
                                    </td> --}}
                                    <td>{{ $item->alamat }}</td>
                                    <td>{{ $item->no_telpon }}</td>
                                    <td>{{ $item->jenis_kelamin }}</td>
                                    <td>{{ $item->agama }}</td>
                                    <td>{{ Carbon\Carbon::parse($item->tgl_lahir)->format('d-m-Y') }}
                                    <td>{{ $item->tmpt_lahir }}</td>
                                    <td>{{ $item->status_hubungan }}</td>
                                    <td>{{ $item->no_ktp }}</td>
                                    <td>{{ $item->pendidikan }}</td>
                                    <td>{{ $item->no_rekening }}</td>
                                    <td>{{ $item->status_karyawan }}</td>
                                    <td class="project-actions">
                                        <a class="btn btn-info btn-sm" href="{{ route('karyawan.edit', $item->id) }}">
                                            <i class="fas fa-pencil-alt">
                                            </i>
                                            Edit
                                        </a>
                                    </td>
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