@extends('index')

@section('content')
    <section id="blog" class="recent-posts section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <p>Artikel</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row gy-5">
                @forelse ($artikel as $blog)
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
                    </div><!-- End post item -->
                @empty
                    <div class="col">
                        <p>Tidak ada artikel yang tersedia saat ini.</p>
                    </div>
                @endforelse

            </div>

        </div>

    </section>
@endsection
