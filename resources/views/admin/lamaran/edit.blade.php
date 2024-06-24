@extends('layout.adminpanel')
@section('title', 'Data dan Riwayat Lamaran')
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
                                    <th>Nama Lengkap</th>
                                    <th>Jabatan</th>
                                    <th>Foto</th>
                                    <th>Email</th>
                                    <th>Jabatan</th>
                                    <th>Alamat</th>
                                    <th>No Telp</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Agama</th>
                                    <th>Tanggal Lahir</th>
                                    <th>Tempat Lahir</th>
                                    <th>Status Hubungan</th>
                                    <th>No.KTP</th>
                                    <th>Pendidikan</th>
                                    <th>Pengalaman Kerja</th>
                                    <th>CV</th>
                                    <th>Ijazah</th>
                                    <th>Tanggal Lamaran</th>
                                    <th>Status Lamaran</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $no = 1;
                                @endphp
                                @foreach ($lamaran as $item)
                                <tr>
                                    <td scope="row">{{ $no++ }}</td>
                                    {{-- <td>{{ $item->id }}</td> --}}
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->karirs->nama_jabatan == 'null' ? 'N/A': $item->karirs->nama_jabatan }}
                                    </td>
                                    <td>
                                        <img src="{{ asset($item->foto_karyawan) }}" width="100" height="100"
                                            class="img img-reponsive" />
                                    </td>
                                    <td>{{ $item->email }}</td>
                                    {{-- <td>{{ $item->jabatans->nama_jabatan == 'null' ? 'N/A' :
                                        $item->jabatans->nama_jabatan }}
                                    </td> --}}

                                    <td>{{ $item->alamat }}</td>
                                    <td>{{ $item->no_telpon }}</td>
                                    <td>{{ $item->jenis_kelamin }}</td>
                                    <td>{{ $item->agama }}</td>
                                    <td>{{ $item->tgl_lahir }}</td>
                                    <td>{{ $item->tmpt_lahir }}</td>
                                    <td>{{ $item->status_hubungan }}</td>
                                    <td>{{ $item->no_ktp }}</td>
                                    <td>{{ $item->pendidikan }}</td>
                                    <td>{{ $item->pengalaman_kerja }}</td>
                                    <td>{{ $item->cv }}</td>
                                    <td>{{ $item->ijazah }}</td>
                                    <td>{{ $item->created_at }}</td>
                                    <td><a href="cv/{{ $item->cv }}"><button class="btn btn-success" type="button">CV
                                    <td>
                                    <td><a href="ijazah/{{ $item->ijazah }}"><button class="btn btn-success"
                                                type="button">IJAZAH
                                    <td>
                                    <td>{{ $item->status_lamaran }}</td>
                                    <td class="project-actions">
                                        <a class="btn btn-info btn-sm" href="{{ route('karyawan.edit', $item->id) }}">
                                            <i class="fas fa-pencil-alt">
                                            </i>
                                            Terima
                                        </a>
                                    </td>
                                    <td class="project-actions">
                                        <a class="btn btn-info btn-sm" href="{{ route('karyawan.edit', $item->id) }}">
                                            <i class="fas fa-pencil-alt">
                                            </i>
                                            Tolak
                                        </a>
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