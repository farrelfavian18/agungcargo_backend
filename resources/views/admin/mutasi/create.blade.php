@extends('layout.adminpanel')
@section('title','Tambah Mutasi Karyawan')
@section('content')
<div class="card-body">
    <form method="POST" action="{{ route('mutasi.store') }}" enctype="multipart/form-data">
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
            <label for="status_karyawan">Ganti Status Karyawan</label>
            <select class="form-control" id="status_karyawan" name="status_karyawan">
                <option value="Non-Aktif">Non-Aktif</option>
                <option value="Aktif">Aktif</option>
            </select>
        </div>
        <div>
            @error('status_karyawan')<span style="color:Red">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label for="name">Keterangan</label>
            <input type="text" id="keterangan" name="keterangan" class="form-control" @error('keterangan') is-invalid
                @enderror" placeholder="contoh: Anda di Mutasi ke Agung Cargo cabang Jakarta">
        </div>
        <div class="form-group">
            <label for="surat_promosi">Surat keterangan Mutasi</label>
            <div class="input-group">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" name="surat_mutasi" id="surat_mutasi" accept=".pdf">
                    <label class="custom-file-label" for="cv">Choose
                        file</label>
                </div>
            </div>
        </div>
        <div>
            @error('surat_mutasi')<span style="color:Red">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label>Tanggal Karyawan Di Mutasi</label>
            <div class="input-group date" data-target-input="nearest">
                <input type="date" class="form-control datetimepicker-input" data-target="#reservationdate"
                    id="tanggal_mutasi" name="tanggal_mutasi" />
                {{-- <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                </div> --}}
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection