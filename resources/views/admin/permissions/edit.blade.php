@extends('layout.adminpanel')
@section('title','Create Permissions')
@section('content')
<div class="card-body">
    <form method="POST" action="{{ route('adminpermissions.update', $permission) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name Permission</label>
            <input type="text" name="name" class="form-control" value="{{ $permission->name }}">
        </div>
        <div>
            @error('name')<span style="color:Red">{{ $message }}</span> @enderror
        </div>
        <button type="submit" class="btn btn-primary">Update Permissions</button>
    </form>
</div>
<div class="card-body">
    <div class="form-group">
        <h2>Roles<h2>
    </div>
    <div>
        @if ($permission->roles)
            @foreach ($permission->roles as $permission_role)
            <form method="POST" action="{{ route('adminpermissions.roles.remove', [$permission->id, $permission_role->id]) }}" onsubmit="return confirm('Anda Yakin');">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger btn-sm" type="submit">
                    <i class="fas fa-trash">
                    </i>
                    {{ $permission_role->name }}
            </form>
            @endforeach
        @endif
    </div>
    <div>
        <form method="POST" action="{{ route('adminpermission.roles', $permission->id) }}">
            @csrf
            <div class="form-group">
                {{-- <label for="permission">Permission</label> --}}
                <select id="role" name="role" autocomplete="role-name" class="form-control select2" style="width: 100%;">
                    @foreach ($roles as $role )
                        <option value="{{ $role->name }}">{{ $role->name }}</option>
                    @endforeach
                </select>
                @error('role')<span style="color:Red">{{ $message }}</span> @enderror
            </div>
                <button type="submit" class="btn btn-success">Assign</button>
        </form>
    </div>
</div>
@endsection