@extends('layout.adminpanel')
@section('title','Tambah Karyawan')
@section('content')
<div class="card-body">
    <form method="POST" action="{{ route('karyawan.store') }}" enctype="multipart/form-data">
        @csrf
        {{-- nama karyawan --}}
        <div class="form-group">
            <label for="name">Nama Karyawan</label>
            <input type="text" id="nama" name="nama" class="form-control" @error('nama') is-invalid @enderror"
                placeholder="Masukan nama lengkap karyawan">
        </div>
        <div>
            @error('nama')<span style="color:Red">{{ $message }}</span> @enderror
        </div>
        {{-- akun user --}}
        <div class="form-group">
            <label for="users_id">Akun User Pegawai</label>
            <select class="form-control select2 @error('users_id') is-invalid @enderror" style="width: 100%;"
                name="users_id" id="users_id">
                <option value="" selected disabled>Pilih Akun</option>
                @foreach ($user as $item)
                <option value="{{ $item->id }}" data-email="{{ $item->email }}">{{ $item->name }}
                </option>
                {{-- <option value="{{ $item->id }}">{{ $item->name }}
                </option> --}}
                @endforeach
            </select>
            @error('users_id')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        {{-- foto --}}
        <div class="form-group">
            <label for="foto_karyawan">Foto</label>
            <div class="input-group">
                <div class="custom-file">
                    <input type="file" class="custom-file-input @error('foto_karyawan') is-invalid @enderror"
                        name="foto_karyawan" id="foto_karyawan" placeholder="" onchange="previewImage(event)"
                        accept=".jpg, .jpeg, .png">
                    <label class=" custom-file-label" for="exampleInputFile"></label>
                </div>
            </div>
        </div>
        <img id="preview" src="#" alt="foto_karyawan" class="mt-2 img-fluid"
            style="max-width: 150px; max-height:500px; display: none;">
        <div>
            @error('foto_karyawan')<span style="color:Red">{{ $message }}</span> @enderror
        </div>
        {{-- jabatan --}}
        <div class="form-group">
            <label for="name">Jabatan</label>
            <input type="text" id="jabatan" name="jabatan" class="form-control" @error('jabatan') is-invalid @enderror"
                placeholder="Masukan jabatan karyawan">
        </div>
        <div>
            @error('jabatan')<span style="color:Red">{{ $message }}</span> @enderror
        </div>
        {{-- email --}}
        <div class="form-group">
            <label for="email">E-Mail</label>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                </div>
                <input name="email" id="email type=" email" class="form-control" placeholder="Email">
            </div>
        </div>
        {{-- alamat --}}
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <textarea class="form-control" name="alamat" rows="3" placeholder="Masukan alamat lengkap"></textarea>
            @error('alamat')
            <span style="color:Red">{{ $message }}</span>
            @enderror
        </div>
        {{-- no_telpon --}}
        <div class="form-group">
            <label>No.Telepon</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-phone"></i></span>
                </div>
                <input type="text" id="no_telpon" name="no_telpon" class="form-control"
                    oninput="this.value = this.value.replace(/\D/g,'')">
                @error('no_telpon')
                <span style="color:Red">{{ $message }}</span>
                @enderror
            </div>
        </div>
        {{-- jenis kelamin --}}
        <div class="form-group">
            <label>Jenis Kelamin</label>
            <select class="form-control select2" id="jenis_kelamin" name="jenis_kelamin" style="width: 100%;">
                <option value="" selected disabled>Pilih Jenis Kelamin Karyawan</option>
                <option value='Laki-Laki'>Laki-Laki</option>
                <option value='Perempuan'>Perempuan</option>
            </select>
            @error('jenis_kelamin')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        {{-- agama --}}
        <div class="form-group">
            <label>Agama</label>
            <select class="form-control select2" id="agama" name="agama" style="width: 100%;">
                <option value="" selected disabled>Pilih Agama</option>
                <option value='Islam'>Islam</option>
                <option value='Katholik'>Katholik</option>
                <option value='Kristen'>Kristen</option>
                <option value='Hindu'>Hindu</option>
                <option value='Buddha'>Buddha</option>
                <option value='Kong Hu Cu'>Kong Hu Cu</option>
            </select>
            @error('agama')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        {{-- tanggal lahir --}}
        <div class="form-group">
            <label>Tanggal Lahir</label>
            <div class="input-group date" data-target-input="nearest">
                <input type="date" class="form-control datetimepicker-input" data-target="#reservationdate"
                    id="tgl_lahir" name="tgl_lahir" />
                {{-- <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                </div> --}}
            </div>
        </div>
        {{-- tempat lahir --}}
        <div class="form-group">
            <label for="name">Tempat Lahir</label>
            <input type="text" name="tmpt_lahir" id="tmpt_lahir" class="form-control" required>
        </div>
        <div>
            @error('tmpt_lahir')<span style="color:Red">{{ $message }}</span> @enderror
        </div>
        {{-- status hubungan --}}
        <div class="form-group">
            <label for="status_hubungan">Status Hubungan</label>
            <select class="form-control" id="status_hubungan" name="status_hubungan">
                <option value="" selected disabled>Pilih Status Hubungan</option>
                <option value="menikah">Sudah Menikah</option>
                <option value="belum menikah">Belum Menikah</option>
            </select>
        </div>
        {{-- no_ktp --}}
        <div class="form-group">
            <label>No. KTP</label>
            <div class="input-group">
                <input type="text" id="no_ktp" name="no_ktp" class="form-control"
                    oninput="this.value = this.value.replace(/\D/g,'')" minlength="16" maxlength="16">
                @error('no_ktp')
                <span style="color:Red">{{ $message }}</span>
                @enderror
            </div>
        </div>
        {{-- pendidikan --}}
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
        {{-- no rekening --}}
        <div class="form-group">
            <label>No Rekening</label>
            <div class="input-group">
                <input type="text" id="no_rekening" name="no_rekening" class="form-control">
                @error('no_rekening')
                <span style="color:Red">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label for="status_hubungan">Status Karyawan</label>
            <select class="form-control" id="status_karyawan" name="status_karyawan">
                <option value="" selected disabled>Pilih Status</option>
                <option value="Aktif">Karyawan Aktif</option>
                <option value="Non-Aktif">Non-Aktif</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection