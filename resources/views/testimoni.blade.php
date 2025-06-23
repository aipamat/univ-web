@extends('layouts.app')
@section('title', 'International Women University | Testimoni Alumni')
@section('content')
    <!-- Section: Banner -->
    <section
        class="page-title-separate-breadcrumbs cover-background border-top border-4 border-color-base-color top-space-margin"
        style="background-image: url('{{ Storage::url($testimoniUtama->banner_utama) }}')">
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

    <!-- Section: Testimoni -->
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

            <!-- Cards -->
            <div class="row row-cols-1 row-cols-xl-2 row-cols-lg-2 row-cols-md-1 justify-content-center"
                data-anime='{ "el": "childs", "perspective": [800, 1200], "scale": [1.1, 1], "rotateX": [50, 0], "opacity": [0,1], "duration": 900, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>

                @foreach($testimoniItems as $testimoni)
                    <div class="col tw-my-[15px] d-flex mt-3">
                        <div
                            class="border-radius-6px bg-white box-shadow-quadruple-large border border-color-extra-medium-gray last-paragraph-no-margin w-100 d-flex flex-column h-100 p-0">

                            <!-- Konten Utama -->
                            <div class="d-flex align-items-start p-4 flex-grow-1">
                                <img class="rounded-circle w-120px xs-w-80px me-4 mt-1"
                                    src="{{ asset('storage/' . $testimoni->foto) }}" alt="Foto Alumni" />
                                <p class="mb-0" style="min-height: 140px;">{!! $testimoni->deskripsi !!}</p>
                            </div>

                            <!-- Footer Identitas -->
                            <div class="border-top border-color-extra-medium-gray py-3 px-4 text-center text-sm-start">
                                <p class="alt-font fw-500 text-dark-gray xs-fs-17 mb-0">
                                    {{ $testimoni->nama }},
                                    <span>{{ $testimoni->fakultas->nama_fakultas ?? 'Tidak ada fakultas' }}</span><br>
                                    <span>{{ $testimoni->programStudi->nama_prodi ?? 'Tidak ada prodi' }}</span>,
                                    Angkatan <span>{{ $testimoni->angkatan }}</span>
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
@endsection
