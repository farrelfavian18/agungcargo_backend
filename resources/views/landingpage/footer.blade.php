<!-- ======= Footer ======= -->
<footer id="footer">

    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6 footer-contact">
                    <!--<h3 style="color:black">Agung<span> Cargo</span></h3>-->
                    <p>

                    <H4>KONTAK KAMI</H4>
                    </p>
                    <p>
                        <strong><i class="bi bi-geo-alt-fill"></i> Kantor Pusat</strong><br>
                        Jl. Kebon Jeruk XV No.: 39 - 41, Maphar <br>
                        Kec. Taman Sari, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11160 <br>Indonesia
                        <hr />
                    </p>
                    <p>
                        <strong><i class="bi bi-telephone-forward-fill"></i> Call Center :</strong><br>
                        (021) 6596509<br>
                        <br>
                        <strong><i class="bi bi-envelope-at-fill"></i> Email :</strong><br>
                        halo@agungcargo.com<br>
                        marketing@agungcargo.com<br>
                    </p>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>PERUSAHAAN</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Profil Perusahaan</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Layanan Kami</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">FAQ</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Karir</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Syarat & Ketentuan</a></li>
                    </ul>
                    <br />
                    <h4>JAM OPERASIONAL</h4>
                    <p style="color: white;"><i class="bi bi-clock-fill"></i> 07.30 s/d 18.00 PM</p>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>LAYANAN KAMI</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Cek Tarif</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Lacak Kiriman</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Cari Agen</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Keluhan Pelanggan</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>SOSIAL MEDIA</h4>
                    <p style="color:white">Follow Sosial Media Kami</p>
                    </li>
                    <div class="social-links mt-3">
                        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                    </div>
                    <br />

                    <a href="index.html" class="logo"><img src="assets/img/logossl.png" width="55%"></a>

                </div>

            </div>
        </div>
    </div>

    <div class="container py-3">
        <div class="copyright">
            &copy; 2023 <strong><span>PT Agung Cargo</span></strong> All Rights Reserved.
        </div>
        <!-- <div class="credits">Designed by <a href="#">IT Agung Cargo</a>-->
    </div>
    </div>
</footer><!-- End Footer -->

<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="{{ asset('vendor/purecounter/purecounter_vanilla.js') }}"></script>
<script src="{{ asset('vendor/aos/aos.js') }}"></script>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ asset('vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('vendor/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('vendor/waypoints/noframework.waypoints.js') }}"></script>
<script src="{{ asset('vendor/php-email-form/validate.js') }}"></script>
<!-- Template Main JS File -->
<script src="{{ asset('js/main.js') }}"></script>
<!-- script adm lte -->
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
<script src="{{ asset('plugins/daterangepicker/daterangepicker.js')}}"></script>
// <script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
// <script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
// <script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
// <script src="{{ asset('plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
// <script src="{{ asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
// <script src="{{ asset('plugins/jszip/jszip.min.js') }}"></script>
// <script src="{{ asset('plugins/pdfmake/pdfmake.min.js') }}"></script>
// <script src="{{ asset('plugins/pdfmake/vfs_fonts.js') }}"></script>
// <script src="{{ asset('plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js') }}"></script>
<script src="{{ asset('plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
<script src="{{ asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>

</html>