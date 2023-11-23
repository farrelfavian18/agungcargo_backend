{{-- <?php include 'header.php'; ?> --}}
@include('landingpage.header')

<main id="main">


    <section
        style="background-image:url('assets/img/testimonials-bg.jpg');background-repeat: repeat-space; padding-top:300px; position: relative;">
    </section>


    <!-- =========================== FORM CEK TARIF ================================================= -->
    <div class="container">
        <div class="card"
            style="width: 900px;   margin-left:10%;   position: relatif; left: 50px; top: -5rem; box-shadow: 0px 5px 25px 0px rgba(0, 0, 0, 0.25); border-radius:15px;">

            <div class="card-body" style="padding: 30px 5px 38px 55px;">

                <form class="row g-4">
                    <div class="col-auto">
                        <label class="form-label"><i class="bi bi-geo-alt-fill"></i> <strong>Kota Asal</strong></label>
                        <input type="text" class="form-control" id="inputAsal" placeholder="Asal">
                    </div>
                    <div class="col-auto">
                        <label class="form-label"><i class="bi bi-geo-alt-fill"></i> <strong>Kota
                                Tujuan</strong></label>
                        <input type="text" class="form-control" id="inputTujuan" placeholder="Tujuan">
                    </div>

                    <div class="col-2">
                        <label class="form-label"><i class="bi bi-box"></i> <strong>Berat (Kg)</strong></label>
                        <input type="number" max="4" class="form-control" id="inputBerat" placeholder="10 kg">
                    </div>

                    <div class="col-auto">
                        <button type="submit" class="btn btn-lg btn-primary mt-4"><i class="bi bi-search"></i> Cek
                            Tarif</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <!-- =========================== FORM CEK TARIF END ================================================= -->


    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />


    <!--
    <section id="pricing" class="pricing">

      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Cek Tarif Pengiriman</h2>
         
          <div id="footer">
      
          <div class="footer-newsletter mt-3">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-6">
            
                <form action="" method="post">
      
                  <input type="email" name="email" placeholder="ketik kota tujuan pengiriman"><input type="submit" value="Cek Ongkir">
                </form>
        
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->


</main><!-- End #main -->

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
                        (021) 82371195686<br>
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
                    <p style="color: white;"><i class="bi bi-clock-fill"></i> 09.00 s/d 23.00 PM</p>
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
                    <p style="color:white">Follow Sosial Media Kami :</p>
                    </li>
                    <div class="social-links mt-3">
                        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                    </div>
                    <br />
                    <h4>Dapatkan Aplikasinya</h4>
                    <a href="index.html" class="logo"><img src="assets/img/googleplay.png" width="60%"></a>

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

</body>

</html>
