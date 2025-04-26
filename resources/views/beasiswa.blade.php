@extends('layouts.app')
@section('title', 'International Women University | Beasiswa')

@section('content')
    <!-- start page title -->
    <section
        class="page-title-separate-breadcrumbs cover-background border-top border-4 border-color-base-color top-space-margin"
        style="background-image: url('{{Storage::url($beasiswaUtamaItems->banner)}}')">
        <div class="opacity-full bg-gradient-dark-transparent"></div>
        <div class="container position-relative">
            <div class="row align-items-start align-items-lg-end justify-content-end flex-column flex-lg-row extra-small-screen">
                <div class="col-xxl-7 col-lg-6 col-md-10 position-relative page-title-large md-mb-10px xs-mb-5px">
                    <h1 class="text-white alt-font fw-500 ls-minus-2px mb-0">Beasiswa</h1>
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
    <section class="bg-very-light-gray background-position-center background-repeat position-relative pb-0 overflow-hidden" style="background-image: url('images/vertical-center-line-bg-dark.svg')">
        <div class="container" data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
            <!-- Tabel Daftar Link Website Program Studi -->
            <div class="container mb-5">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <table class="table table-bordered text-left">
                            <thead class="bg-purple text-white">
                                <tr>
                                    <th class="text-center">No</th>
                                    <th>Program Beasiswa</th>
                                    <th class="text-center">Detail</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($beasiswaItems as $item)
                                <tr>
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td>{{ $item->nama_beasiswa }}</td>
                                    <td class="text-center">
                                        <a href="{{ route('beasiswa.detail', $item->id) }}" target="_blank">Lihat</a>
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
@endsection
