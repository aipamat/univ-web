@extends('layouts.app')
@section('title', 'International Women University | IWU')

@section('content')
<!-- start banner slider -->
    <section
    class="p-0 top-space-margin full-screen md-h-600px sm-h-500px border-top border-4 border-color-base-color position-relative tw-lazy"
    data-parallax-background-ratio="0.3"
    style="background-image: url('{{ Storage::url($beranda->banner) }}')"
    loading="lazy">
        <div class="opacity-light bg-black"></div>
        <div class="container h-100 position-relative">
            <div class="row align-items-center h-100 justify-content-center">
                <div class="col-md-10 position-relative text-white d-flex flex-column justify-content-center text-center h-100"
                    data-anime='{ "el": "childs", "translateY": [-15, 0], "perspective": [1200,1200], "scale": [1.1, 1], "rotateX": [50, 0], "opacity": [0,1], "duration": 600, "delay": 100, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <h5 class="alt-font fw-400 mb-20px text-shadow-double-large">Masa Depan Cemerlang Dimulai Dari Sini
                    </h5>
                    <div
                        class="fs-225 lg-fs-200 md-fs-170 sm-fs-150 xs-fs-110 fw-700 mb-20px ls-minus-8px md-ls-minus-4px xs-ls-minus-2px text-shadow-double-large">
                        IWU</div>
                    <h5 class="alt-font fw-400 mb-20px text-shadow-double-large">International Women University
                    </h5>
                    <div class="mb-30px">
                        <a href="https://pmb.iwu.ac.id/" target="_blank"
                            class="btn btn-extra-large btn-switch-text btn-white fw-700 btn-round-edge btn-box-shadow">
                            <span>
                                <span class="btn-double-text" data-text="Website PMB">Daftar
                                    Sekarang</span>
                                <span><i class="fa-solid fa-arrow-right fs-14"></i></span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end banner slider -->

    <!-- start section -->
    <section class="background-position-center background-repeat"
        style="background-image: url('images/vertical-center-line-bg.svg')">
        <div class="container">
            <div class="row align-items-center mb-12 md-mb-17 xs-mb-25">
                <div class="col-lg-5 md-mb-50px"
                    data-anime='{ "el": "childs", "opacity": [0, 1], "rotateY": [-90, 0], "rotateZ": [-10, 0], "translateY": [80, 0], "translateZ": [50, 0], "staggervalue": 200, "duration": 800, "delay": 200, "easing": "easeOutCirc" }'>
                    <span class="mb-10px text-base-color fw-500 d-block">Tentang Kampus</span>
                    <h2 class="alt-font text-dark-gray ls-minus-2px">Visi, Misi, dan Kolaborasi Kampus</h2>
                    <p class="w-80 xl-w-100 mb-35px xs-mb-10px">Kami berkomitmen untuk mencetak pemimpin masa depan
                        dengan pendidikan berkualitas tinggi. Ditenagai oleh pimpinan yang berdedikasi, struktur
                        organisasi yang kokoh, dan kerja sama dengan berbagai institusi global, kampus kami siap
                        memberikan pengalaman belajar terbaik.</p>

                    <div class="d-inline-block w-100">
                        <a href="tentang-kampus"
                            class="btn btn-extra-large btn-switch-text btn-dark-gray btn-box-shadow btn-round-edge d-inline-block align-middle me-30px xs-me-10px xs-mt-20px">
                            <span>
                                <span class="btn-double-text" data-text="Tentang Kampus">Lihat Selengkapnya</span>
                            </span>
                        </a>
                        <div class="fs-20 fw-600 d-inline-block align-middle text-dark-gray xs-mt-20px"><a
                                href="tel:0226019845"><i
                                    class="bi bi-telephone-outbound text-medium-gray icon-small me-10px"></i>(022)
                                6019845</a></div>
                    </div>
                </div>
                <div class="col-lg-6 position-relative offset-lg-1">
                    <span
                        class="fs-90 position-absolute left-60px md-left-100px sm-left-70px xs-left-10px top-90px xs-top-50px text-dark-gray fw-700 z-index-1"
                        data-bottom-top="transform: translateY(50px) scale(1,1)"
                        data-top-bottom="transform: translateY(-50px) scale(1,1)"
                        data-anime='{ "opacity": [0,1], "duration": 600, "delay": 1500, "staggervalue": 300, "easing": "easeOutQuad" }'><span
                            class="fs-15 fw-600 d-table lh-16 text-uppercase text-medium-gray">Berdiri
                            Sejak</span>2008</span>
                    <div class="w-75 overflow-hidden position-relative xs-w-80 border-radius-4px float-end"
                        data-anime='{ "effect": "slide", "color": "#d418a4", "direction":"rl", "easing": "easeOutQuad", "duration": 600, "delay":400}'>
                        <img class="w-100 tw-lazy" src="{{ Storage::url($beranda->gambar_dekorasi_besar) }}" loading="lazy" alt="">
                    </div>
                    <div class="position-absolute left-minus-70px md-left-15px bottom-minus-50px w-55 overflow-hidden"
                        data-bottom-top="transform: translateY(50px)" data-top-bottom="transform: translateY(-50px)"
                        data-anime='{ "effect": "slide", "color": "#ffffff", "direction":"lr", "easing": "easeOutQuad", "duration": 600, "delay":500}'>
                        <img class="w-100 border-radius-4px tw-lazy" src="{{ Storage::url($beranda->gambar_dekorasi_kecil) }}" loading="lazy" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row position-relative">
                <div class="col swiper swiper-width-auto feather-shadow text-center"
                    data-slider-options='{ "slidesPerView": "auto", "spaceBetween":0, "centeredSlides": true, "speed": 10000, "loop": true, "pagination": { "el": ".slider-four-slide-pagination-2", "clickable": false }, "allowTouchMove": false, "autoplay": { "delay":1, "disableOnInteraction": false }, "navigation": { "nextEl": ".slider-four-slide-next-2", "prevEl": ".slider-four-slide-prev-2" }, "keyboard": { "enabled": true, "onlyInViewport": true }, "effect": "slide" }'>
                    <div class="swiper-wrapper marquee-slide">

                        <!-- start client item -->
                        @foreach($teksIklans as $teksIklan)
                            <div class="swiper-slide">
                                <div class="fs-28 sm-fs-22 alt-font ls-minus-05px text-dark-gray">
                                    <span class="w-10px h-10px border border-radius-100 border-color-base-color d-inline-block ms-50px me-50px md-ms-30px md-me-30px"></span>
                                    {{ $teksIklan->kata_iklan }}
                                </div>
                            </div>
                        @endforeach
                        <!-- end client item -->

                    </div>
                </div>
            </div>
        </div>

    </section>  
    <!-- end section -->
    <!-- start section -->
    <section class="bg-very-light-gray overlap-height position-relative background-position-center background-repeat"
        style="background-image: url('images/vertical-center-line-bg-dark.svg')">
        <div class="container overlap-gap-section">
            <div class="row justify-content-center mb-5 xs-mb-7">
                <div class="col-md-8 text-center"
                    data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <h2 class="alt-font mb-5px text-dark-gray ls-minus-2px">Mulai kesuksesanmu</h2>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 justify-content-center"
                data-anime='{ "el": "childs", "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <!-- start rotate box item -->
                 @foreach($fakultasItems as $fakultasItems)
                 <a href="/fakultas/{{$fakultasItems->id}}">
                     <div class="col text-center rotate-box-style-01 lg-mb-45px"
                         data-bottom-top="transform: translateY(80px)" data-top-bottom="transform: translateY(-80px)">
                         <div class="rm-rotate-box text-center">
                             <div class="flipper to-left">
                                 <div class="thumb-wrap">
                                     <div class="front overflow-hidden h-250px md-h-250px border-radius-4px"
                                         style="background-image:url('{{ Storage::url($fakultasItems->display) }}')">
                                     </div>
                                     <div class="back border-radius-4px overflow-hidden">
                                         <div class="box-overlay bg-base-color"></div>
                                         <div class="content-wrap p-40px xs-p-30px last-paragraph-no-margin">
                                         <i class="fas fa-graduation-cap align-middle icon-extra-large text-white mb-20px"></i>
                                             <p class="text-white opacity-7 lh-30 sm-w-70 xs-w-100 mx-auto">{{ $fakultasItems->deskripsi }}</p>
                                         </div>
                                     </div>
                                 </div>
                                 <span class="fs-20 d-inline-block mt-30px fw-600 text-dark-gray">{{ $fakultasItems->nama_fakultas }}</span>
                             </div>
                         </div>
                     </div>
                 </a>
                @endforeach
                <!-- end rotate box item -->
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section class="background-position-center background-repeat"
        style="background-image: url('images/vertical-center-line-bg.svg')">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 text-center"
                    data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <h2 class="alt-font mb-5px text-dark-gray ls-minus-2px">Kerja Sama</h2>
                    <span class="d-inline-block">Membangun hubungan yang kuat untuk kemajuan bersama.</span>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-4 row-cols-sm-2 text-center justify-content-center clients-style-05 mb-4 sm-mb-7"
                data-anime='{ "el": "childs", "opacity": [0,1], "duration": 500, "delay": 0, "staggervalue": 200, "easing": "easeOutQuad" }'>
                <!-- start client item -->
                 @foreach($kerjasamaItems as $kerjasamaItems)
                <div class="col mt-5 sm-mb-30px">
                    <div class="client-box">
                        <a href="#"><img src="{{ Storage::url($kerjasamaItems->gambar) }}" class="h-200px" alt="" /></a>
                    </div>
                    <span class="fs-18 d-inline-block mt-30px fw-600 text-dark-gray">{{ $kerjasamaItems->nama }}</span>
                </div>
                @endforeach
                <!-- end client item -->
            </div>
        </div>
    </section>
    <!-- end section -->

    <section class="bg-very-light-gray background-position-center background-repeat"
    style="background-image: url('images/vertical-center-line-bg.svg')">
    <div class="container" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
        <div class="row justify-content-center">
            <div class="col-md-10 info-box">
                <h2 class="mb-4">Kata Sambutan</h2>
                
                @if ($pimpinanSpeech)
                    <!-- Gambar di atas -->
                    <div class="info-image mb-3 text-center">
                        <img src="{{ Storage::url($pimpinanSpeech->foto) }}" alt="Pimpinan" class="img-fluid" style="max-width: 150px;">
                    </div>
                    
                    <!-- Nama Pimpinan -->
                    <div class="info-content">
                        <p class="fw-bold">{{ $pimpinanSpeech->nama }}</p>
                    </div>

                    <!-- Kata Sambutan -->
                    <div>
                        <p>{!! $pimpinanSpeech->kata_sambutan !!}</p>
                    </div>
                @else
                    <p>No speech available.</p>
                @endif
            </div>
        </div>
    </div>
