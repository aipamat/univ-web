@extends('layouts.app')
@section('title', 'International Women University | Tentang Kampus')

@section('content')
    <section
        class="page-title-separate-breadcrumbs cover-background border-top border-4 border-color-base-color top-space-margin"
        style="background-image:url('{{ Storage::url($tentangKampusItems->banner) }}')">
        <div class="opacity-full-dark bg-gradient-dark-transparent"></div>
        <div class="container position-relative">
            <div class="row align-items-start align-items-lg-end justify-content-end flex-column flex-lg-row extra-small-screen"
                data-anime='{ "el": "childs", "translateY": [15, 0], "opacity": [0,1], "duration": 400, "delay": 0, "staggervalue": 200, "easing": "easeOutQuad" }'>
                <div class="col-xxl-7 col-lg-6 col-md-10 position-relative page-title-large md-mb-15px xs-mb-5px">
                    <h1 class="text-white alt-font fw-500 ls-minus-2px mb-0">Tentang Kampus</h1>
                </div>
                <div class="col-xxl-5 col-lg-6 col-md-10 last-paragraph-no-margin">
                </div>
            </div>
        </div>
    </section>
    <!-- end page title -->

    <section class="background-position-center background-repeat"
    style="background-image: url('images/vertical-center-line-bg.svg')">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-md-11 info-box">
                <h2>Sejarah IWU</h2>
                <div class="row align-items-center">
                    <!-- Kolom Kiri: Konten -->
                    <div class="col-md-8">
                        @if ($tentangKampusItems)
                            <p>{!! $tentangKampusItems->deskripsi_sejarah !!}</p>
                        @else
                            <p>No speech available.</p>
                        @endif
                    </div>

                    <!-- Kolom Kanan: Gambar & Nama -->
                    <div class="col-md-4 text-center">
                        @if ($tentangKampusItems)
                            <div class="info-image">
                                <img src="{{ Storage::url($tentangKampusItems->gambar_sejarah) }}" alt="Pimpinan">
                            </div>
                        @else
                            <p>No image available.</p>
                        @endif
                    </div>
                </div>  
            </div>
        </div>
    </div>
