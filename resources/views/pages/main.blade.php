@extends('index')

@section('content')
    <!-- Hero Section -->
    <section id="hero" class="hero section">

        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
                    <h1 data-aos="fade-up">{{ $judul->content }}</h1>
                </div><br><br><br>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out">
                </div>
            </div>
        </div>

    </section>

    <section id="about" class="about section">

        <div class="container section-title" data-aos="fade-up">
            <p>Selamat Datang di Varrel Florist</p>
        </div>

        <div class="container" data-aos="fade-up">
            <div class="row gx-0">

                <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="content">
                        <p>
                            {{ $tentang->content }}
                        <p>
                            Untuk melakukan pemesanan silahkan langsung menghubungi kami ke nomor :
                        </p>
                        <h3><a href="tel:089649727738">089649727738 (Telp)</a></h3>
                        <h3><a href="tel:089683389765">089683389765 (WhatsApp)</a></h3>
                    </div>
                </div>

                <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                    <img src="assets/img/intro.jpg" class="img-fluid" alt="">
                </div>

            </div>
        </div>

    </section>

    <section id="stats" class="stats section">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4">

                <div class="col-lg-3 col-md-6">
                    <div class="stats-item d-flex align-items-center w-100 h-100">
                        <i class="bi bi-check-lg color-blue flex-shrink-0"></i>
                        <div>
                            <p><b>Pesan Antar</b></p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="stats-item d-flex align-items-center w-100 h-100">
                        <i class="bi bi-check-lg color-blue flex-shrink-0"></i>
                        <div>
                            <p><b>Belanja Di Toko</b></p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="stats-item d-flex align-items-center w-100 h-100">
                        <i class="bi bi-check-lg color-blue flex-shrink-0"></i>
                        <div>
                            <p><b>Ambil Di Toko</b></p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="stats-item d-flex align-items-center w-100 h-100">
                        <i class="bi bi-check-lg color-blue flex-shrink-0"></i>
                        <div>
                            <p><b>Pengiriman Di Hari Yang Sama</b></p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>

    <section id="koleksi" class="portfolio section">

        <div class="container section-title" data-aos="fade-up">
            <p>Koleksi Kami</p>
        </div>

        <div class="container">

            <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
                <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
                    <li data-filter="*" class="filter-active">Semua</li>
                    <li data-filter=".filter-handbouquet">Bunga Handbouquet</li>
                    <li data-filter=".filter-meja">Bunga Meja</li>
                    <li data-filter=".filter-standing">Standing Bunga</li>
                    <li data-filter=".filter-papan">Bunga Papan</li>
                    <li data-filter=".filter-pengantin">Buket Pengantin</li>
                    <li data-filter=".filter-artificial">Artificial</li>
                    <li data-filter=".filter-lainnya">Lain Lain</li>
                </ul>

                <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
                    @foreach ($koleksi as $item)
                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-{{ $item->kategori }}">
                            <div class="portfolio-content h-100">
                                <img src="{{ Storage::url($item->gambar) }}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>{{ $item->judul }}</h4>
                                    <a href="{{ Storage::url($item->gambar) }}" title="{{ $item->judul }}"
                                        data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i
                                            class="bi bi-zoom-in"></i></a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>

            </div>

        </div>

    </section>

    <section id="blog" class="recent-posts section">

        <div class="container section-title" data-aos="fade-up">
            <p>Artikel</p>
        </div>

        <div class="container">

            <div class="row gy-5">
                @foreach ($artikel as $blog)
                    <div class="col-xl-4 col-md-6">
                        <div class="post-item position-relative h-100" data-aos="fade-up" data-aos-delay="200">

                            <div class="post-img position-relative overflow-hidden">
                                <img src="{{ Storage::url($blog->gambar) }}" class="img-fluid" alt="">
                                <span class="post-date">{{ $blog->created_at->format('M d, Y') }}</span>
                            </div>

                            <div class="post-content d-flex flex-column">

                                <h3 class="post-title">{{ $blog->judul }}</h3>
                                <hr>

                                <a href="/detail_blog-{{ $blog->id }}" class="readmore stretched-link"><span>Baca
                                        Selengkapnya</span><i class="bi bi-arrow-right"></i></a>

                            </div>

                        </div>
                    </div>
                @endforeach

            </div>

        </div>

    </section>

    <section id="testimoni" class="testimonials section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <p>Testimoni<br></p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="swiper init-swiper">
                <script type="application/json" class="swiper-config">
          {
            "loop": true,
            "speed": 600,
            "autoplay": {
              "delay": 5000
            },
            "slidesPerView": "auto",
            "pagination": {
              "el": ".swiper-pagination",
              "type": "bullets",
              "clickable": true
            },
            "breakpoints": {
              "320": {
                "slidesPerView": 1,
                "spaceBetween": 40
              },
              "1200": {
                "slidesPerView": 3,
                "spaceBetween": 1
              }
            }
          }
        </script>
                <div class="swiper-wrapper">
                    @foreach ($testimoni as $testi)
                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>{{ $testi->kritik_saran }}</p>
                                <div class="profile mt-auto">
                                    <img src="{{ Storage::url($testi->foto) }}" class="testimonial-img" alt="">
                                    <h3>{{ $testi->nama }}</h3>
                                    <h4>{{ $testi->posisi }}</h4>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>

    </section>

    <section id="pemesanan" class="pricing section">

        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-12" data-aos="zoom-in" data-aos-delay="300">
                    <div class="pricing-tem">
                        <h3 style="color: #012970;">Tunggu Apa Lagi, Ayo Pesan Sekarang!</h3>
                        <a href="https://wa.wizard.id/0a6305" class="btn-buy">Klik Disini</a>
                    </div>
                </div>

            </div>

        </div>

    </section>

    <section id="contact" class="contact section">

        <div class="container section-title" data-aos="fade-up">
            <p>Kontak</p>
        </div>

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4">

                <div class="col-lg-6">

                    <div class="row gy-4">
                        <div class="col-md-6">
                            <div class="info-item" data-aos="fade" data-aos-delay="200">
                                <i class="bi bi-geo-alt"></i>
                                <h3>Alamat</h3>
                                <p>{{ $alamat->content }}</p>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="info-item" data-aos="fade" data-aos-delay="500">
                                <i class="bi bi-clock"></i>
                                <h3>Jam Operasional</h3>
                                <p>{{ $jamoperasional->content }}</p>
                                <p>08.00 - 22.00</p>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="info-item" data-aos="fade" data-aos-delay="400">
                                <i class="bi bi-envelope"></i>
                                <h3>Email</h3>
                                <p>{{ $email->content }}</p>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="info-item" data-aos="fade" data-aos-delay="300">
                                <i class="bi bi-telephone"></i>
                                <h3>Telepon</h3>
                                <p>{{ $telepon->content }}</p>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="col-lg-6">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.424889778384!2d107.65756937421038!3d-6.959101868132932!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e9e81f0873d9%3A0xcda8cd1439c0c08e!2sToko%20bunga%20%22Varrel%20Florist%22%20bandung!5e0!3m2!1sid!2sid!4v1720166417052!5m2!1sid!2sid"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

            </div>

        </div>

    </section>
@endsection
