@extends('layout.adminpanel')
@section('title', 'Presensi Karyawan')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="card card-info card-outline">
                <center>
                    <div class="card-body">
                        <div id="clock" style="font-size: 100px">
                        </div>
                        <div class="row" style="margin-top: 70px">
                            <div class="col">
                                <div class="webcam-capture"></div>
                            </div>
                        </div>
                        @if ($cek->count() > 0 )
                        @if ($cek->first()->jam_keluar_presensi == null)
                        <div class="row">
                            <div class="col">
                                <button id="ambilpresensi" class="btn btn-warning btn-block">
                                    Presensi Pulang
                                </button>
                            </div>
                        </div>
                        @else
                        <div class="row">
                            <div class="col">
                                Anda sudah melakukan presensi pulang hari ini
                            </div>
                        </div>
                        @endif

                        @else
                        <div class="row">
                            <div class="col">
                                <button id="ambilpresensi" class="btn btn-primary btn-block">
                                    Presensi Masuk
                                </button>
                            </div>
                        </div>
                        @endif
                    </div>
                </center>
            </div>
        </div>
    </div>
</section>
@push('myscript')
<script>
    Webcam.set({
                width: 640,
                height: 480,
                image_format: 'jpeg',
                jpeg_quality: 80
            });
            Webcam.attach('.webcam-capture');

    function errorCallback(){
        alert('Gagal mengambil gambar');
    }

    $("#ambilpresensi").click(function(e){
        Webcam.snap(function(uri){
            image = uri;
        });
        $.ajax({
            type: "POST",
            url: '/presensi-karyawan/store',
            data:{
                _token: "{{ csrf_token() }}",
                image: image
            },
            cache: false,
            success:function(respond){
                var status = respond.split("|");
                if(status[0] == 'success'){
                    Swal.fire({
                    title: 'Berhasil!',
                    text: status[1],
                    icon: 'success',
                    })
                    setTimeout(function(){
                        window.location.href = '/admin/admindashboard';
                    }, 3000);
                } else {
                    Swal.fire({
                    title: 'Error!',
                    text: 'Terjadi kesalahan saat melakukan presensi, silahkan coba lagi!',
                    icon: 'error',
                    confirmButtonText: 'OK'
                    })
                }
            }
            
        });
        // alert(image);
    });
</script>
<script>
    function updateClock() {
        // Get the current time
        let currentTime = new Date();
        let hours = currentTime.getHours();
        let minutes = currentTime.getMinutes();
        let seconds = currentTime.getSeconds();
    
        // Add leading zeros if the values are less than 10
        hours = (hours < 10 ? "0" : "") + hours;
        minutes = (minutes < 10 ? "0" : "") + minutes;
        seconds = (seconds < 10 ? "0" : "") + seconds;
    
        // // Format the time in 12-hour format (AM/PM)
        // let amPM = hours >= 12 ? "PM" : "AM";
        // hours = hours % 12;
        // hours = hours ? hours : 12; // the hour '0' should be '12'
    
        // Update the clock display
        document.getElementById('clock').innerHTML = hours + ":" + minutes + ":" + seconds + " " + "WIB";
    
        // Update the clock every second
        setTimeout(updateClock, 1000);
    }
    
    // Start the clock initially
    updateClock();
</script>
@endpush
@endsection