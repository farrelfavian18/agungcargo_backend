@extends('layout.adminpanel')
@section('title','Edit Permissions')
@section('content')
<div class="card-body">
    <form method="POST" action="{{ route('adminroles.update', $role->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <h2>Nama Permission<h2>
            {{-- <label for="name">Nama Role</label> --}}
            <input type="text" name="name" class="form-control" value="{{ $role->name }}">
        </div>
        <div>
            @error('name')<span style="color:Red">{{ $message }}</span> @enderror
        </div>
        <button type="submit" class="btn btn-primary">Update Role</button>
    </form>

    <div>
        <p></p>
    </div>
</div>
<div class="card-body">
    <div class="form-group">
        <h2>Role Permission<h2>
    </div>
    <div>
        @if ($role->permissions)
            @foreach ($role->permissions as $role_permission)
            <form method="POST" action="{{ route('adminroles.permissions.revoke', [$role->id, $role_permission->id]) }}" onsubmit="return confirm('Anda Yakin');">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger btn-sm" type="submit">
                    <i class="fas fa-trash">
                    </i>
                    {{ $role_permission->name }}
            </form>
            @endforeach
        @endif
    </div>
    <div>
        <form method="POST" action="{{ route('adminroles.permissions', $role->id) }}">
            @csrf
            <div class="form-group">
                {{-- <label for="permission">Permission</label> --}}
                <select id="permission" name="permission" autocomplete="permission-name" class="form-control select2" style="width: 100%;">
                    @foreach ($permissions as $permission )
                        <option value="{{ $permission->name }}">{{ $permission->name }}</option>
                    @endforeach
                </select>
                @error('name')<span style="color:Red">{{ $message }}</span> @enderror
            </div>
                <button type="submit" class="btn btn-success">Assign</button>
        </form>
    </div>
</div>

@endsection