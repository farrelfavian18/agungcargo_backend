@include('landingpage.header')

<!DOCTYPE html>
<html lang="id">



<head>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
</head>

{{-- @section('content') --}}
<div style="background-image: url({{ asset('img/karir.jpg') }}); background-repeat: repeat-space; padding-top:260px; ">
    <div class="container" style="top:-140px; position:relative;">
    </div>
    <div class="container">
        <h1>Lamaran Lowongan Kerja Agung Cargo Jabatan {{ $karirs->first()->nama_jabatan }}</h1>
        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @elseif(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
        @endif
        <form action="{{ route('lamaran.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card">
                <div class="card-body">
                    <!-- Add your form fields here -->
                    <input type="hidden" name="karir_id" value="{{ $karirs->first()->id }}">
                    <div class="form-group">
                        <label for="name">Nama Lengkap</label>
                        <input type="text" name="nama" id="nama" class="form-control" required>
                    </div>
                    <div>
                        @error('nama')<span style="color:Red">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="foto_karyawan">Foto</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="foto_karyawan" id="foto_karyawan"
                                    placeholder="" onchange="previewImage(event)" accept=".jpg, .jpeg, .png">
                                <label class=" custom-file-label" for="exampleInputFile"></label>
                            </div>
                        </div>
                    </div>
                    <img id="preview" src="#" alt="foto_karyawan" class="mt-2 img-fluid"
                        style="max-width: 150px; max-height:500px; display: none;">
                    <div>
                        @error('foto_karyawan')<span style="color:Red">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">E-Mail</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                            </div>
                            <input name="email" id="email type=" email" class="form-control" placeholder="Email">
                        </div>
                    </div>
                    <div>
                        @error('email')<span style="color:Red">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea class="form-control" name="alamat" rows="3"
                            placeholder="Masukan alamat lengkap"></textarea>
                        @error('alamat')
                        <span style="color:Red">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>No.Telepon (WhatsApp)</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-phone"></i></span>
                            </div>
                            <input type="text" id="no_telpon" name="no_telpon" class="form-control"
                                oninput="this.value = this.value.replace(/\D/g,'')">
                            @error('no_telpon')
                            <span style="color:Red">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <select class="form-control select2" id="jenis_kelamin" name="jenis_kelamin"
                            style="width: 100%;">
                            <option value="" selected disabled>Pilih Jenis Kelamin</option>
                            <option value='Laki-Laki'>Laki-Laki</option>
                            <option value='Perempuan'>Perempuan</option>
                        </select>
                        @error('jenis_kelamin')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Agama</label>
                        <select class="form-control select2" id="agama" name="agama" style="width: 100%;">
                            <option value="" selected disabled>Pilih Agama</option>
                            <option value='Islam'>Islam</option>
                            <option value='Katholik'>Katholik</option>
                            <option value='Kristen'>Kristen</option>
                            <option value='Hindu'>Hindu</option>
                            <option value='Buddha'>Buddha</option>
                            <option value='Kong Hu Cu'>Kong Hu Cu</option>
                        </select>
                        @error('agama')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <div class="input-group date" data-target-input="nearest">
                            <input type="date" class="form-control datetimepicker-input" data-target="#reservationdate"
                                id="tgl_lahir" name="tgl_lahir" />
                            {{-- <div class="input-group-append" data-target="#reservationdate"
                                data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                            </div> --}}
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name">Tempat Lahir</label>
                        <input type="text" name="tmpt_lahir" id="tmpt_lahir" class="form-control" required>
                    </div>
                    <div>
                        @error('tmpt_lahir')<span style="color:Red">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="status_hubungan">Status Hubungan</label>
                        <select class="form-control" id="status_hubungan" name="status_hubungan">
                            <option value="" selected disabled>Pilih Status Hubungan</option>
                            <option value="menikah">Sudah Menikah</option>
                            <option value="belum menikah">Belum Menikah</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>No. KTP</label>
                        <div class="input-group">
                            <input type="text" id="no_ktp" name="no_ktp" class="form-control"
                                oninput="this.value = this.value.replace(/\D/g,'')" minlength="16" maxlength="16">
                            @error('no_ktp')
                            <span style="color:Red">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="pendidikan">Pendidikan</label>
                        <select class="form-control" id="pendidikan" name="pendidikan">
                            <option value="" selected disabled>Pilih Pendidikan</option>
                            <option value="sd">SD</option>
                            <option value="smp">SMP</option>
                            <option value="sma/smk">SMA/SMK</option>
                            <option value="diploma">Diploma/D1-D4</option>
                            <option value="sarjana">Sarjana/S1</option>
                            <option value="magister">Magister/S2</option>
                            <option value="doktor">Doktor/S3</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="pengalaman_kerja">Pengalaman Kerja</label>
                        <textarea class="form-control" name="pengalaman_kerja" rows="3"
                            placeholder="Masukan pengalaman kerja"></textarea>
                        @error('pengalaman_kerja')
                        <span style=" color:Red">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="cv">CV</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="cv" id="cv" accept=".pdf">
                                <label class="custom-file-label" for="cv"></label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="ijazah">Ijazah</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="ijazah" id="ijazah" accept=".pdf">
                                <label class="custom-file-label" for="ijazah"></label>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Kirim Lamaran</button>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
    function previewImage(event) {
                var reader = new FileReader();
                reader.onload = function() {
                    var output = document.getElementById('preview');
                    output.src = reader.result;
                    output.style.display = 'block'; // Menampilkan preview foto
                }
                reader.readAsDataURL(event.target.files[0]);
            }
</script>

<script>
    $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()
    
    //Initialize Select2 Elements
    $('.select2bs4').select2({
    theme: 'bootstrap4'
    })
    
    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()
    
    //Date picker
    $('#reservationdate').datetimepicker({
    format: 'L'
    });
    
    //Date and time picker
    $('#reservationdatetime').datetimepicker({ icons: { time: 'far fa-clock' } });
    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
    timePicker: true,
    timePickerIncrement: 30,
    locale: {
    format: 'MM/DD/YYYY hh:mm A'
    }
    })
</script>

<script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{ asset('plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset('plugins/inputmask/jquery.inputmask.min.js')}}"></script>
<script src="{{ asset('plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
<script src="{{ asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    $(function () {
  bsCustomFileInput.init();
});
</script>

@include('landingpage.footer')