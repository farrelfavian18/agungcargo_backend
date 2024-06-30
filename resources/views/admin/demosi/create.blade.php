@extends('layout.adminpanel')
@section('title','Tambah Demosi Karyawan')
@section('content')
<div class="card-body">
    <form method="POST" action="{{ route('demosi.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="id_karyawans">Pilih Karyawan</label>
            <select class="form-control" id="id_karyawans" name="id_karyawans">
                <option value="" selected disabled>Pilih Karyawan</option>
                @foreach ($karyawan as $item)
                <option value="{{ $item->id }}">{{ $item->nama }} - {{ $item->jabatan }}</option>
                @endforeach
            </select>
        </div>
        <div>
            @error('id_karyawans')<span style="color:Red">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label for="jabatan">Jabatan Baru Karyawan</label>
            <input type="text" id="" name="jabatan" class="form-control" @error('jabatan') is-invalid @enderror"
                placeholder="contoh: Staff Marketing">
        </div>
        <div class="form-group">
            <label for="name">Keterangan</label>
            <input type="text" id="keterangan" name="keterangan" class="form-control" @error('keterangan') is-invalid
                @enderror" placeholder="contoh: didemosikan ke Jabatan Staff Marketing">
        </div>
        <div class="form-group">
            <label for="surat_demosi">Surat keterangan Demosi</label>
            <div class="input-group">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" name="surat_demosi" id="surat_demosi" accept=".pdf">
                    <label class="custom-file-label" for="surat_demosi">Choose
                        file</label>
                </div>
            </div>
        </div>
        <div>
            @error('surat_demosi')<span style="color:Red">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label>Tanggal Karyawan Didemosikan</label>
            <div class="input-group date" data-target-input="nearest">
                <input type="date" class="form-control datetimepicker-input" data-target="#reservationdate"
                    id="tanggal_demosi" name="tanggal_demosi" />
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection