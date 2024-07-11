@extends('layout.adminpanel')
@section('title','Buat Jenis Cuti')
@section('content')
<div class="card-body">
    <form method="POST" action="{{ route('jeniscuti.store') }}">
        @csrf
        <div class="form-group">
            <label for="jenis_cuti">Nama Jenis Cuti</label>
            <input type="text" id="jenis_cuti" name="jenis_cuti" class="form-control">
        </div>
        <div>
            @error('jenis_cuti')<span style="color:Red">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label for="jatah_cuti">Jatah Cuti</label>
            <input type="text" id="jatah_cuti" name="jatah_cuti" class="form-control">
        </div>
        <div>
            @error('jatah_cuti')<span style="color:Red">{{ $message }}</span> @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection