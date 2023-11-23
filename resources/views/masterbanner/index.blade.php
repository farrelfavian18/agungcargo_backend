@extends('layout.adminpanel')
@section('title', 'Master Banner')
@section('content')
    <section class="content">
        <div class="card-body">
            <table id="example2" class="table table-bordered table-hover">
                <a href ="{{ route('masterbanner.create') }}" class="btn btn-success align-items-right">Create Banner</a>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama Banner</th>
                        <th>Gambar Banner</th>
                        <th>Date Crated</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($masterbanner as $banner)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $banner->nama_banner }}</td>
                            <td>
                                <img src="{{ asset($banner->gambar_banner) }}" width="250" height="200"
                                    class="img img-reponsive" />
                            </td>
                            <td>{{ $banner->created_at }}
                            <td class="project-actions text-right">
                                {{-- <a class="btn btn-primary btn-sm" href="#">
                                <i class="fas fa-folder">
                                </i>
                                View
                            </a> --}}
                                {{-- <a class="btn btn-info btn-sm" href="{{ route('masterbanner.edit', $banner->id) }}">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Edit
                                </a> --}}
                                <form class="btn btn-danger btn-sm" method="POST"
                                    action="{{ route('masterbanner.destroy', $banner->id) }}"
                                    onsubmit="return confirm('Anda Yakin');">
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
                    </tfoot>
            </table>
        </div>
    </section>
@endsection
