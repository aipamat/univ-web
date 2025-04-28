@extends('layouts.app')
@section('title', 'International Women University | Testimoni Alumni')
@section('content')
    <section
        class="page-title-separate-breadcrumbs cover-background border-top border-4 border-color-base-color top-space-margin"
        style="background-image: url('{{Storage::url($testimoniUtama->banner_utama)}}')">
        <div class="opacity-full bg-gradient-dark-transparent"></div>
        <div class="container position-relative">
            <div class="row align-items-start align-items-lg-end justify-content-end flex-column flex-lg-row extra-small-screen"
                data-anime='{ "el": "childs", "translateY": [15, 0], "opacity": [0,1], "duration": 400, "delay": 0, "staggervalue": 200, "easing": "easeOutQuad" }'>
                <div class="col-xxl-7 col-lg-6 col-md-10 position-relative page-title-large md-mb-10px xs-mb-5px">
                    <h1 class="text-white alt-font fw-500 ls-minus-2px mb-0">Testimoni Alumni</h1>
                </div>
                <div class="col-xxl-5 col-lg-6 col-md-10 last-paragraph-no-margin">
                </div>
            </div>
        </div>
    </section>
    
    <section class="background-position-center background-repeat overlap-height position-relative"
    style="background-image: url('images/vertical-center-line-bg.svg')">
        <div class="container">
            <div class="row justify-content-center mb-5 xs-mb-7">
                <div class="col-md-8 text-center"
                    data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <h2 class="alt-font mb-5px text-dark-gray ls-minus-2px">Testimoni Alumni</h2>
                    <span class="d-inline-block">Alumni kami berbagi pengalaman luar biasa selama studi di kampus.</span>
                </div>
            </div>

            <div class="row row-cols-1 row-cols-xl-2 row-cols-lg-2 row-cols-md-1 position-relative justify-content-center mb-4 sm-mb-30px"
                data-anime='{ "el": "childs", "perspective": [800, 1200], "scale": [1.1, 1], "rotateX": [50, 0], "opacity": [0,1], "duration": 900, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>

                @foreach($testimoniItems as $testimoni)
                <div class="col review-style-05 md-mb-30px">
                    <div
                        class="border-radius-6px bg-white box-shadow-quadruple-large border border-color-extra-medium-gray last-paragraph-no-margin">
                        <div class="d-flex align-items-center ps-45px pe-45px pt-30px pb-30px lg-p-25px">
                            <img class="rounded-circle w-120px xs-w-80px me-25px"
                                src="{{ asset('storage/' . $testimoni->foto) }}" alt="Foto Alumni" />
                            <p>{!! $testimoni->deskripsi !!}</p>
                        </div>
                        <div
                            class="border-top border-color-extra-medium-gray pt-15px pb-15px ps-45px pe-45px lg-ps-25px lg-pe-25px text-center text-sm-start">
                            <p class="alt-font fw-500 text-dark-gray xs-fs-17">
                                {{ $testimoni->nama }},
                                <span>{{ $testimoni->fakultas->nama_fakultas ?? 'Tidak ada fakultas' }}</span>
                                <br>
                                <span>{{ $testimoni->programStudi->nama_prodi ?? 'Tidak ada prodi' }}</span>, Angkatan
                                <span>{{ $testimoni->angkatan }}</span>
                            </p>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>
    {{-- end section  --}}
@endsection