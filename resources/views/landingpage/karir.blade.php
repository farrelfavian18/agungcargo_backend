@include('landingpage.header')
<div style="background-image: url({{ asset('img/karir.jpg') }}); background-repeat: repeat-space; padding-top:100px; ">
    {{-- <div class="container" style="top:-140px; position:relative;">
        <h3>Join With Us.</h3>
        <p>Mari berkarir bersama kami.</p>
    </div> --}}
</div>

<section id="karir" class="contact">
    <div class="container" style="padding-left:20%;">
        <div>
            <h4>Lowongan Kerja yang tersedia</h4>
        </div>
    </div>
</section>

<div class="container">
    <hr />
    <div class="table-responsive">
        <table class="table table-striped">
            <thead align="center">
                <th style="width:50%">Jabatan</th>
                <th>Kategori</th>
                <th>Lokasi</th>
                <th>More</th>
            </thead>
            @foreach ($karirs as $key)
            <tbody>

                <tr>
                    <td>
                        <p><strong>{{ $key->nama_jabatan }}</strong></p>
                        <p>{{ $key->kualifikasi }}</p>
                    </td>
                    <td>{{ $key->kategori_pekerjaan }}</td>
                    <td class="align-top">{{ $key->lokasi }}</td>
                    <td><a href="#" data-bs-toggle="modal" data-bs-target="#myModal{{ $key->id }}">Detail...</a>
                    </td>
                </tr>
            </tbody>
            @endforeach
        </table>
    </div>
    <br />
    <p><i style="font-size:12px;">"Waspada terhardap penipuan lowongan kerja yang mengatas namakan PT. Agung Wicaksana
            Utama Sakti (Agung Cargo).</i></p>
</div>

@foreach ($karirs as $key)
<!-- The Modal -->
<div class="modal" id="myModal{{ $key->id }}" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Detail Lowongan Kerja</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <h4 class="text-primary">{{ $key->nama_jabatan }}</h4>

                <p><i class="bi bi-building"></i> Lokasi : {{ $key->lokasi }}</p>

                <p><i class="bi bi-check2-square"></i> Kualifikasi :</p>
                <p>{{ $key->kualifikasi }}</p>

                <p><i class="bi bi-bookmark-plus"></i> Benefit :</p>
                <ul>
                    <li> Gaji Pokok</li>
                    <li> Insentif</li>
                    <li> Asuransi BPJS</li>
                    <li> Jenjang Karir</li>
                </ul>

                <p>Lamaran dapat ditujukan ke alamat email : <a
                        href="mailto: hairing@agungcargo.com">hairing@agungcargo.com</a></p>

            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal"><i
                        class="bi bi-arrow-counterclockwise"></i> Kembali</button>
                <button type="button" class="btn btn-primary" onclick="kirimLamaran({{ $key->id }})">
                    <i class=" bi bi-arrow-bar-up"></i></i>
                    Kirim Lamaran
                </button>
            </div>
        </div>
    </div>

</div>
@endforeach
@include('landingpage.footer')

<script>
    function kirimLamaran(id) {
        var path = "{{ route('lamaran.index', 'PLACEHOLDER') }}";
        path = path.replace('PLACEHOLDER', id);
        window.location.href = path;
    }
</script>

{{-- <script>
    function kirimLamaran(id) {
        window.location.href = "{{ route('lamaran.index') }}/" + id;
    }
</script> --}}