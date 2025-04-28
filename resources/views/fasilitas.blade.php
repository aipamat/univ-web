@extends('layouts.app')
@section('title', 'International Women University | Fasilitas')
@section('content')
    <section
        class="page-title-separate-breadcrumbs cover-background border-top border-4 border-color-base-color top-space-margin"
        style="background-image: url('{{Storage::url($fasilitasUtama->banner_utama)}}')">
        <div class="opacity-full bg-gradient-dark-transparent"></div>
        <div class="container position-relative">
            <div class="row align-items-start align-items-lg-end justify-content-end flex-column flex-lg-row extra-small-screen"
                data-anime='{ "el": "childs", "translateY": [15, 0], "opacity": [0,1], "duration": 400, "delay": 0, "staggervalue": 200, "easing": "easeOutQuad" }'>
                <div class="col-xxl-7 col-lg-6 col-md-10 position-relative page-title-large md-mb-10px xs-mb-5px">
                    <h1 class="text-white alt-font fw-500 ls-minus-2px mb-0">Fasilitas</h1>
                </div>
                <div class="col-xxl-5 col-lg-6 col-md-10 last-paragraph-no-margin">
                </div>
            </div>
        </div>
    </section>
    <!-- start section -->
    <!-- start section -->
    <section class="bg-very-light-gray overlap-height position-relative background-position-center background-repeat"
        style="background-image: url('images/vertical-center-line-bg-dark.svg')">
        <div class="container overlap-gap-section">
            <!-- Judul Bagian -->
            <div class="row justify-content-center mb-5 xs-mb-7">
                <div class="col-md-8 text-center"
                    data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <h2 class="alt-font mb-5px text-dark-gray ls-minus-2px">IWU CAMPUS TOUR</h2>
                    <p class="mb-0">Jelajahi kampus dengan fasilitas unggulan</p>
                </div>
            </div>

            <!-- Konten 5 Kolom -->
            <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 justify-content-center text-center"
                data-anime='{ "el": "childs", "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                @foreach($kampuses as $kampus)
                    <div class="col d-flex align-items-stretch mb-4">
                        <a href="{{ route('fasilitas.detail', $kampus->id) }}" target="_blank" class="card-link">
                            <div class="card border-0 shadow h-100">
                                <img src="{{ Storage::url($kampus->gambar_kampus) }}" class="card-img-top" alt="{{ $kampus->nama_kampus }}">
                                <div class="card-body">
                                    <h5 class="card-title alt-font text-dark-gray">{{ $kampus->nama_kampus }}</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- end section -->
@endsection