{{-- @yield('header') --}}
@include('landingpage.header')


<!-- ======= Hero Section ======= -->

<div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        @foreach ($masterbanner as $key)
            <div class="carousel-item active" data-bs-interval="5000">
                <img src="{{ $key->gambar_banner }}" class="d-block w-100" alt="...">
            </div>
        @endforeach
        {{-- <div class="carousel-item active" data-bs-interval="5000">
            <img src="assets/img/banner/banner1.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item" data-bs-interval="5000">
            <img src="assets/img/banner/banner2.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="assets/img/banner/banner3.png" class="d-block w-100" alt="...">
        </div> --}}
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<!-- ======= Hero Section ======= -->




<!-- =========================== FORM CEK TARIF ================================================= -->
<div class="container">
    <div id="cektarif" class="card">

        <div class="card-body">
            <h5>Cek Tarif Layanan</h5>

            <form class="row g-4">

                <div class="col-lg-3">
                    <div class="form-group">
                        <div class="position-relative">
                            <label class="form-label"><i class="bi bi-geo-alt-fill"></i> <strong>Kota
                                    Asal</strong></label>
                            <select name="asal" id="inputAsal" form="inputAsal" class="form-control">
                                <option value="asal">Asal</option>
                                <option value="jakarta">Jakarta</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="form-group">
                        <div class="position-relative">
                            <label class="form-label"><i class="bi bi-geo-alt-fill"></i> <strong>Kota
                                    Tujuan</strong></label>
                            <select name="tujuan" id="inputTujuan" form="inputTujuan" class="form-control">
                                <option value="tujuan">Tujuan</option>
                                <option value="palembang">Palembang</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="form-group">
                        <div class="position-relative">
                            <label class="form-label"><i class="bi bi-box"></i> <strong>Berat (Kg)</strong></label>
                            <input type="number" max="4" class="form-control" id="inputBerat"
                                placeholder="10 kg">
                        </div>
                    </div>
                </div>


                <div class="col-2">
                    <button type="submit" class="btn btn-lg btn-primary"> CEK TARIF &nbsp; <i
                            class="bi bi-arrow-right-circle-fill"></i></button>
                </div>
            </form>




        </div>

    </div>
</div>
</div>

<!-- =========================== FORM CEK TARIF END ================================================= -->




<main id="main">


    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon"><i class="bx bxl-dribbble"></i></div>
                        <h4 class="title"><a href="">Custom Your Price</a></h4>
                        <p class="description">Dengan Flexibilitas harga kamu dapat menentukan harga yang kamu mau.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon"><i class="bx bx-tachometer"></i></div>
                        <h4 class="title"><a href="">Schedule pickups</a></h4>
                        <p class="description">Kamu dapat mengatur pengambilan barang dimanapun untuk kemudahan dan
                            kenyamanan kamu.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                        <div class="icon"><i class="bx bx-tachometer"></i></div>
                        <h4 class="title"><a href="">Trusted</a></h4>
                        <p class="description">Pelayanan dan standaritas kami menjaminkan barang kamu akan dikirim
                            dengan aman.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
                        <div class="icon"><i class="bx bx-world"></i></div>
                        <h4 class="title"><a href="">Make Shipping Easy For You</a></h4>
                        <p class="description">Dengan Agung Cargo kamu dapat dengan mudah mengirim barang kamu hanya
                            perlu untuk menghubungi kami, kami akan datang
                            menjemput barang dan juga segera mengantarkan ketempat tujuan.</p>
                    </div>
                </div>

            </div>
        </div>
    </section><!-- End Featured Services Section -->



    <!-- ======= About Section ======= -->
    <section id="about" class="about section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Sekilas Tentang Kami</h2>

                <!--<h3>Find Out More <span>About Us</span></h3>-->
                <p></p>
            </div>

            <div class="row">
                <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
                    <img src="{{ asset('img/about.jpg') }}" width="85%" class="img-fluid" alt=""
                        style="border-radius: 15px; opacity: 80%;">
                </div>
                <div class="col-lg-6 pt-0 pt-lg-0 content d-flex flex-column justify-content-center"
                    data-aos="fade-up" data-aos-delay="100">
                    <ul>
                        <li><i class="bx bx-store-alt"></i>
                            <h5 class="mt-4">Profil Perusahaan</h5>
                        </li>

                    </ul>

                    <p style="text-align: justify;">
                        Agung Cargo atau <strong>PT Agung Wijaksana Utama Sakti </strong>adalah perusahaan
                        kargo yang berdiri dari 1974 dengan fokus utama memberikan jasa
                        pengiriman barang melalui darat, laut, dan udara. Agung Cargo
                        melayani pengiriman dengan skala personal, retail, corporate contract,
                        maupun project cargo. Kami memberikan tawaran menggunakan sistem
                        yang ter integrasi secara teknologi dari awal sampai akhir untuk para
                        konsumen yang menggunakan jasa kami dalam pengiriman
                        ke seluruh Indonesia
                    </p>
                    <p style="text-align: justify;">
                        Selama bertahun-tahun Agung Cargo sendiri memberikan pelayanan terbaik
                        dari awal seperti layanan pick up, asuransi, garansi untuk para konsumen
                        yang memerlukan nya. Jaminan keamanan barang, tracking barang,
                        monitoring, dan tarif kompetitif. Agung Cargo berkomitmen memberikan
                        pelayanan dengan keunggulan nya yaitu, kecepatan barang sampai
                        keseluruh indonesia dan tentunya dengan tingkat keamanan yang terbaik.
                    </p>
                    <p style="text-align: justify;">
                        Kami berharap dengan adanya keberadaan Agung Cargo dapat menunjang
                        kebutuhan distribusi ke seluruh indonesia dan menjadi partner dalam
                        kesuksesan bisnis anda.
                    </p>
                    <!--
<ul>
<li>
<i class="bx bx-store-alt"></i>
<div>
<h5>Ullamco laboris nisi ut aliquip consequat</h5>
<p>Magni facilis facilis repellendus cum excepturi quaerat praesentium libre trade</p>
</div>
</li>
<li>
<i class="bx bx-images"></i>
<div>
<h5>Magnam soluta odio exercitationem reprehenderi</h5>
<p>Quo totam dolorum at pariatur aut distinctio dolorum laudantium illo direna pasata redi</p>
</div>
</li>
</ul>-->

                </div>
            </div>

        </div>
    </section><!-- End About Section -->



    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="count-box">
                        <i class="bi bi-emoji-smile"></i>
                        <span data-purecounter-start="0" data-purecounter-end="1974" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Tahun Berdiri</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
                    <div class="count-box">
                        <i class="bi bi-building"></i>
                        <span data-purecounter-start="0" data-purecounter-end="777" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Daerah Jangkauan</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                    <div class="count-box">
                        <i class="bi bi-box-seam-fill"></i>
                        <span data-purecounter-start="0" data-purecounter-end="135" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Klien</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                    <div class="count-box">
                        <i class="bi bi-people"></i>
                        <span data-purecounter-start="0" data-purecounter-end="59" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Total Karyawan</p>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Counts Section -->



    <!-- ======= Clients Section ======= -->
    <!--
<section id="clients" class="clients section-bg">
<div class="container" data-aos="zoom-in">

<div class="row">

<div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
<img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
</div>

<div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
<img src="assets/img/clients/client-2.png" class="img-fluid" alt="">
</div>

<div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
<img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
</div>

<div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
<img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
</div>

<div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
<img src="assets/img/clients/client-5.png" class="img-fluid" alt="">
</div>

<div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
<img src="assets/img/clients/client-6.png" class="img-fluid" alt="">
</div>

</div>

</div>
</section> -->
    <!-- End Clients Section -->




    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Layanan Kami</h2>
                <h3>Layanan
                    <span>Tambahan</span>
                </h3>
                <p>Agung Cargo berkomitmen untuk melayani anda dengan Cepat, Tegap, Tangguh, Ramah, Menambah kecepatan
                    pengiriman anda.</p>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bxl-dribbble"></i></div>
                        <h4><a href="">Barang Terjamin aman</a></h4>
                        <p>Keamanan barang ini adalah komitmen utama kami, sehingga Anda dapat tenang dan yakin setiap
                            saat.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
                    data-aos-delay="200">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-file"></i></div>
                        <h4><a href="">Barang dapat di pickup dimana saja</a></h4>
                        <p>Barang bisa diambil di lokasi pilihan Anda, memberikan fleksibilitas yang Anda butuhkan.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in"
                    data-aos-delay="300">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-tachometer"></i></div>
                        <h4><a href="">Asuransi Barang</a></h4>
                        <p>Setiap barang yang anda kirimkan melalui jasa kami akan kami asurasikan dengan aman.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in"
                    data-aos-delay="100">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-world"></i></div>
                        <h4><a href="">Dapat mengirimkan segala jenis barang</a></h4>
                        <p>Kami siap mengirimkan berbagai jenis barang, apa pun yang Anda butuhkan..</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in"
                    data-aos-delay="200">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-slideshow"></i></div>
                        <h4><a href="">Pengiriman Cepat</a></h4>
                        <p>Kami menawarkan pengiriman cepat untuk memastikan barang tiba dengan segera.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in"
                    data-aos-delay="300">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-arch"></i></div>
                        <h4><a href="">Respon cepat dari tim kami kapanpun kamu butuhkan</a></h4>
                        <p>Kami bangga dengan kecepatan respon tim kami yang siap sedia untuk Anda, kapan pun Anda
                            memerlukan bantuan.</p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Services Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
        <div class="container" data-aos="zoom-in">

            <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper-wrapper">


                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="{{ asset('img/testimonials/Ismail.png') }}" class="testimonial-img"
                                alt="">
                            <h3>Ismail Peawa</h3>
                            <h4>Local Guide</h4>
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                Harga Murah dan pengiriman estimasi cepat serta bisa COD (cash on delivery).
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="{{ asset('img/testimonials/ibenk.png') }}" class="testimonial-img"
                                alt="">
                            <h3>Ibenk Waryoko</h3>
                            <h4>Local Guide</h4>
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                Layananya ramah dan harga tidak terlalu mahal untuk kirim paket via udara.
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="{{ asset('img/testimonials/arif.png') }}" class="testimonial-img"
                                alt="">
                            <h3>Arif Maulana</h3>
                            <h4>Local Guide</h4>
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                Jasa pengiriman barang yang aman cepat dan bisa di percaya.
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->

                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section><!-- End Testimonials Section -->



    <!-- ======= Portfolio Section =======
<section id="portfolio" class="portfolio">
<div class="container" data-aos="fade-up">

<div class="section-title">
<h2>Blog dan News</h2>
<h3>Dapatkan Info Seputar <span>Promosi kami di sini</span></h3>

</div>

<div class="row" data-aos="fade-up" data-aos-delay="100">
<div class="col-lg-12 d-flex justify-content-center">
<ul id="portfolio-flters">
<li data-filter="*" class="filter-active">All</li>
<li data-filter=".filter-app">Promosi</li>
<li data-filter=".filter-card">Diskon</li>
<li data-filter=".filter-web">News</li>
</ul>
</div>
</div>

<div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

<div class="col-lg-4 col-md-6 portfolio-item filter-app">
<img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
<div class="portfolio-info">
<h4>App 1</h4>
<p>App</p>
<a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
<a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
</div>
</div>

<div class="col-lg-4 col-md-6 portfolio-item filter-web">
<img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
<div class="portfolio-info">
<h4>Web 3</h4>
<p>Web</p>
<a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
<a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
</div>
</div>

<div class="col-lg-4 col-md-6 portfolio-item filter-app">
<img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
<div class="portfolio-info">
<h4>App 2</h4>
<p>App</p>
<a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
<a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
</div>
</div>

<div class="col-lg-4 col-md-6 portfolio-item filter-card">
<img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
<div class="portfolio-info">
<h4>Card 2</h4>
<p>Card</p>
<a href="assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
<a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
</div>
</div>

<div class="col-lg-4 col-md-6 portfolio-item filter-web">
<img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
<div class="portfolio-info">
<h4>Web 2</h4>
<p>Web</p>
<a href="assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
<a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
</div>
</div>

<div class="col-lg-4 col-md-6 portfolio-item filter-app">
<img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
<div class="portfolio-info">
<h4>App 3</h4>
<p>App</p>
<a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
<a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
</div>
</div>

<div class="col-lg-4 col-md-6 portfolio-item filter-card">
<img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
<div class="portfolio-info">
<h4>Card 1</h4>
<p>Card</p>
<a href="assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
<a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
</div>
</div>

<div class="col-lg-4 col-md-6 portfolio-item filter-card">
<img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
<div class="portfolio-info">
<h4>Card 3</h4>
<p>Card</p>
<a href="assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 3"><i class="bx bx-plus"></i></a>
<a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
</div>
</div>

<div class="col-lg-4 col-md-6 portfolio-item filter-web">
<img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
<div class="portfolio-info">
<h4>Web 3</h4>
<p>Web</p>
<a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
<a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
</div>
</div>

</div>

</div>
</section> End Portfolio Section -->

    <!-- ======= Team Section ======= -->
    <!-- <section id="team" class="team section-bg">
<div class="container" data-aos="fade-up">

<div class="section-title">
<h2>Team</h2>
<h3>Our Hardworking <span>Team</span></h3>
<p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
</div>

<div class="row">

<div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
<div class="member">
<div class="member-img">
<img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
<div class="social">
<a href=""><i class="bi bi-twitter"></i></a>
<a href=""><i class="bi bi-facebook"></i></a>
<a href=""><i class="bi bi-instagram"></i></a>
<a href=""><i class="bi bi-linkedin"></i></a>
</div>
</div>
<div class="member-info">
<h4>Walter White</h4>
<span>Chief Executive Officer</span>
</div>
</div>
</div>

<div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
<div class="member">
<div class="member-img">
<img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
<div class="social">
<a href=""><i class="bi bi-twitter"></i></a>
<a href=""><i class="bi bi-facebook"></i></a>
<a href=""><i class="bi bi-instagram"></i></a>
<a href=""><i class="bi bi-linkedin"></i></a>
</div>
</div>
<div class="member-info">
<h4>Sarah Jhonson</h4>
<span>Product Manager</span>
</div>
</div>
</div>

<div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
<div class="member">
<div class="member-img">
<img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
<div class="social">
<a href=""><i class="bi bi-twitter"></i></a>
<a href=""><i class="bi bi-facebook"></i></a>
<a href=""><i class="bi bi-instagram"></i></a>
<a href=""><i class="bi bi-linkedin"></i></a>
</div>
</div>
<div class="member-info">
<h4>William Anderson</h4>
<span>CTO</span>
</div>
</div>
</div>

<div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
<div class="member">
<div class="member-img">
<img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
<div class="social">
<a href=""><i class="bi bi-twitter"></i></a>
<a href=""><i class="bi bi-facebook"></i></a>
<a href=""><i class="bi bi-instagram"></i></a>
<a href=""><i class="bi bi-linkedin"></i></a>
</div>
</div>
<div class="member-info">
<h4>Amanda Jepson</h4>
<span>Accountant</span>
</div>
</div>
</div>

</div>

</div>
</section> End Team Section -->

    <!-- ======= Pricing Section =======
<section id="pricing" class="pricing">
<div class="container" data-aos="fade-up">

<div class="section-title">
<h2>Pricing</h2>
<h3>Daftar <span>Harga</span></h3>
<p>Agung Cargo menawarkan layanan pengiriman barang dan logistik domestik dan internasional ke kepulauan Indonesia dan dunia. Tidak ada kargo dan pengiriman yang terlalu kecil atau besar bagi kami.</p>

</div>

<div class="row">

<div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
<div class="box featured">
<h3>Same Day</h3>
<h4><sup>$</sup>0<span> / month</span></h4>
<ul>
<li>Satu hari sampai</li>
<li>Layanan Cepat</li>
<li>Dengan Asuransi</li>
<li class="na">Harga Murah</li>
<li class="na">Pasti Sampai</li>
</ul>
<div class="btn-wrap">
<a href="#" class="btn-buy">Kirim Sekarang</a>
</div>
</div>
</div>

<div class="col-lg-3 col-md-6 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
<div class="box featured">
<h3>Next day</h3>
<h4><sup>$</sup>19<span> / month</span></h4>
<ul>
<li>Dua hari sampai</li>
<li>Layanan Cepat</li>
<li>Dengan Asuransi</li>
<li class="na">Harga Murah</li>
<li class="na">Pasti Sampai</li>
</ul>
<div class="btn-wrap">
<a href="#" class="btn-buy">Kirim Sekarang</a>
</div>
</div>
</div>

<div class="col-lg-3 col-md-6 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
<div class="box featured">
<h3>Domestik</h3>
<h4><sup>$</sup>29<span> / month</span></h4>
<ul>
<li>Tiga hari sampai</li>
<li>Layanan Cepat</li>
<li>Dengan Asuransi</li>
<li class="na">Harga Murah</li>
<li class="na">Pasti Sampai</li>
</ul>
<div class="btn-wrap">
<a href="#" class="btn-buy">Kirim Sekarang</a>
</div>
</div>
</div>

<div class="col-lg-3 col-md-6 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
<div class="box">
<span class="advanced">Advanced</span>
<h3>International</h3>
<h4><sup>$</sup>49<span> / month</span></h4>
<ul>
<li>Empat hari sampai</li>
<li>Layanan Cepat</li>
<li>Dengan Asuransi</li>
<li>Harga Murah</li>
<li>Pasti Sampai</li>
</ul>
<div class="btn-wrap">
<a href="#" class="btn-buy">Kirim Sekarang</a>
</div>
</div>
</div>

</div>

</div>
</section>End Pricing Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>F.A.Q</h2>
                <h3>Frequently Asked <span>Questions</span></h3>

            </div>

            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <ul class="faq-list">

                        <li>
                            <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">Apa kelebihan
                                dari
                                Agung Cargo?
                                <i class="bi bi-chevron-down icon-show"></i><i
                                    class="bi bi-chevron-up icon-close"></i>
                            </div>
                            <div id="faq1" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Anda dapat dengan mudah mengetahui tarif pengiriman, dan mengecek drop point (kantor
                                    cabang) terdekat
                                    dengan lokasi Anda melalui aplikasi dan website. Drop point Agung Cargo beroperasi
                                    setiap hari (termasuk weekend, dan Hari Libur Nasional).
                                </p>
                            </div>
                        </li>

                        <li>
                            <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">Bagaimana sistem
                                pembayaran Agung Cargo ?
                                <i class="bi bi-chevron-down icon-show"></i><i
                                    class="bi bi-chevron-up icon-close"></i>
                            </div>
                            <div id="faq2" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Untuk pelanggan non-korporat, pembayaran harus dilakukan secara tunai pada saat
                                    pengiriman paket
                                    melalui drop point. Untuk pelanggan korporasi, sistem pembayaran dapat dilakukan
                                    dengan syarat dan ketentuan khusus.
                                </p>
                            </div>
                        </li>

                        <li>
                            <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">Apa yang perlu
                                anda
                                siapkan untuk pengiriman menggunakan Agung Cargo ?
                                <i class="bi bi-chevron-down icon-show"></i><i
                                    class="bi bi-chevron-up icon-close"></i>
                            </div>
                            <div id="faq3" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Paket yang akan anda kirimkan adalah wajib dikemas dan dibungkus dalam keadaan baik
                                    atau layak
                                    suatu kemasan tertutup (packing), serta telah diberikan data penerima secara
                                    lengkap,
                                    termasuk pada nama, alamat, kode pos dan nomor telepon secara lengkap,
                                    sesuai aturan standard pengiriman dalam maupun luar negeri / internasional.
                                </p>
                            </div>
                        </li>

                        <li>
                            <div data-bs-toggle="collapse" href="#faq4" class="collapsed question">Bagaimana anda
                                melakukan klaim ?
                                <i class="bi bi-chevron-down icon-show"></i><i
                                    class="bi bi-chevron-up icon-close"></i>
                            </div>
                            <div id="faq4" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Untuk proses klaim dapat menghubungi call center Agung Cargo (021) 6596509
                                    Kemudian Anda bisa mengambil formulir klaim di drop point terdekat dan melengkapi
                                    semua persyaratan yang dibutuhkan.
                                </p>
                            </div>
                        </li>

                        <li>
                            <div data-bs-toggle="collapse" href="#faq5" class="collapsed question">Bagaimana cara
                                kirim
                                paket dengan jasa asuransi ?
                                <i class="bi bi-chevron-down icon-show"></i><i
                                    class="bi bi-chevron-up icon-close"></i>
                            </div>
                            <div id="faq5" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Anda dapat memberi tahu admin drop point Agung Cargo bahwa Anda ingin
                                    mengasuransikan barang kiriman Anda.
                                    Kemudian, Agung Cargo akan menghitung biaya asuransi paket Anda dengan perhitungan
                                    0,2% dari harga invoice.
                                </p>
                            </div>
                        </li>

                        <li>
                            <div data-bs-toggle="collapse" href="#faq6" class="collapsed question">Bagaimana jika
                                terjadi kerusakan dan kehilangan paket saat pengiriman ?
                                <i class="bi bi-chevron-down icon-show"></i><i
                                    class="bi bi-chevron-up icon-close"></i>
                            </div>
                            <div id="faq6" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Jika Anda telah melakukan pembayaran asuransi dan melengkapi semua dokumen klaim,
                                    maka Agung Cargo akan melakukan pembayaran klaim sesuai dengan nilai barang,
                                    maksimal Rp. 0,- (xx Rupiah).
                                </p>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </section><!-- End Frequently Asked Questions Section -->
    {{-- @include('landingpage.footer') --}}

</main><!-- End #main -->
@include('landingpage.footer')