</section>




    <!-- start section -->
    <section class="background-position-center background-repeat overlap-height position-relative"
        style="background-image: url('images/vertical-center-line-bg.svg')">
        <div class="container"
            data-anime='{ "el": "childs", "perspective": [800, 1200], "scale": [1.1, 1], "rotateX": [50, 0], "opacity": [0,1], "duration": 900, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
            <!-- start instagram -->
            <div class="row justify-content-center mb-5 xs-mb-7">
                <div class="col-md-8 text-center"
                    data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <h2 class="alt-font mb-5px text-dark-gray ls-minus-2px">Berita IWU</h2>
                </div>
            </div>
            <div class="row row-cols-3 row-cols-lg-5 row-cols-sm-3 align-items-center justify-content-center mb-1 md-mb-50px xs-mb-40px instagram-follow-api position-relative">
                @foreach($sortedInstagramPosts as $post)
                    <div class="col instafeed-grid md-mb-30px xs-mb-15px mb-3">
                        <figure class="border-radius-0px">
                            <a href="{{ $post['permalink'] }}" target="_blank">
                                <img src="{{ $post['media_type'] === 'VIDEO' ? $post['thumbnail_url'] : $post['media_url'] }}" 
                                    class="insta-image" 
                                    alt="{{ $post['caption'] ?? 'Instagram Image' }}">
                                <span class="insta-icon"><i class="fa-brands fa-instagram"></i></span>
                            </a>
                        </figure>
                    </div>
                @endforeach
            </div>

            <!-- Tombol Berita Selengkapnya -->
            <div class="text-center">
                <a href="https://www.instagram.com/iwuidn/" target="_blank" class="btn btn-extra-large btn-switch-text btn-dark-gray btn-box-shadow btn-round-edge d-inline-block align-middle me-30px xs-me-10px xs-mt-20px">
                    <span>
                        <span class="btn-double-text" data-text="Instagram IWU">Lihat Berita Lainnya</span>
                    </span>
                </a>
            </div>
            <!-- end instagram -->
        </div>
    </section>
    <!-- end section -->
     
    <!-- start footer -->
    <section
        class="bg-very-light-gray mt-5 background-position-center background-repeat overlap-height position-relative"
        style="background-image: url('images/vertical-center-line-bg-dark.svg')">
        <div class="container"
            data-anime='{ "el": "childs", "perspective": [800, 1200], "scale": [1.1, 1], "rotateX": [50, 0], "opacity": [0,1], "duration": 900, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
            <div class="row overlap-section">
                <div class="col-12 text-center">
                    <img class="rounded" src="{{ asset('images/IWU/logo-171x171.png') }}" alt="" />
                </div>
            </div>
            <!-- start subscribe item -->
            <div class="row justify-content-center mb-4">
                <div class="col-xl-6 col-lg-8 col-md-10 text-center">
                    <h3 class="text-dark-gray alt-font ls-minus-2px fw-400 mb-40px xs-mb-30px w-80 xs-w-100 mx-auto">
                        Daftar Sekarang Untuk Bergabung Dengan Mahasiswa Lainnya!</h3>
                    <div class="d-inline-block w-100 mb-20px">
                        <a href="https://pmb.iwu.ac.id/"
                            class="btn btn-extra-large btn-switch-text btn-dark-gray btn-box-shadow btn-round-edge d-inline-block align-middle">
                            <span>
                                <span class="btn-double-text" data-text="Daftar Sekarang">Daftar Sekarang</span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- end subscribe item -->
        </div>
    </section>
</body>
@endsection