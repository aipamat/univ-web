@extends('layouts.app')
@section('title', 'International Women University | ' . $fakultas->nama_fakultas)

@section('content')
<section
    class="page-title-separate-breadcrumbs cover-background border-top border-4 border-color-base-color top-space-margin"
    style="background-image: url('{{Storage::url($fakultas->banner)}}')">
    <div class="opacity-full bg-gradient-dark-transparent"></div>
    <div class="container position-relative">
        <div class="row align-items-start align-items-lg-end justify-content-end flex-column flex-lg-row extra-small-screen">
            <div class="col-xxl-7 col-lg-6 col-md-10 position-relative page-title-large md-mb-10px xs-mb-5px">
                <h1 class="text-white alt-font fw-500 ls-minus-2px mb-0">{{ $fakultas->nama_fakultas }}</h1>
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
<section class="background-position-center background-repeat position-relative pb-0 overflow-hidden" style="background-image: url('../images/vertical-center-line-bg.svg')">
    <div class="container">
        <!-- Konten Foto Dekan dan Teks -->
        <div class="container my-5" data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
            <div class="row justify-content-center">
                <div class="col-md-4 text-center text-dark-gray">
                    <img src="{{ $fakultas->dekan->foto ? Storage::url($fakultas->dekan->foto) : asset('images/default-profile.png') }}" alt="Foto Dekan" class="img-fluid mb-3">
                    <span>Dekan {{ $fakultas->nama_fakultas }}</span>
                    <p>{{ $fakultas->dekan->nama ?? 'Belum ada dekan' }}</p>
                </div>
                <div class="col-md-8">
                    <p class="text-dark-gray">{{ $fakultas->deskripsi }}</p>
                </div>
            </div>
        </div>
        <div class="h-2px bg-dark-gray mb-50px" data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'></div>

        <!-- Tabel Daftar Link Website Program Studi -->
        <div class="container my-5">
            <div class="row justify-content-center" data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <div class="col-md-8">
                    <table class="table table-bordered text-left">
                        <thead class="bg-purple text-white">
                            <tr>
                                <th class="text-center">No</th>
                                <th>Program Studi</th>
                                <th class="text-center">Link Website</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($fakultas->programStudi as $index => $progStud)
                                <tr>
                                    <td class="text-center">{{ $index + 1 }}</td>
                                    <td>{{ $progStud->nama_prodi }}</td>
                                    <td class="text-center">
                                        <a href="{{ $progStud->link_website }}" target="_blank">{{ $progStud->link_website }}</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end section -->

<!-- start section -->
<section class="bg-very-light-gray background-position-center background-repeat position-relative" style="background-image: url('../images/vertical-center-line-bg.svg')">
    <div class="container" data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
        <div class="row justify-content-center mb-6 xs-mb-9">
            <div class="col-md-8 text-center">
                <span>Ketua Program Studi</span>
                <h2 class="alt-font mb-5px text-dark-gray ls-minus-2px">{{ $fakultas->nama_fakultas }}</h2>
            </div>
        </div>

        <div class="row justify-content-center mb-5 xs-mb-8">
            @foreach($fakultas->daftarKaprodi as $kaprodi)
                <div class="col-12 col-md-4 mb-30px">
                    <div class="hover-box md-mb-30px">
                        <img class="w-50 mx-auto d-block" src="{{ $kaprodi->foto ? Storage::url($kaprodi->foto) : asset('images/default-profile.png') }}" alt="{{ $kaprodi->nama }}">
                        <div class="p-30px last-paragraph-no-margin text-center">
                            <span class="d-inline-block fs-22 alt-font">{{ $kaprodi->nama_prodi }}</span>
                            <p>{{ $kaprodi->nama }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<!-- end section -->
@endsection