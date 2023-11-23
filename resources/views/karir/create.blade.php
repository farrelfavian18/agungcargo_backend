@extends('layout.adminpanel')
@section('title', 'Create Karir')
@section('content')
    <div class="card-body">
        <form action="{{ route('karirs.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="nama_jabatan">Jabatan</label>
                <input type="text" id="nama_jabatan" name="nama_jabatan" class="form-control">
                @error('nama_jabatan')
                    <span style="color:Red">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="lokasi">Lokasi</label>
                <input type="text" id="lokasi" name="lokasi" class="form-control">
                @error('lokasi')
                    <span style="color:Red">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="lokasi">Kualifikasi</label>
                <input type="text" id="kualifikasi" name="kualifikasi" class="form-control">
                @error('kualifikasi')
                    <span style="color:Red">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="deskripsi_lowongan">Deskripsi Lowongan</label>
                <input type="text" id="deskripsi_lowongan" name="deskripsi_lowongan" class="form-control">
                @error('deskripsi_lowongan')
                    <span style="color:Red">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="kategori_pekerjaan">Kategori Pekerjaan</label>
                <input type="text" id="kategori_pekerjaan" name="kategori_pekerjaan" class="form-control">
                @error('kategori_pekerjaan')
                    <span style="color:Red">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label>Status Loker</label>
                <select name="status_loker" class="form-control">
                    <option value="Aktif">Aktif</option>
                    <option value="Non-aktif">Non-Aktif</option>
                </select>
                @error('status_loker')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection
