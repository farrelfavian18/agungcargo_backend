@extends('layout.adminpanel')
@section('title', 'Edit Banner')
@section('content')
    <div class="card-body">
        <form action="{{ route('masterbanner.update', $masterbanner) }} method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nama_banner">Nama Banner</label>
                <input type="text" id="nama_banner" name="nama_banner" class="form-control"
                    value="{{ $masterbanner->nama_banner }}">
                @error('nama_banner')
                    <span style="color:Red">{{ $message }}</span>
                @enderror
            </div>
            {{-- <div class="form-group">
                <label for="gambar_banner">Gambar Banner</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="gambar_banner" id="gambar_banner">
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
