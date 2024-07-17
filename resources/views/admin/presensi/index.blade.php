@extends('layout.adminpanel')
@section('title', 'Presensi')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Karyawan</th>
                                    <th>Status</th>
                                    <th>Tanggal</th>
                                    <th>Jam Presensi</th>
                                    <th>Foto Masuk</th>
                                    <th>Jam Keluar</th>
                                    <th>Status</th>
                                    <th>Total Jam Kerja</th>
                                    <th>Foto Keluar</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $no = 1;
                                @endphp
                                @foreach ($presensi as $item)
                                <tr>
                                    <td scope="row">{{ $no++ }}</td>
                                    {{-- <td>{{ $item->id }}</td> --}}
                                    <td>{{ $item->users->name }}</td>
                                    <td>
                                        @if ($item->jam_presensi >='08:00')
                                        <span class="badge badge-danger">Terlambat</span>
                                        @else
                                        <span class="badge badge-success">Hadir</span>
                                        @endif
                                    </td>

                                    {{-- <td>{{ $item->status }}</td> --}}
                                    <td>{{ Carbon\Carbon::parse($item->tgl_presensi)->format('d-m-Y') }}</td>
                                    <td>{{ $item->jam_presensi }}</td>
                                    <td>
                                        <img src="{{ asset('storage/uploads/presensi/'.$item->foto_presensi) }}"
                                            width="100" height="100" class="img img-reponsive" />
                                    </td>
                                    <td>{{ $item->jam_keluar_presensi }}</td>
                                    <td>
                                        @if ($item->jam_keluar_presensi >='08:00' && $item->jam_keluar_presensi
                                        <= '16:00' ) <span class="badge badge-warning">Pulang Cepat</span>
                                            @elseif ($item->jam_keluar_presensi >='16:00' && $item->jam_keluar_presensi)
                                            <span class="badge badge-success">Pulang</span>
                                            @else
                                            <span class="badge badge-danger">Tidak Absen</span>
                                            @endif
                                            {{-- @if ($item->jam_keluar_presensi >= $jadwal_jam_masuk &&
                                            $item->jam_keluar_presensi
                                            <= '16:00' ) <span class="badge badge-warning">Pulang Cepat</span>
                                                @elseif ($item->jam_keluar_presensi >= $jadwal_jam_keluar &&
                                                $item->jam_keluar_presensi)
                                                <span class="badge badge-success">Pulang</span>
                                                @else
                                                <span class="badge badge-danger">Tidak Absen</span>
                                                @endif --}}
                                    </td>
                                    <td>
                                        @php
                                        //jam presensi
                                        $jam_in = date("H:i",strtotime($item->jam_presensi));
                                        //jadwal masuk
                                        $jadwal_masuk = date("H:i",strtotime($item->jam_keluar_presensi));

                                        $jadwal_jam_masuk = $item->tgl_presensi." ".$jadwal_masuk;
                                        $jam_presensi = $item->tgl_presensi." ".$jam_in;

                                        @endphp
                                        @php
                                        $terlambat = hitungjamTerlambat($jadwal_jam_masuk,$jam_presensi)
                                        @endphp
                                        {{-- <a>{{$terlambat}} Jam</a> --}}
                                        {{-- @php
                                        $jam_kerja = selisih("08:00:00", $item->jam_presensi);
                                        @endphp --}}
                                        <span class="badge badge-success">{{ $terlambat }}</span>
                                    </td>
                                    <td>
                                        <img src="{{ asset('storage/uploads/presensi/'.$item->foto_keluar) }}"
                                            width="100" height="100" class="img img-reponsive" />
                                    </td>
                                </tr>
                                @endforeach
                                </tfoot>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection