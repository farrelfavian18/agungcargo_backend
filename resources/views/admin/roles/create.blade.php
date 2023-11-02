@extends('layout.adminpanel')
@section('title','Create Roles')
@section('content')
<div class="card-body">
    <form method="POST" action="{{ route('adminroles.store') }}">
        @csrf
        <div class="form-group">
            <label for="name">Name Roles</label>
            <input type="text" id="name" name="name" class="form-control">
        </div>
        <div>
            @error('name')<span style="color:Red">{{ $message }}</span> @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection