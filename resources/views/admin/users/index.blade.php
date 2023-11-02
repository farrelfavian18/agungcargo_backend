@extends('layout.adminpanel')
@section('title','Users')
@section('content')
<section class="content">
    <div class="card">
        <div class="card-body p-0">
            <table class="table table-striped projects">
                {{-- <a href ="{{ route('adminpermissions.create') }}" class="btn btn-success align-items-right">Create Permissions +</a> --}}
                <thead>
                    <tr>
                        <th style="width: 1%">
                            #
                        </th>
                        <th style="width: 20%">
                            Name
                        </th>
                        <th style="width: 8%" class="text-center">
                            Email
                        </th>
                        <th style="width: 20%">
    
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <td>
                            #
                        </td>
                        <td>
                            <a>
                                {{ $user->name }}
                            </a>
                            <br/>
                            <small>
                                {{ $user->created_at }}
                            </small>
                        </td>
                        <td>
                            {{ $user->email }}
                        </td>
                        <td class="project-actions text-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('adminusers.show',$user->id) }}">
                                <i class="fas fa-folder">
                                </i>
                                Roles
                            </a>
                            <form class="btn btn-danger btn-sm" method="POST" action="{{ route('adminusers.destroy', $user->id) }}" onsubmit="return confirm('Anda Yakin');">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm" type="submit">
                                    <i class="fas fa-trash">
                                    </i>
                                    Delete
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    {{-- <tr>
                        <td>
                            #
                        </td>
                        <td>
                            <a>
                            AdminLTE v3
                            </a>
                            <br/>
                            <small>
                            Created 01.01.2019
                            </small>
                        </td>
                        <td>
                            <a>Admin</a>
                        </td>
                        <td class="project-state">
                            <span class="badge badge-success">Success</span>
                        </td>
                        <td class="project-actions text-right">
                            <a class="btn btn-primary btn-sm" href="#">
                            <i class="fas fa-folder">
                            </i>
                            View
                            </a>
                            <a class="btn btn-info btn-sm" href="#">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Edit
                            </a>
                            <a class="btn btn-danger btn-sm" href="#">
                            <i class="fas fa-trash">
                            </i>
                            Delete
                            </a>
                        </td>
                    </tr> --}}
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection