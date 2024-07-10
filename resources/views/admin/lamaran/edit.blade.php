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
                                    {{-- <th>Alamat</th>
                                    <th>No Telp</th> --}}
                                    {{-- <th>Jenis Kelamin</th>
                                    <th>Agama</th> --}}
                                    {{-- <th>Tanggal Lahir</th>
                                    <th>Tempat Lahir</th> --}}
                                    {{-- <th>Status Hubungan</th>
                                    <th>No.KTP</th>
                                    <th>Pendidikan</th> --}}
                                    {{-- <th>Pengalaman Kerja</th> --}}
                                    <th>CV</th>
                                    <th>Ijazah</th>
                                    <th>Tanggal Lamaran</th>
                                    <th>Status Lamaran</th>
                                    {{-- <th>Aksi</th> --}}
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

                                    {{-- <td>{{ $item->alamat }}</td>
                                    <td>{{ $item->no_telpon }}</td> --}}
                                    {{-- <td>{{ $item->jenis_kelamin }}</td>
                                    <td>{{ $item->agama }}</td> --}}
                                    {{-- <td>{{ $item->tgl_lahir }}</td>
                                    <td>{{ $item->tmpt_lahir }}</td> --}}
                                    {{-- <td>{{ $item->status_hubungan }}</td>
                                    <td>{{ $item->no_ktp }}</td>
                                    <td>{{ $item->pendidikan }}</td> --}}
                                    {{-- <td>{{ $item->pengalaman_kerja }}</td> --}}
                                    <td><a href="{{ $item->cv }}"><button class="btn btn-success" type="button">Lihat
                                                CV</button><a>
                                    </td>
                                    <td><a href="{{ $item->ijazah }}"><button class="btn btn-success"
                                                type="button">Lihat Ijazah</button><a>
                                    </td>
                                    {{-- <td><a href=".storage/{{ $item->cv }}"><button class="btn btn-success"
                                                type="button">CV
                                    </td>
                                    <td><a href="ijaz{{ $item->ijazah }}"><button class="btn btn-success"
                                                type="button">Ijazah
                                    </td> --}}
                                    <td>{{ Carbon\Carbon::parse($item->created_at)->format('d-m-Y') }}</td>
                                    @if ($item->status == 'Diterima')
                                    <td><span class="badge badge-success">{{ $item->status_lamaran }}</span></td>
                                    @elseif($item->status == 'Ditolak')
                                    <td><span class="badge badge-danger">{{ $item->status_lamaran }}</span></td>
                                    @else
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
                                                        data-id="{{ $item->id }}">Seleksi</a>
                                                    <a class="dropdown-item" href="#" data-toggle="modal"
                                                        data-target="#modalShowData-{{ $item->id }}"
                                                        data-id="{{ $item->id }}">Detail</a>
                                                    <div role="separator" class="dropdown-divider"></div>
                                                    <!-- Modal Show -->
                                                    <!-- Modal Hapus -->
                                                    <form class="dropdown-item" method="POST"
                                                        action="{{ route('lamaran.destroy', $item->id) }}"
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
                                    @endif
                                </tr>
                                <!-- Modal untuk input edit data -->
                                <div class="modal fade" id="modalEditData-{{ $item->id }}" tabindex="-1" role="dialog"
                                    aria-labelledby="modalTambahDataLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="modalTambahDataLabel">Validasi Lamaran</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <!-- Form untuk input data baru -->
                                                <form id="formEditData"
                                                    action="{{ route('lamaran.update', ['lamaran' => $item->id]) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('PATCH')
                                                    <div class="form-group">
                                                        <label for="status_karyawan">Status</label>
                                                        <select class="form-control select2" id="status_lamaran"
                                                            name="status_lamaran">
                                                            <option value="Diproses">Diproses</option>
                                                            <option value="Diterima">Diterima</option>
                                                            {{-- <option value="Interview">Interview</option> --}}
                                                            <option value="Ditolak">Ditolak</option>
                                                        </select>
                                                    </div>

                                                    {{-- <div class="form-group" id="keteranganGroup"
                                                        style="display: none;">
                                                        <label for="keterangan">Keterangan</label>
                                                        <textarea class="form-control" id="keterangan" name="keterangan"
                                                            rows="3"></textarea>
                                                    </div> --}}
                                                    <input type="hidden" name="nama" value="{{ $item->nama }}">
                                                    <input type="hidden" name="foto_karyawan"
                                                        value="{{ $item->foto_karyawan }}">
                                                    <input type="hidden" name="jabatan"
                                                        value="{{ $item->karirs->nama_jabatan }}">
                                                    <input type="hidden" name="email" value="{{ $item->email }}">
                                                    <input type="hidden" name="alamat" value="{{ $item->alamat }}">
                                                    <input type="hidden" name="no_telpon" value="{{ $item->no_telpon}}">
                                                    <input type="hidden" name="jenis_kelamin"
                                                        value="{{ $item->jenis_kelamin }}">
                                                    <input type="hidden" name="agama" value="{{ $item->agama }}">
                                                    <input type="hidden" name="tgl_lahir"
                                                        value="{{ $item->tgl_lahir }}">
                                                    <input type="hidden" name="tmpt_lahir"
                                                        value="{{ $item->tmpt_lahir }}">
                                                    <input type="hidden" name="status_hubungan"
                                                        value="{{ $item->status_hubungan }}">
                                                    <input type="hidden" name="no_ktp" value="{{ $item->no_ktp }}">
                                                    <input type="hidden" name="pendidikan"
                                                        value="{{ $item->pendidikan }}">
                                                    {{-- <div class="form-group" id="tanggalGroup"
                                                        style="display: none;">
                                                        <label for="tgl_lahir">Tanggal</label>
                                                        <input type="date" class="form-control" id="tgl_lahir"
                                                            name="tgl_lahir">
                                                    </div> --}}


                                                    <button type="submit" class="btn btn-warning">Seleksi</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal untuk show data -->
                                <div class="modal fade" id="modalShowData-{{ $item->id }}" tabindex="-1" role="dialog"
                                    aria-labelledby="modalTambahDataLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="modalTambahDataLabel">Detail Lamaran</h5>
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
                                                            <img src="{{ $item->foto_karyawan }}" alt="foto pelamar"
                                                                class="img-fluid" name="foto_karyawan" height="400px">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="nama_lengkap">Nama</label>
                                                            <input type="text" readonly class="form-control" id="nama"
                                                                value="{{ $item->nama}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="">No Telepon</label>
                                                        <input type="text" readonly class="form-control" id="noTelpon"
                                                            value="{{ $item->no_telpon }}">
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
                                                        <input type="text" readonly class="form-control" id="noTelpon"
                                                            value="{{ $item->email }}">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="alamat">Alamat</label>
                                                            <input type="text" readonly class="form-control" id="alamat"
                                                                value="{{ $item->alamat }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="">Tanggal Lahir</label>
                                                        <input type="text" readonly class="form-control" id="tgl_lahir"
                                                            value="{{ $item->tgl_lahir }}">
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
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
{{-- @push('myscript')
<script>

</script> --}}