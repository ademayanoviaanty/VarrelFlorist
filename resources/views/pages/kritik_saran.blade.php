@extends('index')

@section('content')

<section id="pemesanan" class="contact section">
    <br><br>
    <div class="container section-title" data-aos="fade-up">
        <p>Kritik & Saran</p>
    </div>

    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="row gy-4">

        <div class="col-lg-6">
            <form action="/kritik_saran" method="POST" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
                @csrf
              <div class="row gy-4">

                <div class="col-md-12">
                  <p>Nama Lengkap</p>
                  <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap Anda" required="">
                </div>

                <div class="col-md-12">
                    <p>Email</p>
                    <input type="text" name="email" class="form-control" placeholder="Email Anda" required="">
                  </div>

                <div class="col-12">
                    <p>Kritik & Saran</p>
                  <textarea class="form-control" name="kritiksaran" rows="6" placeholder="Kritik & Saran" required=""></textarea>
                </div>

                <div class="col-12 text-center">
                  <div class="sent-message">Your message has been sent. Thank you!</div>

                  <button type="submit">Kirim Kritik & Saran</button>
                </div>

              </div>
            </form>
          </div>

        <div class="col-lg-6">

          <div class="row gy-4">
            <div class="col-md-6">
              <div class="info-item" data-aos="fade" data-aos-delay="200">
                <i class="bi bi-geo-alt"></i>
                <h3>Alamat</h3>
                <p>Jl. Ciwastra No.225, Margasari, Kec. Buahbatu, Kota Bandung</p>
                <p>Jawa Barat 40286</p>
              </div>
            </div><!-- End Info Item -->

            <div class="col-md-6">
              <div class="info-item" data-aos="fade" data-aos-delay="500">
                <i class="bi bi-clock"></i>
                <h3>Jam Operasional</h3>
                <p>Senin - Minggu</p>
                <p>08.00 - 22.00</p>
              </div>
            </div><!-- End Info Item -->

            <div class="col-md-6">
              <div class="info-item" data-aos="fade" data-aos-delay="400">
                <i class="bi bi-envelope"></i>
                <h3>Email</h3>
                <p>cs@karanganbungabandung.co.id</p>
              </div>
            </div><!-- End Info Item -->

            <div class="col-md-6">
              <div class="info-item" data-aos="fade" data-aos-delay="300">
                <i class="bi bi-telephone"></i>
                <h3>Telepon</h3>
                <p>089683389765</p>
              </div>
            </div><!-- End Info Item -->

          </div>

        </div>

      </div>

    </div>

</section>

@endsection
