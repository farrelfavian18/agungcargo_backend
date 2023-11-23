@extends('layout.adminpanel')
@section('title', 'Create Banner')
@section('content')
    <div class="card-body">
        <form action="{{ route('masterbanner.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="nama_banner">Nama Banner</label>
                <input type="text" id="nama_banner" name="nama_banner" class="form-control">
                @error('nama_banner')
                    <span style="color:Red">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="isi_berita">Gambar Banner</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="gambar_banner" id="gambar_banner">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        {{-- @error('gambar_banner')
                            <span style="color:Red">{{ $message }}</span>
                        @enderror --}}
                    </div>
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection
