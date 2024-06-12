@include('landingpage.header')
{{-- <?php include 'header.php'; ?> --}}

<div style="background-image: url({{ asset('img/karir.jpg') }}); background-repeat: repeat-space; padding-top:260px; ">
    <div class="container" style="top:-140px; position:relative;">
        <h3>Join With Us.</h3>
        <p>Mari berkarir bersama kami.</p>
    </div>
</div>

<section id="karir" class="contact">
    <div class="container" style="padding-left:10%;   ">
        <form class="row g-4">

            <div class="col-lg-2">
                <div class="form-group">
                    <div class="position-relative">
                        <label class="form-label"><strong><i class="bi bi-caret-down"></i> Lowongan
                                Kerja</strong></label>
                        <input type="text" placeholder="Marketing" class="form-control">
                    </div>
                </div>
            </div>


            <div class="col-lg-3">
                <div class="form-group">
                    <div class="position-relative">
                        <label class="form-label"><strong><i class="bi bi-caret-down"></i> Kategori</strong></label>
                        <select name="asal" id="inputAsal" form="inputAsal" class="form-control">
                            <option value="asal">- Kategori Pekerjaan -</option>
                            <option value="jakarta">Staf Marketing</option>
                            <option value="jakarta">Staf Administrasi</option>
                            <option value="jakarta">IT Operation</option>
                            <option value="jakarta">HRD Personalia</option>
                            <option value="jakarta">Kurir</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="form-group">
                    <div class="position-relative">
                        <label class="form-label"><strong><i class="bi bi-caret-down"></i> Lokasi</strong></label>
                        <select name="asal" id="inputAsal" form="inputAsal" class="form-control">
                            <option value="asal">- Kantor Cabang -</option>
                            <option value="jakarta">Jakarta</option>
                            <option value="jakarta">Manado</option>
                            <option value="jakarta">Batam</option>
                            <option value="jakarta">Makasar</option>
                            <option value="jakarta">Denpasar</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="form-group" style="margin-top:-15px;">
                    <button class="btn btn-primary" submit="reset">Cari Lowongan</button>
                </div>
            </div>

        </form>
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
                        <td><a href="#" data-bs-toggle="modal"
                                data-bs-target="#myModal{{ $key->id }}">Detail...</a>
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
                </div>
            </div>
        </div>

    </div>
@endforeach


<br />
<br />
<br />
<br />
<br />

@include('landingpage.footer')
{{-- <?php include 'footer.php'; ?> --}}
