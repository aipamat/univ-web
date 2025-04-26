@extends('layouts.app')
@section('title', 'International Women University | ' . $kampus->nama_kampus)
    <!-- start page title -->
@section('content')
<section
    class="page-title-separate-breadcrumbs cover-background border-top border-4 border-color-base-color top-space-margin"
    style="background-image: url('{{Storage::url($kampus->banner_utama)}}')">
    <div class="opacity-full bg-gradient-dark-transparent"></div>
    <div class="container position-relative">
        <div class="row align-items-start align-items-lg-end justify-content-end flex-column flex-lg-row extra-small-screen">
            <div class="col-xxl-7 col-lg-6 col-md-10 position-relative page-title-large md-mb-10px xs-mb-5px">
                <h1 class="text-white alt-font fw-500 ls-minus-2px mb-0">{{ $kampus->nama_kampus }}</h1>
            </div>
            <div class="col-xxl-5 col-lg-6 col-md-10 last-paragraph-no-margin">
                <p class="fs-20 text-white opacity-7 md-w-80 sm-w-100">
                </p>
            </div>
        </div>
    </div>
</section>
<!-- end page title -->

<!-- start section -->
<section class="background-position-center background-repeat position-relative pb-0 overflow-hidden" style="background-image: url('../images/vertical-center-line-bg-dark.svg')">
    <div class="container" data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
        <!-- Konten Foto Dekan dan Teks -->
        <div class="container my-5">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <img src="{{ Storage::url($kampus->gambar_kampus) }}" 
                        alt="Gambar Kampus" 
                        class="img-fluid w-100 mb-3">
                    <h4 class="text-center">{{ $kampus->nama_kampus ?? 'Belum ada data' }}</h4>
                    <p>{!! $kampus->deskripsi !!}</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- start section -->
<section class="bg-very-light-gray background-position-center background-repeat position-relative w-100 min-vh-100" style="background-image: url('../images/vertical-center-line-bg-dark.svg')">
    <div class="container-fluid p-0" >
        <div class="row justify-content-center mb-6 xs-mb-9" data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
            <div class="col-md-8 text-center">
                <span>Daftar Fasilitas</span>
                <h2 class="alt-font mb-5px text-dark-gray ls-minus-2px">{{ $kampus->nama_kampus }}</h2>
            </div>
        </div>

        <div class="row justify-content-center mb-5 xs-mb-8" data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
            @foreach($kampus->fasilitas as $fasilitas)
                <div class="col-12 col-md-4 mb-30px">
                    <div class="hover-box md-mb-30px">
                        <img class="w-50 mx-auto d-block" src="{{ Storage::url($fasilitas->gambar) }}" alt="Gambar Fasilitas">
                        <div class="p-30px last-paragraph-no-margin text-center">
                            <span class="d-inline-block fs-22 alt-font">{{ $fasilitas->nama }}</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
{{-- end section --}}
@endsection