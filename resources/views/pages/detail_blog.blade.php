@extends('index')

@section('content')
    <main class="main">


        <div class="container">
            <div class="row">

                <div class="col-lg-12"><br><br><br>

                    <section id="blog-details" class="blog-details section">
                        <div class="container">

                            <article class="article">

                                <center>
                                    <div class="post-img mx-auto align-items-center">
                                        <img src="{{ Storage::url($artikel->gambar) }}" alt="" class="img-fluid">
                                    </div>
                                </center>
                                <h2 class="title">{{ $artikel->judul }}</h2>

                                <div class="meta-top">
                                    <ul>
                                        <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a
                                                href="">{{ $artikel->created_at->format('M d, Y') }}</a></li>
                                    </ul>
                                </div>

                                <div class="content">
                                    <p>
                                        {!! $artikel->deskripsi !!}
                                    </p>
                                </div>

                            </article>
                        </div>

                </div>

                <div class="col-lg-12">

                    <div class="widgets-container">
                        <div class="tags-widget widget-item">
                            <h3 class="widget-title">Tags</h3>
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
                        </div>

                    </div>

                </div>

            </div>
        </div>

    </main>
@endsection
