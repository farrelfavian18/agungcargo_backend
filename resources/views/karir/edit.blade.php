@extends('layout.adminpanel')
@section('title', 'Edit Berita')
@section('content')
    <div class="card-body">
        {{-- <form action="{{ route('beritas.update') }}" method="POST" enctype="multipart/form-data"> --}}
        <form action="{{ route('beritas.update', $berita) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="judul_berita">Judul Berita</label>
                <input type="text" id="judul_berita" name="judul_berita" class="form-control"
                    value="{{ $berita->judul_berita }}">
                @error('judul_berita')
                    <span style="color:Red">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="isi_berita">Isi Berita</label>
                <input type="text" id="isi_berita" name="isi_berita" class="form-control"
                    value="{{ $berita->isi_berita }}">
                @error('isi_berita')
                    <span style="color:Red">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="isi_berita">Foto Berita</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="foto_berita" id="foto_berita">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit Edit</button>
            </div>
        </form>
    </div>
@endsection
