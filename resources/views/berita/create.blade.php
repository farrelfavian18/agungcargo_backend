@extends('layout.adminpanel')
@section('title', 'Create Berita')
@section('content')
    <div class="card-body">
        <form action="{{ route('beritas.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="judul_berita">Judul Berita</label>
                <input type="text" id="judul_berita" name="judul_berita" class="form-control">
                @error('judul_berita')
                    <span style="color:Red">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="isi_berita">Isi Berita</label>
                <input type="text" id="isi_berita" name="isi_berita" class="form-control">
                @error('isi_berita')
                    <span style="color:Red">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="isi_berita">Input Foto Berita</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="foto_berita" id="foto_berita">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection
