<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="container text-center text-md-left" data-aos="fade-up">
        <h1>Welcome to <span>Bidan Nurlis</span></h1>
        <h2>Kami siap melayani bunda dan buah hati anda dengan baik</h2>
        <a href="<?= base_url('homeuser/register') ?>" class="btn-get-started scrollto">Daftar/Registrasi</a>
    </div>
</section>
<!-- End Hero -->

<?= $this->session->flashdata('massage'); ?>
<main id="main">
    <!-- ======= What We Do Section ======= -->
    <section id="what-we-do" class="what-we-do">
        <div class="container">

            <div class="section-title">
                <h2>What We Do</h2>
                <p></p>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bxl-dribbble"></i></div>
                        <h4><a href="">Secara umum</a></h4>
                        <p>Tugas seorang bidan yaitu sebagai tenaga kesehatan profesional yang membantu wanita mulai dari sejak masa kehamilan hingga melahirkan.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-file"></i></div>
                        <h4><a href="">Kepada para wanita secara umum</a></h4>
                        <p>Pelayanan kesehatan yang diberikan bidan meliputi masa prahamil, masa kehamilan, masa persalinan, masa nifas, masa menyusui dan masa di antara dua kehamilan.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-tachometer"></i></div>
                        <h4><a href="">Memilih Bidan yang Tepat</a></h4>
                        <p>Bidan juga sudah mulai banyak dipercaya untuk membantu persalinan karena pendampingan mereka yang fokus terhadap individu ibu hamil disertai tindakan medis yang minimal.</p>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- End What We Do Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container">

            <div class="row">
                <div class="col-lg-6">
                    <img src="<?= base_url() ?>assets/landing/assets/img/bidan1.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0">
                    <h3>About Us</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                    <ul>
                        <li><i class="bx bx-check-double"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                        <li><i class="bx bx-check-double"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                    </ul>
                    <div class="row icon-boxes">
                        <div class="col-md-6">
                            <i class="bx bx-receipt"></i>
                            <h4>Corporis voluptates sit</h4>
                            <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
                        </div>
                        <div class="col-md-6 mt-4 mt-md-0">
                            <i class="bx bx-cube-alt"></i>
                            <h4>Ullamco laboris nisi</h4>
                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>



    <section id="services" class="services section-bg">
        <div class="container">

            <div class="section-title">
                <h2>Services</h2>
                <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem</p>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="icon-box">
                        <i class="icofont-checked"></i>
                        <h4><a href="#">Pemeriksaan Kehamilan</a></h4>
                        <p>Konsultasi dan Ultrasonografi (USG), terdiri dari Trimester pertama, Trimester kedua, Trimester ketiga.</p>
                    </div>
                </div>
                <div class="col-md-6 mt-4 mt-lg-0">
                    <div class="icon-box">
                        <i class="icofont-plus-square"></i>
                        <h4><a href="#">Persalinan</a></h4>
                        <p>Persalinan yang tersedia di bidan ini melahirkan Normal</p>
                    </div>
                </div>
                <div class="col-md-6 mt-4">
                    <div class="icon-box">
                        <i class="icofont-injection-syringe"></i>
                        <h4><a href="#">Imunisasi</a></h4>
                        <p>Proses untuk membuat seseorang imun atau kebal terhadap suatu penyakit. Imunisasi, Hepatitis, Polio, campak, Dpt Combo, Tetanus Toxoid.</p>
                    </div>
                </div>
                <div class="col-md-6 mt-4">
                    <div class="icon-box">
                        <i class="icofont-check-circled"></i>
                        <h4><a href="#">Cek Darah</a></h4>
                        <p>Cek darah umumnya dilakukan untuk mendeteksi penyakit, mengetahui fungsi organ, mendeteksi keberadaan racun dan zat berbahaya, dan memeriksa kondisi kesehatan secara menyeluruh. Asam Urat, Kolestrol, Gula, dan Golongan darah.</p>
                    </div>
                </div>
                <div class="col-md-6 mt-4">
                    <div class="icon-box">
                        <i class="icofont-baby"></i>
                        <h4><a href="#">Tindik bayi</a></h4>
                        <p>Selain alasan kecantikan dan membedakan gender bayi dengan mudah, ternyata menindik telinga anak saat masih bayi membuat risiko terjadinya keloid (jaringan parut yang menonjol) pada telinga anak lebih rendah.</p>
                    </div>
                </div>
                <div class="col-md-6 mt-4">
                    <div class="icon-box">
                        <i class="icofont-pills"></i>
                        <h4><a href="#">Keluarga Berencana</a></h4>
                        <p>Program kehamilan yang direncanakan dengan matang akan memberikan dampak baik bagi kesehatan ibu dan bayi. Selain itu, program KB juga memberikan pengarahan mengenai langkah-langkah untuk menjaga kesehatan ibu dan bayinya, baik sebelum maupun setelah melahirkan. Implan, Suntik, Pil dan IUD</p>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- End Services Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
        <div class="container">

            <div class="section-title">
                <h2>Portfolio</h2>
                <p>Sit sint consectetur velit quisquam cupiditate impedit suscipit</p>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">All</li>
                        <li data-filter=".filter-app">View</li>
                        <li data-filter=".filter-card">Room</li>
                        <li data-filter=".filter-web">Pantry</li>
                    </ul>
                </div>
            </div>

            <div class="row portfolio-container">

                <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
                    <div class="portfolio-wrap">
                        <figure>
                            <img src="<?= base_url() ?>assets/landing/assets/img/portfolio/portfolio-11.jpg" class="img-fluid" alt="">
                            <a href="assets/img/portfolio/portfolio-11.jpg" data-gall="portfolioGallery" class="link-preview venobox" title="Preview"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bx bx-link"></i></a>
                        </figure>

                        <div class="portfolio-info">
                            <h4><a href="portfolio-details.html">View 1</a></h4>
                            <p>View</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.1s">
                    <div class="portfolio-wrap">
                        <figure>
                            <img src="<?= base_url() ?>assets/landing/assets/img/portfolio/portfolio-77.jpg" class="img-fluid" alt="">
                            <a href="assets/img/portfolio/portfolio-77.jpg" class="link-preview venobox" data-gall="portfolioGallery" title="Preview"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bx bx-link"></i></a>
                        </figure>

                        <div class="portfolio-info">
                            <h4><a href="portfolio-details.html">Pantry 3</a></h4>
                            <p>Pantry</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
                    <div class="portfolio-wrap">
                        <figure>
                            <img src="<?= base_url() ?>assets/landing/assets/img/portfolio/portfolio-22.jpg" class="img-fluid" alt="">
                            <a href="assets/img/portfolio/portfolio-22.jpg" class="link-preview venobox" data-gall="portfolioGallery" title="Preview"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bx bx-link"></i></a>
                        </figure>

                        <div class="portfolio-info">
                            <h4><a href="portfolio-details.html">View 2</a></h4>
                            <p>View</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp">
                    <div class="portfolio-wrap">
                        <figure>
                            <img src="<?= base_url() ?>assets/landing/assets/img/portfolio/portfolio-44.jpg" class="img-fluid" alt="">
                            <a href="assets/img/portfolio/portfolio-44.jpg" class="link-preview venobox" data-gall="portfolioGallery" title="Preview"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bx bx-link"></i></a>
                        </figure>

                        <div class="portfolio-info">
                            <h4><a href="portfolio-details.html">Room 1</a></h4>
                            <p>Room</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.1s">
                    <div class="portfolio-wrap">
                        <figure>
                            <img src="<?= base_url() ?>assets/landing/assets/img/portfolio/portfolio-88.jpg" class="img-fluid" alt="">
                            <a href="assets/img/portfolio/portfolio-88.jpg" class="link-preview venobox" data-gall="portfolioGallery" title="Preview"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bx bx-link"></i></a>
                        </figure>

                        <div class="portfolio-info">
                            <h4><a href="portfolio-details.html">Pantry 2</a></h4>
                            <p>Pantry</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
                    <div class="portfolio-wrap">
                        <figure>
                            <img src="<?= base_url() ?>assets/landing/assets/img/portfolio/portfolio-33.jpg" class="img-fluid" alt="">
                            <a href="assets/img/portfolio/portfolio-33.jpg" class="link-preview venobox" data-gall="portfolioGallery" title="Preview"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bx bx-link"></i></a>
                        </figure>

                        <div class="portfolio-info">
                            <h4><a href="portfolio-details.html">View 3</a></h4>
                            <p>View</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp">
                    <div class="portfolio-wrap">
                        <figure>
                            <img src="<?= base_url() ?>assets/landing/assets/img/portfolio/portfolio-55.jpg" class="img-fluid" alt="">
                            <a href="assets/img/portfolio/portfolio-55.jpg" class="link-preview venobox" data-gall="portfolioGallery" title="Preview"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bx bx-link"></i></a>
                        </figure>

                        <div class="portfolio-info">
                            <h4><a href="portfolio-details.html">Room 2</a></h4>
                            <p>Room</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp" data-wow-delay="0.1s">
                    <div class="portfolio-wrap">
                        <figure>
                            <img src="<?= base_url() ?>assets/landing/assets/img/portfolio/portfolio-66.jpg" class="img-fluid" alt="">
                            <a href="assets/img/portfolio/portfolio-66.jpg" class="link-preview venobox" data-gall="portfolioGallery" title="Preview"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bx bx-link"></i></a>
                        </figure>

                        <div class="portfolio-info">
                            <h4><a href="portfolio-details.html">Room 3</a></h4>
                            <p>Room</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.2s">
                    <div class="portfolio-wrap">
                        <figure>
                            <img src="<?= base_url() ?>assets/landing/assets/img/portfolio/portfolio-99.jpg" class="img-fluid" alt="">
                            <a href="assets/img/portfolio/portfolio-99.jpg" class="link-preview venobox" data-gall="portfolioGallery" title="Preview"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bx bx-link"></i></a>
                        </figure>

                        <div class="portfolio-info">
                            <h4><a href="portfolio-details.html">Pantry 1</a></h4>
                            <p>Pantry</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- End Portfolio Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
        <div class="container">

            <div class="section-title">
                <h2>Testimonials</h2>
                <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem</p>
            </div>

            <div class="owl-carousel testimonials-carousel">

                <div class="testimonial-item">
                    <p>
                        <i class="bx bxs-quote-alt-left quote-icon-left"></i> Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus
                        at semper.
                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                    <img src="<?= base_url() ?>assets/landing/assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                    <h3>Saul Goodman</h3>
                    <h4>Ceo &amp; Founder</h4>
                </div>

                <div class="testimonial-item">
                    <p>
                        <i class="bx bxs-quote-alt-left quote-icon-left"></i> Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam
                        anim culpa.
                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                    <img src="<?= base_url() ?>assets/landing/assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                    <h3>Sara Wilsson</h3>
                    <h4>Designer</h4>
                </div>

                <div class="testimonial-item">
                    <p>
                        <i class="bx bxs-quote-alt-left quote-icon-left"></i> Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                    <img src="<?= base_url() ?>assets/landing/assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                    <h3>Jena Karlis</h3>
                    <h4>Store Owner</h4>
                </div>

                <div class="testimonial-item">
                    <p>
                        <i class="bx bxs-quote-alt-left quote-icon-left"></i> Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore
                        labore illum veniam.
                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                    <img src="<?= base_url() ?>assets/landing/assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                    <h3>Matt Brandon</h3>
                    <h4>Freelancer</h4>
                </div>

                <div class="testimonial-item">
                    <p>
                        <i class="bx bxs-quote-alt-left quote-icon-left"></i> Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam
                        culpa fore nisi cillum quid.
                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                    <img src="<?= base_url() ?>assets/landing/assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                    <h3>John Larson</h3>
                    <h4>Entrepreneur</h4>
                </div>

            </div>

        </div>
    </section>
    <!-- End Testimonials Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
        <div class="container">

            <div class="section-title">
                <h2>Team</h2>
                <p>Sit sint consectetur velit quos quisquam cupiditate nemo qui</p>
            </div>

            <div class="row">
                <?php foreach ($bidan2 as $row) : ?>
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="member">
                            <img src="<?= base_url() ?>assets/img/<?= $row['foto'] ?>" alt="">
                            <h4><?= $row['nama_bidan'] ?></h4>
                            <span><?= $row['posisi_bidan'] ?></span>
                            <div class="social">
                                <a href=""><i class="icofont-edit"></i>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

        </div>
    </section>
    <!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
        <div class="container">

            <div class="section-title">
                <h2>Contact</h2>
                <p>Magnam dolores commodi suscipit eius consequatur ex aliquid fuga</p>
            </div>

            <div class="row mt-5 justify-content-center">

                <div class="col-lg-10">

                    <div class="info-wrap">
                        <div class="row">
                            <div class="col-lg-4 info">
                                <i class="icofont-google-map"></i>
                                <h4>Location:</h4>
                                <p>JL. Kavling Keuangan Raya No.65, Kedaung, Pamulang<br>Tangerang Selatan, Banten 15415</p>
                            </div>

                            <div class="col-lg-4 info mt-4 mt-lg-0">
                                <i class="icofont-envelope"></i>
                                <h4>Email:</h4>
                                <p>pmbnurlis@gmail.com</p>
                            </div>

                            <div class="col-lg-4 info mt-4 mt-lg-0">
                                <i class="icofont-phone"></i>
                                <h4>Call:</h4>
                                <p>(021)32121256<br>0896-7123-6905(Bidan Nurlis) <br>0896-9114-9284(Bidan Dini) <br>0878-8885-8207(Bidan Lira)</p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

    </section>
    <!-- End Contact Section -->
</main>

<!-- End #main -->