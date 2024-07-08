@extends('index')

@section('content')

<section id="blog" class="recent-posts section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <p>Artikel</p>
    </div><!-- End Section Title -->

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

                            <!-- <div class="meta d-flex align-items-center">
                    <div class="d-flex align-items-center">
                      <i class="bi bi-person"></i> <span class="ps-2">Mario Douglas</span>
                    </div>
                    <span class="px-3 text-black-50">/</span>
                    <div class="d-flex align-items-center">
                      <i class="bi bi-folder2"></i> <span class="ps-2">Sports</span>
                    </div>
                  </div> -->

                            <hr>

                            <a href="/detail_blog-{id}" class="readmore stretched-link"><span>Baca
                                    Selengkapnya</span><i class="bi bi-arrow-right"></i></a>

                        </div>

                    </div>
                </div><!-- End post item -->
            @endforeach



            <!-- <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
              <div class="post-item position-relative h-100">

                <div class="post-img position-relative overflow-hidden">
                  <img src="assets/img/blog/blog-3.jpg" class="img-fluid" alt="">
                  <span class="post-date">September 05</span>
                </div>

                <div class="post-content d-flex flex-column">

                  <h3 class="post-title">Quia assumenda est et veritati tirana ploder</h3>

                  <div class="meta d-flex align-items-center">
                    <div class="d-flex align-items-center">
                      <i class="bi bi-person"></i> <span class="ps-2">Lisa Hunter</span>
                    </div>
                    <span class="px-3 text-black-50">/</span>
                    <div class="d-flex align-items-center">
                      <i class="bi bi-folder2"></i> <span class="ps-2">Economics</span>
                    </div>
                  </div>

                  <hr>

                  <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>

                </div>

              </div>
            </div>End post item -->

        </div>

    </div>

</section>

@endsection
