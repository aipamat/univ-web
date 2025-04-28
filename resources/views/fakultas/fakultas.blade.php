@extends('layouts.app')
@section('title', 'International Women University | Daftar Fakultas')

@section('content')
    <!-- start page title -->
    <section
        class="page-title-separate-breadcrumbs cover-background border-top border-4 border-color-base-color top-space-margin"
        style="background-image: url('{{Storage::url($fakultasUtamaItems->banner_utama)}}')">
        <div class="opacity-full bg-gradient-dark-transparent"></div>
        <div class="container position-relative">
            <div class="row align-items-start align-items-lg-end justify-content-end flex-column flex-lg-row extra-small-screen"
                data-anime='{ "el": "childs", "translateY": [15, 0], "opacity": [0,1], "duration": 400, "delay": 0, "staggervalue": 200, "easing": "easeOutQuad" }'>
                <div class="col-xxl-7 col-lg-6 col-md-10 position-relative page-title-large md-mb-15px xs-mb-5px">
                    <h1 class="text-white alt-font fw-500 ls-minus-2px mb-0">Daftar Fakultas</h1>
                </div>
                <div class="col-xxl-5 col-lg-6 col-md-10 last-paragraph-no-margin">
                </div>

            </div>
        </div>
    </section>
    <!-- end page title -->
    <!-- start section -->
    <section class="background-position-center background-repeat"
        style="background-image: url('images/vertical-center-line-bg.svg')">
        <div class="container">
            <div id="fakultas-fst" class="row g-0 justify-content-center border-radius-6px overflow-hidden mb-8" id="fp"
                data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <div class="col-lg-7 md-h-400px sm-h-300px text-center">
                    <div class="swiper h-100 swiper-pagination-style-3"
                        data-slider-options='{ "slidesPerView": 1, "spaceBetween": 10, "loop": true, "pagination": { "el": ".slider-four-slide-pagination", "clickable": true }, "autoplay": { "delay": 3000, "disableOnInteraction": false }, "navigation": { "nextEl": ".slider-one-slide-next-1", "prevEl": ".slider-one-slide-prev-1" }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "1400": { "slidesPerView": 1 }, "1200": { "slidesPerView": 1 }, "992": { "slidesPerView": 1 }, "768": { "slidesPerView": 1 } }, "effect": "slide" }'>
                        <div class="swiper-wrapper">
                            <!-- start carousal item -->
                            <div class="swiper-slide cover-background"
                                style="background-image: url('{{Storage::url($fakultasUtamaFST->display)}}')"></div>
                            <!-- end carousal item -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 bg-very-light-gray">
                    <div class="pt-13 pb-12 ps-15 pe-15 lg-p-8 last-paragraph-no-margin">
                        <a href="{{ route('fakultas.detail', ['id' => $fakultasUtamaFST->id]) }}" target="_blank">
                            <h4 class="alt-font text-dark-gray mb-20px ls-minus-1px d-inline-block">{{$fakultasUtamaFST->nama_fakultas}}
                            </h4>
                        </a>
                        <p class="fs-17">{{$fakultasUtamaFST->deskripsi}}
                        </p>
                    </div>
                    <div
                        class="ps-15 pe-15 pt-5 pb-5 lg-ps-8 lg-pe-8 border-top border-color-transparent-dark-very-light align-items-center d-flex justify-content-center">
                        <a href="{{ route('fakultas.detail', ['id' => $fakultasUtamaFST->id]) }}" target="_blank"
                            class="btn btn-medium btn-switch-text btn-base-color btn-box-shadow btn-round-edge d-inline-block align-middle xs-ms-auto">
                            <span>
                                <span class="btn-double-text" data-text="Lihat Selengkapnya">Lihat Selengkapnya</span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <div id="fakultas-fisb" class="row g-0 justify-content-center border-radius-6px overflow-hidden flex-row-reverse mb-8"
                id="fisb"
                data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <div class="col-lg-7 md-h-400px sm-h-300px text-center">
                    <div class="swiper h-100 swiper-pagination-style-3"
                        data-slider-options='{ "slidesPerView": 1, "spaceBetween": 10, "loop": true, "pagination": { "el": ".slider-four-slide-pagination", "clickable": true }, "autoplay": { "delay": 3000, "disableOnInteraction": false }, "navigation": { "nextEl": ".slider-one-slide-next-1", "prevEl": ".slider-one-slide-prev-1" }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "1400": { "slidesPerView": 1 }, "1200": { "slidesPerView": 1 }, "992": { "slidesPerView": 1 }, "768": { "slidesPerView": 1 } }, "effect": "slide" }'>
                        <div class="swiper-wrapper">
                            <!-- start carousal item -->
                            <div class="swiper-slide cover-background"
                                style="background-image: url('{{Storage::url($fakultasUtamaFISB->display)}}')"></div>
                            <!-- end carousal item -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 bg-very-light-gray">
                    <div class="pt-13 pb-12 ps-15 pe-15 lg-p-8 last-paragraph-no-margin">
                        <a href="{{ route('fakultas.detail', ['id' => $fakultasUtamaFISB->id]) }}">
                            <h4 class="alt-font text-dark-gray mb-20px ls-minus-1px d-inline-block">{{$fakultasUtamaFISB->nama_fakultas}}</h4>
                        </a>
                        <p class="fs-17">{{$fakultasUtamaFISB->deskripsi}}</p>
                    </div>
                    <div
                        class="ps-15 pe-15 pt-5 pb-5 lg-ps-8 lg-pe-8 border-top border-color-transparent-dark-very-light align-items-center d-flex justify-content-center">
                        <a href="{{ route('fakultas.detail', ['id' => $fakultasUtamaFISB->id]) }}"
                            class="btn btn-medium btn-switch-text btn-base-color btn-box-shadow btn-round-edge d-inline-block align-middle xs-ms-auto">
                            <span>
                                <span class="btn-double-text" data-text="Lihat Selengkapnya">Lihat Selengkapnya</span>
                            </span>
                        </a>
                    </div>
                </div>

            </div>
            <div id="fakultas-pasca" class="row g-0 justify-content-center border-radius-6px overflow-hidden mb-8" id="fp"
                data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <div class="col-lg-7 md-h-400px sm-h-300px text-center">
                    <div class="swiper h-100 swiper-pagination-style-3"
                        data-slider-options='{ "slidesPerView": 1, "spaceBetween": 10, "loop": true, "pagination": { "el": ".slider-four-slide-pagination", "clickable": true }, "autoplay": { "delay": 3000, "disableOnInteraction": false }, "navigation": { "nextEl": ".slider-one-slide-next-1", "prevEl": ".slider-one-slide-prev-1" }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "1400": { "slidesPerView": 1 }, "1200": { "slidesPerView": 1 }, "992": { "slidesPerView": 1 }, "768": { "slidesPerView": 1 } }, "effect": "slide" }'>
                        <div class="swiper-wrapper">
                            <!-- start carousal item -->
                            <div class="swiper-slide cover-background"
                                style="background-image: url('{{Storage::url($fakultasUtamaPasca->display)}}')"></div>
                            <!-- end carousal item -->
                            </div>
                    </div>
                </div>
                <div class="col-lg-5 bg-very-light-gray">
                    <div class="pt-13 pb-12 ps-15 pe-15 lg-p-8 last-paragraph-no-margin">
                        <a href="{{ route('fakultas.detail', ['id' => $fakultasUtamaPasca->id]) }}">
                            <h4 class="alt-font text-dark-gray mb-20px ls-minus-1px d-inline-block">{{$fakultasUtamaPasca->nama_fakultas}}
                            </h4>
                        </a>
                        <p class="fs-17">{{$fakultasUtamaPasca->deskripsi}}
                        </p>
                    </div>
                    <div
                        class="ps-15 pe-15 pt-5 pb-5 lg-ps-8 lg-pe-8 border-top border-color-transparent-dark-very-light align-items-center d-flex justify-content-center">
                        <a href="{{ route('fakultas.detail', ['id' => $fakultasUtamaPasca->id]) }}"
                            class="btn btn-medium btn-switch-text btn-base-color btn-box-shadow btn-round-edge d-inline-block align-middle xs-ms-auto">
                            <span>
                                <span class="btn-double-text" data-text="Lihat Selengkapnya">Lihat Selengkapnya</span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
    </section>
    <!-- end section -->
@endsection