@extends('layout.adminpanel')
@section('title','Seleksi Karyawan')
@section('content')
<div class="card-body">
    <form method="POST" action="{{ route('lamaran.update') }}" enctype="multipart/form-data">
        @csrf
        {{-- nama karyawan --}}
        <form action="{{route('users.store')}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="modal fade text-left" id="ModalCreate" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Seleksi Karyawan</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>{{ $lamaran->nama }}</strong>
                                    {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    
                                    {{-- <strong></strong> --}}

                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>{{ __('Password') }}:</strong>
                                    {!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control'))
                                    !!}
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>{{ __('Confirm Password') }}:</strong>
                                    {!! Form::password('confirm-password', array('placeholder' => 'Confirm Password','class' =>
                                    'form-control')) !!}
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>{{ __('Role') }}:</strong>
                                    {!! Form::select('roles[]', $roles,[], array('class' => 'form-control','multiple')) !!}
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">{{ __('Back')
                                    }}</button>
                                <button type="submit" class="btn btn-success">{{ __('Save') }}</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        {{-- <div class="form-group">
            <label for="name">Nama Karyawan</label>
            <input type="text" id="nama" name="nama" class="form-control" @error('nama') is-invalid @enderror"
                placeholder="Masukan nama lengkap karyawan">
        </div>
        <div>
            @error('nama')<span style="color:Red">{{ $message }}</span> @enderror
        </div>
        {{-- akun user --}}
        <div class="form-group">
            <label for="users_id">Akun User Pegawai</label>
            <select class="form-control select2 @error('users_id') is-invalid @enderror" style="width: 100%;"
                name="users_id" id="users_id">
                <option value="" selected disabled>Pilih Akun</option>
                @foreach ($user as $item)
                <option value="{{ $item->id }}" data-email="{{ $item->email }}">{{ $item->name }}
                </option>
                {{-- <option value="{{ $item->id }}">{{ $item->name }}
                </option> --}}
                @endforeach
            </select>
            @error('users_id')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        {{-- foto --}}
        <div class="form-group">
            <label for="foto_karyawan">Foto</label>
            <div class="input-group">
                <div class="custom-file">
                    <input type="file" class="custom-file-input @error('foto_karyawan') is-invalid @enderror"
                        name="foto_karyawan" id="foto_karyawan" placeholder="" onchange="previewImage(event)"
                        accept=".jpg, .jpeg, .png">
                    <label class=" custom-file-label" for="exampleInputFile"></label>
                </div>
            </div>
        </div>
        <img id="preview" src="#" alt="foto_karyawan" class="mt-2 img-fluid"
            style="max-width: 150px; max-height:500px; display: none;">
        <div>
            @error('foto_karyawan')<span style="color:Red">{{ $message }}</span> @enderror
        </div>
        {{-- jabatan --}}
        <div class="form-group">
            <label for="name">Jabatan</label>
            <input type="text" id="jabatan" name="jabatan" class="form-control" @error('jabatan') is-invalid @enderror"
                placeholder="Masukan jabatan karyawan">
        </div>
        <div>
            @error('jabatan')<span style="color:Red">{{ $message }}</span> @enderror
        </div>
        {{-- email --}}
        <div class="form-group">
            <label for="email">E-Mail</label>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                </div>
                <input name="email" id="email type=" email" class="form-control" placeholder="Email">
            </div>
        </div> --}}
        {{-- alamat --}}
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection