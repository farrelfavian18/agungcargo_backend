@extends('layout.adminpanel')
@section('title','User Roles & Permission')
@section('content')
<div class="card-body">
        <div class="form-group">
            <div> Name : {{ $user->name }}</div>
            <div> E-Mail : {{ $user->email }}</div>
        </div>
        <div class="card-body">
            <div class="form-group">
                <h2>User Roles<h2>
            </div>
            <div>
                @if ($user->roles)
                    @foreach ($user->roles as $user_role)
                    <form method="POST" action="{{ route('adminusers.roles.remove', [$user->id, $user_role->id]) }}" onsubmit="return confirm('Anda Yakin');">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" type="submit">
                            <i class="fas fa-trash">
                            </i>
                            {{ $user_role->name }}
                    </form>
                    @endforeach
                @endif
            </div>
            <div>
                <form method="POST" action="{{ route('adminusers.roles', $user->id) }}">
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
        <div class="card-body">
            <div class="form-group">
                <h2>User Permissions<h2>
            </div>
            <div>
                @if ($user->permissions)
                    @foreach ($user->permissions as $user_permission)
                    <form method="POST" action="{{ route('adminusers.permissions.revoke', [$user->id, $user_permission->id]) }}" onsubmit="return confirm('Anda Yakin');">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" type="submit">
                            <i class="fas fa-trash">
                            </i>
                            {{ $user_permission->name }}
                    </form>
                    @endforeach
                @endif
            </div>
            <div>
                <form method="POST" action="{{ route('adminusers.permissions', $user->id) }}">
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
</div>

@endsection