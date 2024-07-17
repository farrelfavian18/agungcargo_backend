@extends('layout.adminpanel')
@section('title', 'Edit Karyawan')
@section('content')
<div class="card-body">
    {{-- <form action="{{ route('beritas.update') }}" method="POST" enctype="multipart/form-data"> --}}
        <form action="{{ route('karyawan.update', ['karyawan' => $karyawan->id]) }}" method="POST"
            enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" id="nama" name="nama" class="form-control"
                    value="{{ old('nama') ?? $karyawan->nama}}">
                @error('nama')
                <span style="color:Red">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label>Akun Pegawai</label>
                <select class="form-control select2 @error('users_id') is-invalid @enderror" style="width: 100%;"
                    name="users_id">
                    <option value="" selected disabled>Pilih</option>
                    @foreach ($user as $item)
                    <option value="{{ $item->id }}" {{ old('users_id', $karyawan->users_id) == $item->id ? 'selected' :
                        '' }}>
                        {{ $item->name }}
                    </option>
                    @endforeach
                </select>
                @error('users_id')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="foto_karyawan">Foto</label>
                <div>
                    <br>
                    <img src="{{ $karyawan->foto_karyawan }}" alt="foto karyawan" class="img-fluid" name="foto_karyawan"
                        width="100px" height="100px">
                    </br>
                    <br>
                    <img id="preview" src="#" alt="foto_karyawan" class="img-fluid"
                        style="max-width: 100px; max-height:100px; display: none;">
                    </br>
                </div>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="foto_karyawan" id="foto_karyawan"
                            placeholder="" onchange="previewImage(event)" accept=".jpg, .jpeg, .png">
                        <label class="custom-file-label" for="exampleInputFile">Choose File</label>
                    </div>
                    <div>
                        @error('foto_karyawan')<span style="color:Red">{{ $message }}</span> @enderror
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="jabatan">Jabatan</label>
                <input type="text" id="jabatan" name="jabatan" class="form-control"
                    value="{{ old('jabatan') ?? $karyawan->jabatan}}">
                @error('jabatan')
                <span style="color:Red">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="divisi">Divisi</label>
                <input type="text" id="divisi" name="divisi" class="form-control"
                    value="{{ old('divisi') ?? $karyawan->divisi}}">
                @error('divisi')
                <span style="color:Red">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="email">E-Mail</label>
                <input type="text" id="email" name="email" class="form-control"
                    value="{{ old('email') ?? $karyawan->email}}">
                @error('email')
                <span style="color:Red">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea class="form-control" name="alamat" rows="3"
                    placeholder="">{{ old('alamat') ?? $karyawan->alamat }}</textarea>
                @error('alamat')
                <span style="color:Red">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="no_telpon">No. Telepon</label>
                <input type="text" id="no_telpon" name="no_telpon" class="form-control"
                    value="{{ old('no_telpon') ?? $karyawan->no_telpon}}">
                @error('no_telpon')
                <span style="color:Red">{{ $message }}</span>
                @enderror
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <select class="form-control select2" id="jenis_kelamin" name="jenis_kelamin"
                            style="width: 100%;">
                            <option value='Laki-Laki'>Laki-Laki</option>
                            <option value='Perempuan'>Perempuan</option>
                        </select>
                        @error('jenis_kelamin')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <!-- select -->
                    <div class="form-group">
                        <label>Agama</label>
                        <select class="form-control select2" id="agama" name="agama" style="width: 100%;">
                            <option value='Islam'>Islam</option>
                            <option value='Katholik'>Katholik</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Buddha">Buddha</option>
                            <option value="Kong Hu Chu">Kong Hu Chu</option>
                        </select>
                        @error('agama')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <div>
                            (Tanggal Lahir Sebelumnya : {{ Carbon\Carbon::parse($karyawan->tgl_lahir)->format('d-m-Y')
                            }})
                        </div>
                        <div class="input-group date" data-target-input="nearest">
                            <input type="date" class="form-control datetimepicker-input" data-target="#reservationdate"
                                id="tgl_lahir" name="tgl_lahir" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tmpt_lahir">Tempat Lahir</label>
                        <input type="text" id="tmpt_lahir" name="tmpt_lahir" class="form-control"
                            value="{{ old('tmpt_lahir') ?? $karyawan->tmpt_lahir}}">
                        @error('tmpt_lahir')
                        <span style="color:Red">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="status_hubungan">Status Hubungan</label>
                        <div>
                            (Status Hubungan Sebelumnya : {{ $karyawan->status_hubungan }})
                        </div>
                        <select class="form-control" id="status_hubungan" name="status_hubungan">
                            <option value="" selected disabled>Pilih Status Hubungan</option>
                            <option value="menikah">Sudah Menikah</option>
                            <option value="belum menikah">Belum Menikah</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>No. KTP</label>
                        <div class="input-group">
                            <input type="text" id="no_ktp" name="no_ktp" value="{{ old('no_ktp') ?? $karyawan->no_ktp}}"
                                class="form-control" oninput="this.value = this.value.replace(/\D/g,'')" minlength="16"
                                maxlength="16">
                            @error('no_ktp')
                            <span style="color:Red">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="pendidikan">Pendidikan</label>
                        <select class="form-control" id="pendidikan" name="pendidikan">
                            <option value="" selected disabled>Pilih Pendidikan</option>
                            <option value="sd">SD</option>
                            <option value="smp">SMP</option>
                            <option value="sma/smk">SMA/SMK</option>
                            <option value="diploma">Diploma/D1-D4</option>
                            <option value="sarjana">Sarjana/S1</option>
                            <option value="magister">Magister/S2</option>
                            <option value="doktor">Doktor/S3</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>No. Rekening</label>
                        <div class="input-group">
                            <input type="text" id="no_rekening" name="no_rekening"
                                value="{{ old('no_rekening') ?? $karyawan->no_rekening}}" class="form-control"
                                oninput="this.value = this.value.replace(/\D/g,'')" minlength="16" maxlength="16">
                            @error('no_rekening')
                            <span style="color:Red">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Status Karyawan</label>
                        <select class="form-control select2" id="status_karyawan" name="status_karyawan"
                            style="width: 100%;">
                            <option value='Aktif'>Aktif</option>
                            <option value='Non-Aktif'>Non-Aktif</option>
                        </select>
                        @error('status_karyawan')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit Edit</button>
            </div>
        </form>
</div>
@endsection