@extends('layout.adminpanel')
@section('title', 'Karir')
@section('content')
    <section class="content">
        <div class="card-body">
            <table id="example2" class="table table-bordered table-hover">
                <a href ="{{ route('karirs.create') }}" class="btn btn-success align-items-right">Create Karir</a>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama Jabatan</th>
                        <th>Lokasi</th>
                        <th>Kualifikasi</th>
                        <th>Deskripsi Lowongan</th>
                        <th>Kategori Pekerjaan</th>
                        <th>Status Loker</th>
                        <th>Date Crated</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($karir as $karirs)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $karirs->nama_jabatan }}</td>
                            <td>{{ $karirs->lokasi }}</td>
                            <td>{{ $karirs->kualifikasi }}</td>
                            <td>{{ $karirs->deskripsi_lowongan }}</td>
                            <td>{{ $karirs->kategori_pekerjaan }}</td>
                            <td>{{ $karirs->status_loker }}</td>
                            <td>{{ $karirs->created_at }}
                            <td class="project-actions text-right">
                                {{-- <a class="btn btn-primary btn-sm" href="#">
                                <i class="fas fa-folder">
                                </i>
                                View
                            </a> --}}
                                <a class="btn btn-info btn-sm" href="{{ route('karirs.edit', $karirs->id) }}">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Edit
                                </a>
                                <form class="btn btn-danger btn-sm" method="POST"
                                    action="{{ route('karirs.destroy', $karirs->id) }}"
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