</section>



    <!-- start section -->
    <div id="visi-misi" class="background-position-center background-repeat overlap-height pb-5"
        style="background-image: url('images/vertical-center-line-bg.svg')">
        <div class="container overlap-gap-section">
            <div class="row">
                <div class="col-xl-10 col-md-6 offset-xl-1 last-paragraph-no-margin"
                    data-anime='{ "el": "childs", "translateX": [-50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                    <h5 class="alt-font text-dark-gray mb-10px">Visi</h5>
                    <!-- Menambahkan kelas 'text-justify' -->
                    <p class="w-100 lg-w-100 text-justify">{!!$visiMisiTujuanItems->visi!!}</p>
                </div>
                <div class="col-xl-10 col-md-6 offset-xl-1 last-paragraph-no-margin mt-3"
                    data-anime='{ "el": "childs", "translateX": [-50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                    <h5 class="alt-font text-dark-gray mb-10px">Misi</h5>
                    <!-- Menambahkan kelas 'text-justify' -->
                    <p class="w-100 lg-w-100 text-justify">{!!$visiMisiTujuanItems->misi!!}</p>
                </div>
                <div class="col-xl-10 col-md-6 offset-xl-1 last-paragraph-no-margin mt-3"
                    data-anime='{ "el": "childs", "translateX": [-50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                    <h5 class="alt-font text-dark-gray mb-10px">Tujuan</h5>
                    <!-- Menambahkan kelas 'text-justify' -->
                    <p class="w-100 lg-w-100 text-justify">{!!$visiMisiTujuanItems->tujuan!!}</p>
                </div>
            </div>
        </div>
    </div>
    <!-- end section -->

    <!-- start section -->
    <section id="pimpinan" class="bg-very-light-gray background-position-center background-repeat position-relative"
        style="background-image: url('images/vertical-center-line-bg.svg')">
        <div class="container">
            <div class="row justify-content-center mb-6 xs-mb-9">
                <div class="col-md-8 text-center"
                    data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <h2 class="alt-font mb-5px text-dark-gray ls-minus-2px">Pimpinan IWU</h2>
                </div>
            </div>
            <div class="row justify-content-center mb-5 xs-mb-8 d-flex align-items-center">
                <!-- start fancy text box item (Rektor) -->
                <div class="col-12 col-md-4"
                    data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <div class="hover-box md-mb-30px">
                        <img class="w-50 mx-auto d-block" src="{{ Storage::url($pimpinanRektorItems->foto) }}" alt="Rektor">
                        <div class="p-30px last-paragraph-no-margin text-center">
                            <span class="d-inline-block fs-22 alt-font">{{$pimpinanRektorItems->status}}</span>
                            <p></p>
                            <span class="text-dark">{{$pimpinanRektorItems->nama}}</span>
                        </div>
                    </div>
                </div>
                <!-- end fancy text box item (Rektor) -->
            </div>

            <div class="row justify-content-center mb-5 xs-mb-8 d-flex align-items-center">
                <!-- start fancy text box item (Rektor) -->
                <div class="col-12 col-md-4"
                    data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <div class="hover-box md-mb-30px">
                        <img class="w-50 mx-auto d-block" src="{{ Storage::url($pimpinanKetuaSenatItems->foto) }}" alt="Rektor">
                        <div class="p-30px last-paragraph-no-margin text-center">
                            <span class="d-inline-block fs-22 alt-font">{{$pimpinanKetuaSenatItems->status}}</span>
                            <p></p>
                            <span class="text-dark">{{$pimpinanKetuaSenatItems->nama}}</span>
                        </div>
                    </div>
                </div>
                <!-- end fancy text box item (Rektor) -->
            </div>

            <div class="row justify-content-center mb-5 xs-mb-8"
                data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <!-- start fancy text box item (Wakil Rektor) -->
                @foreach($pimpinanWakilRektorItems as $pimpinanWakilRektor)
                    <div class="col-12 col-md-4 mb-30px">
                        <div class="hover-box md-mb-30px">
                            <img class="w-50 mx-auto d-block" src="{{ Storage::url($pimpinanWakilRektor->foto) }}" alt="Rektor">
                            <div class="p-30px last-paragraph-no-margin text-center">
                                <span class="d-inline-block fs-22 alt-font">{{ $pimpinanWakilRektor->status }}</span>                            
                                    <p>{{ $pimpinanWakilRektor->bidang }}</p> 
                                <span class="text-dark">{{ $pimpinanWakilRektor->nama }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="row justify-content-center mb-5 xs-mb-8"
                data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <!-- start fancy text box item (Wakil Rektor) -->
                @foreach($pimpinanDekanItems as $pimpinanDekanItems)
                    <div class="col-12 col-md-4 mb-30px">
                        <div class="hover-box md-mb-30px">
                            <img class="w-50 mx-auto d-block" src="{{ Storage::url($pimpinanDekanItems->foto) }}" alt="Rektor">
                            <div class="p-30px last-paragraph-no-margin text-center">
                                <span class="d-inline-block fs-22 alt-font">{{ $pimpinanDekanItems->status }}</span>
                                    <span class="fs-22 alt-font"> {{ $pimpinanDekanItems->fakultas->nama_fakultas }}</span>
                                <p></p>
                                <span class="text-dark">{{ $pimpinanDekanItems->nama }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- end section -->

    {{-- <!-- start section -->
    <section id="struktur-organisasi" class="background-position-center background-repeat position-relative"
        style="background-image: url('images/vertical-center-line-bg.svg')">
        <div class="container">
            <div class="row justify-content-center mb-6 xs-mb-9">
                <div class="col-md-8 text-center"
                    data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <h2 class="alt-font mb-5px text-dark-gray ls-minus-2px">Struktur Organisasi</h2>
                </div>
            </div>
            <div class="row justify-content-center mb-5 xs-mb-8"
                data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>

                <!-- Add the image with transform -->
                <div class="col-12">
                    <img src="{{Storage::url($strukturOrganisasiItems->gambar_struktur)}}" alt="Struktur Organisasi" class="img-fluid w-100 transform-img" />
                </div>
            </div>
        </div>
    </section>
    <!-- end section --> --}}

    <!-- end section -->

    <!-- start section -->
    <section id="kerja-sama" class="bg-very-light-gray background-position-center background-repeat"
        style="background-image: url('images/vertical-center-line-bg-dark.svg')">
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
                 @foreach($kerjaSamaItems as $kerjaSamaItems)
                <div class="col mt-5 sm-mb-30px">
                    <div class="client-box">
                        <a href="#"><img src="{{ Storage::url($kerjaSamaItems->gambar) }}" class="h-200px" alt="" /></a>
                    </div>
                    <span class="fs-18 d-inline-block mt-30px fw-600 text-dark-gray">{{ $kerjaSamaItems->nama }}</span>
                </div>
                @endforeach
                <!-- end client item -->
            </div>
        </div>
    </section>
    <!-- end section -->
@endsection