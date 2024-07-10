@extends('layout.adminpanel')
@section('title','Ajukan Cuti Karyawan')
@section('content')
<div class="card-body">
    <form method="POST" action="{{ route('cuti.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="users_id">Nama Karyawan</label>
            <input type="text" value="{{ $idkaryawancuti->nama }}" id="users_id" class="form-control" disabled>
            <input type="hidden" value="{{ $idkaryawancuti->id }}" name="users_id">
        </div>
        <div class="form-group">
            <label for="id_karyawans">Jenis Cuti</label>
            <select class="form-control" id="id_jenis_cuti" name="id_jenis_cuti">
                <option value="" selected disabled>Pilih Jenis Cuti</option>
                @foreach ($jeniscuti as $item)
                <option value="{{ $item->id }}">{{ $item->jenis_cuti }} - {{ $item->jatah_cuti }}</option>
                @endforeach
            </select>
        </div>
        <div>
            @error('id_karyawans')<span style="color:Red">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label>Tanggal Mulai Cuti</label>
            <div class="input-group date" data-target-input="nearest">
                <input type="date" class="form-control datetimepicker-input" data-target="#reservationdate"
                    id="tanggal_mulai" name="tanggal_promosi" />
            </div>
        </div>
        <div class="form-group">
            <label>Tanggal Selesai Cuti</label>
            <div class="input-group date" data-target-input="nearest">
                <input type="date" class="form-control datetimepicker-input" data-target="#reservationdate"
                    id="tanggal_selesai" name="tanggal_promosi" />
            </div>
        </div>
        <div class="form-group">
            <label for="name">Keterangan</label>
            <input type="text" id="keterangan" name="keterangan" class="form-control" @error('keterangan') is-invalid
                @enderror" placeholder="">
        </div>
        <div class="form-group">
            <label for="name">Alasan Cuti</label>
            <input type="text" id="alasan_cuti" name="alasan_cuti" class="form-control" @error('alasan_cuti') is-invalid
                @enderror" placeholder="contoh: Cuti karena Sakit">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection