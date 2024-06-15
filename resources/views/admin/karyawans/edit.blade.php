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
                    placeholder="Enter ..."></textarea>
                @error('alamat')
                <span style="color:Red">{{ $message }}</span>
                @enderror
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