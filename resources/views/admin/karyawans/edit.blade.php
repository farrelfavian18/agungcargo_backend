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
                <label for="foto_karyawan">Foto</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="foto_karyawan" id="foto_karyawan">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="email">E-Mail</label>
                <input type="text" id="email" name="email" class="form-control" value="{{ $karyawan->email }}">
                @error('email')
                <span style="color:Red">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea class="form-control" rows="3" value="{{ $karyawan->alamat }}"
                    placeholder="{{ old('alamat') ?? $karyawan->alamat }}"></textarea>
                @error('alamat')
                <span style="color:Red">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="no_telpon">No. Telepon</label>
                <input type="text" id="no_telpon" name="no_telpon" class="form-control"
                    value="{{ $karyawan->no_telpon }}">
                @error('no_telpon')
                <span style="color:Red">{{ $message }}</span>
                @enderror
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
                        <label>Status</label>
                        <select class="form-control select2" id="status" name="status" style="width: 100%;">
                            <option value='menikah'>Aktif</option>
                            <option value='belum menikah'>Non Aktif</option>
                        </select>
                        @error('status')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
            {{-- <div class="form-group">
                <label for="email">Foto Berita</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="foto_berita" id="foto_berita">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    </div>
                </div>
            </div> --}}
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit Edit</button>
            </div>
        </form>
</div>
@endsection