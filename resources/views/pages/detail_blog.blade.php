@extends('index')

@section('content')

<main class="main">


    <div class="container">
      <div class="row">

        <div class="col-lg-12"><br><br><br>

          <!-- Blog Details Section -->
          <section id="blog-details" class="blog-details section">
            <div class="container">

              <article class="article">

                @foreach ($artikel as $blog)
                <center>
                <div class="post-img mx-auto align-items-center">
                  <img src="{{ Storage::url($blog->gambar) }}" alt="" class="img-fluid">
                </div>
              </center>
                <h2 class="title">{{ $blog->judul }}</h2>

                <div class="meta-top">
                  <ul>
                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="#">{{ $blog->created_at->format('M d, Y') }}</a></li>
                  </ul>
                </div><!-- End meta top -->

                <div class="content">
                  <p>
                    {!! $blog->deskripsi !!}
                  </p>
                </div><!-- End post content -->
                @endforeach

              </article>



            </div>

        </div>

        <div class="col-lg-12">

          <div class="widgets-container">
            <!-- Tags Widget -->
            <div class="tags-widget widget-item">



              <h3 class="widget-title">Tags</h3>
              {{-- <ul>
                @foreach ($artikel as $blog)
                <li><a href="#">{{ $blog->tag }}</a></li>
                @endforeach
              </ul> --}}
              <ul class="mt-3">
                <li><a href="#">buket bunga mawar</a></li>
                <li><a href="#">buket bunga kertas</a></li>
                <li><a href="#">buket bunga dari kain flanel</a></li>
                <li><a href="#">buket bunga artificial</a></li>
                <li><a href="#">buket bunga plastik bandung</a></li>
                <li><a href="#">buket bunga 50rb</a></li>
                <li><a href="#">buket bunga bandung</a></li>
                <li><a href="#">buket bunga asli</a></li>
                <li><a href="#">bunga papan</a></li>
                <li><a href="#">bunga meja</a></li>
              </ul>


            </div><!--/Tags Widget -->

          </div>

        </div>

      </div>
    </div>

  </main>

@endsection
