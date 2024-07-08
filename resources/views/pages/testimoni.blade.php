@extends('index')

@section('content')

<br><br><br><br>

<div class="container section-title" data-aos="fade-up">
    <p>Testimoni</p>
</div>

<section id="blog-author" class="blog-author section">
    @foreach ($testimoni as $testi)
    <div class="container">
        <div class="author-container d-flex align-items-center">
            <img src="{{ Storage::url($testi->foto) }}" class="rounded-circle flex-shrink-0" alt="">
            <div>
            <h5>{{ $testi->nama }}<p>{{ $testi->posisi }}</p></h5>
            <p>
                {{ $testi->kritik_saran }}
            </p>
            </div>
        </div>
        </div>  <br>
    @endforeach




</section>

@endsection
