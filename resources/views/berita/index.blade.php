@extends('layout.adminpanel')
@section('title', 'Berita')
@section('content')
    <section class="content">
        <div class="card-body">
            <table id="example2" class="table table-bordered table-hover">
                <a href ="{{ route('berita.create') }}" class="btn btn-success align-items-right">Create Berita</a>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Judul Berita</th>
                        <th>Isi Berita</th>
                        <th>Foto Berita</th>
                        <th>Dibuat Pada</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($berita as $beritas)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $beritas->judul_berita }}</td>
                            <td>{{ $beritas->isi_berita }}</td>
                            <td>
                                <img src="{{ asset($beritas->foto_berita) }}" width="250" height="200"
                                    class="img img-reponsive" />
                            </td>
                            <td>{{ $beritas->created_at }}
                            <td class="project-actions text-right">
                                {{-- <a class="btn btn-primary btn-sm" href="#">
                                <i class="fas fa-folder">
                                </i>
                                View
                            </a> --}}
                                <a class="btn btn-info btn-sm" href="{{ route('berita.edit', $beritas->id) }}">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Edit
                                </a>
                                <form class="btn btn-danger btn-sm" method="POST"
                                    action="{{ route('berita.destroy', $beritas->id) }}"
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

        </div>
        </div>
        </div>
        </div>
    </section>
@endsection
