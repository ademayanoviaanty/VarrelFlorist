@extends('index')

@section('content')

    <section id="portfolio" class="portfolio section">

        <div class="container"><br><br>

          <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
            <div class="container section-title" data-aos="fade-up">
                <p>Koleksi Kami</p>
            </div>
            
            <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
              <li data-filter="*" class="filter-active">Semua</li>
              <li data-filter=".filter-handbouquet">Bunga Handbouquet</li>
              <li data-filter=".filter-meja">Bunga Meja</li>
              <li data-filter=".filter-standing">Standing Bunga</li>
              <li data-filter=".filter-papan">Bunga Papan</li>
              <li data-filter=".filter-pengantin">Buket Pengantin</li>
              <li data-filter=".filter-artificial">Artificial</li>
              <li data-filter=".filter-lainnya">Lain Lain</li>
            </ul><!-- End Portfolio Filters -->

            <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
            @foreach($koleksi as $item)
              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-{{ $item->kategori }}">
                <div class="portfolio-content h-100">
                  <img src="{{ Storage::url($item->gambar) }}" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>{{ $item->judul }}</h4>
                    <a href="{{ Storage::url($item->gambar) }}" title="{{ $item->judul }}" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  </div>
                </div>
              </div><!-- End Portfolio Item -->
              @endforeach

            </div><!-- End Portfolio Container -->

          </div>

        </div>


@endsection
