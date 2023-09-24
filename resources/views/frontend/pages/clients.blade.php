@extends('frontend.layout.master')
@section('clients_menu_active', 'active')
@section('page_title')
    Our Clients
@endsection

@section('custom_css')

    <style>
        .gallery .gallery-item {
            height: 150px;
            overflow: hidden;
            border: 1px solid #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            border-collapse: collapse;
        }

        .gallery .gallery-item a img {
            margin: auto;
        }
    </style>
@endsection
@section('content')
    <main id="main" style="min-height: 90vh;">
        <div class="inner_page_hero d-flex flex-column align-items-center position-relative">
            <img src="{{ asset('frontend_assets/common/our_clients.png') }}" alt="" class="w-100">

            <div class="text-center"
                style="background-color: #10125e; padding: 15px 0px; border-radius: 10px; width:40%;position: absolute;bottom: -35px;">
                <h5 class="text-white mb-0"><b>OUR CLIENTS</b></h5>
            </div>
        </div>



        <!-- ======= Gallery Section ======= -->
        <section id="gallery" class="gallery">
            <div class="container mt-5">

                <div class="section-title">
                    <h5 style="color: #458301">
                        <b>Celebrating a Legacy of Trusted Collaborations: Our Distinguished
                            Clientele</b>
                    </h5>
                </div>

                <div class="d-flex justify-content-center">
                    <div class="text-center"
                        style="background-color: #10125e; padding: 10px 0px; border-radius: 0px 15px 0px 15px; width:30%;">
                        <h5 class="text-white mb-0"><b>Local Clients</b></h5>
                    </div>
                </div>


            </div>

            <div class="container mt-5">
                <div class="row g-0">

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="{{ asset('frontend_assets/common/local_clients/1 (1).png') }}"
                                class="galelry-lightbox">
                                <img src="{{ asset('frontend_assets/common/local_clients/1 (1).png') }}" alt=""
                                    class="ms-auto">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="{{ asset('frontend_assets/common/local_clients/1 (2).png') }}"
                                class="galelry-lightbox">
                                <img src="{{ asset('frontend_assets/common/local_clients/1 (2).png') }}" alt=""
                                    class="img-fluid">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="{{ asset('frontend_assets/common/local_clients/1 (3).png') }}"
                                class="galelry-lightbox">
                                <img src="{{ asset('frontend_assets/common/local_clients/1 (3).png') }}" alt=""
                                    class="img-fluid">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="{{ asset('frontend_assets/common/local_clients/1 (4).png') }}"
                                class="galelry-lightbox">
                                <img src="{{ asset('frontend_assets/common/local_clients/1 (4).png') }}" alt=""
                                    class="img-fluid">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="{{ asset('frontend_assets/common/local_clients/1 (5).png') }}"
                                class="galelry-lightbox">
                                <img src="{{ asset('frontend_assets/common/local_clients/1 (5).png') }}" alt=""
                                    class="img-fluid">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="{{ asset('frontend_assets/common/local_clients/1 (6).png') }}"
                                class="galelry-lightbox">
                                <img src="{{ asset('frontend_assets/common/local_clients/1 (6).png') }}" alt=""
                                    class="img-fluid">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="{{ asset('frontend_assets/common/local_clients/1 (7).png') }}"
                                class="galelry-lightbox">
                                <img src="{{ asset('frontend_assets/common/local_clients/1 (7).png') }}" alt=""
                                    class="img-fluid">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="{{ asset('frontend_assets/common/local_clients/1 (8).png') }}"
                                class="galelry-lightbox">
                                <img src="{{ asset('frontend_assets/common/local_clients/1 (8).png') }}" alt=""
                                    class="img-fluid">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="{{ asset('frontend_assets/common/local_clients/1 (9).png') }}"
                                class="galelry-lightbox">
                                <img src="{{ asset('frontend_assets/common/local_clients/1 (9).png') }}" alt=""
                                    class="img-fluid">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="{{ asset('frontend_assets/common/local_clients/1 (10).png') }}"
                                class="galelry-lightbox">
                                <img src="{{ asset('frontend_assets/common/local_clients/1 (10).png') }}" alt=""
                                    class="img-fluid">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="{{ asset('frontend_assets/common/local_clients/1 (11).png') }}"
                                class="galelry-lightbox">
                                <img src="{{ asset('frontend_assets/common/local_clients/1 (11).png') }}" alt=""
                                    class="img-fluid">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="{{ asset('frontend_assets/common/local_clients/1 (12).png') }}"
                                class="galelry-lightbox">
                                <img src="{{ asset('frontend_assets/common/local_clients/1 (12).png') }}" alt=""
                                    class="img-fluid">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="{{ asset('frontend_assets/common/local_clients/1 (13).png') }}"
                                class="galelry-lightbox">
                                <img src="{{ asset('frontend_assets/common/local_clients/1 (13).png') }}" alt=""
                                    class="img-fluid">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="{{ asset('frontend_assets/common/local_clients/1 (14).png') }}"
                                class="galelry-lightbox">
                                <img src="{{ asset('frontend_assets/common/local_clients/1 (14).png') }}" alt=""
                                    class="img-fluid">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="{{ asset('frontend_assets/common/local_clients/1 (15).png') }}"
                                class="galelry-lightbox">
                                <img src="{{ asset('frontend_assets/common/local_clients/1 (15).png') }}" alt=""
                                    class="img-fluid">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="{{ asset('frontend_assets/common/local_clients/1 (16).png') }}"
                                class="galelry-lightbox">
                                <img src="{{ asset('frontend_assets/common/local_clients/1 (16).png') }}" alt=""
                                    class="img-fluid">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="{{ asset('frontend_assets/common/local_clients/1 (17).png') }}"
                                class="galelry-lightbox">
                                <img src="{{ asset('frontend_assets/common/local_clients/1 (17).png') }}" alt=""
                                    class="img-fluid">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="{{ asset('frontend_assets/common/local_clients/1 (18).png') }}"
                                class="galelry-lightbox">
                                <img src="{{ asset('frontend_assets/common/local_clients/1 (18).png') }}" alt=""
                                    class="img-fluid">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="{{ asset('frontend_assets/common/local_clients/1 (19).png') }}"
                                class="galelry-lightbox">
                                <img src="{{ asset('frontend_assets/common/local_clients/1 (19).png') }}" alt=""
                                    class="img-fluid">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="{{ asset('frontend_assets/common/local_clients/1 (20).png') }}"
                                class="galelry-lightbox">
                                <img src="{{ asset('frontend_assets/common/local_clients/1 (20).png') }}" alt=""
                                    class="img-fluid">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="{{ asset('frontend_assets/common/local_clients/1 (21).png') }}"
                                class="galelry-lightbox">
                                <img src="{{ asset('frontend_assets/common/local_clients/1 (21).png') }}" alt=""
                                    class="img-fluid">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="{{ asset('frontend_assets/common/local_clients/1 (22).png') }}"
                                class="galelry-lightbox">
                                <img src="{{ asset('frontend_assets/common/local_clients/1 (22).png') }}" alt=""
                                    class="img-fluid">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="{{ asset('frontend_assets/common/local_clients/1 (23).png') }}"
                                class="galelry-lightbox">
                                <img src="{{ asset('frontend_assets/common/local_clients/1 (23).png') }}" alt=""
                                    class="img-fluid">
                            </a>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <section id="gallery" class="gallery">
            <div class="container mt-5">
                <div class="d-flex justify-content-center">
                    <div class="text-center"
                        style="background-color: #458301; padding: 10px 0px; border-radius: 0px 15px 0px 15px; width:30%;">
                        <h5 class="text-white mb-0"><b>International Clients</b></h5>
                    </div>
                </div>


            </div>

            <div class="container mt-5">
                <div class="row g-0">

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="{{ asset('frontend_assets/common/international_clients/1 (1).png') }}"
                                class="galelry-lightbox">
                                <img src="{{ asset('frontend_assets/common/international_clients/1 (1).png') }}"
                                    alt="" class="ms-auto">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="{{ asset('frontend_assets/common/international_clients/1 (2).png') }}"
                                class="galelry-lightbox">
                                <img src="{{ asset('frontend_assets/common/international_clients/1 (2).png') }}"
                                    alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="{{ asset('frontend_assets/common/international_clients/1 (3).png') }}"
                                class="galelry-lightbox">
                                <img src="{{ asset('frontend_assets/common/international_clients/1 (3).png') }}"
                                    alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="{{ asset('frontend_assets/common/international_clients/1 (4).png') }}"
                                class="galelry-lightbox">
                                <img src="{{ asset('frontend_assets/common/international_clients/1 (4).png') }}"
                                    alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="{{ asset('frontend_assets/common/international_clients/1 (5).png') }}"
                                class="galelry-lightbox">
                                <img src="{{ asset('frontend_assets/common/international_clients/1 (5).png') }}"
                                    alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="{{ asset('frontend_assets/common/international_clients/1 (6).png') }}"
                                class="galelry-lightbox">
                                <img src="{{ asset('frontend_assets/common/international_clients/1 (6).png') }}"
                                    alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="{{ asset('frontend_assets/common/international_clients/1 (7).png') }}"
                                class="galelry-lightbox">
                                <img src="{{ asset('frontend_assets/common/international_clients/1 (7).png') }}"
                                    alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="{{ asset('frontend_assets/common/international_clients/1 (8).png') }}"
                                class="galelry-lightbox">
                                <img src="{{ asset('frontend_assets/common/international_clients/1 (8).png') }}"
                                    alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                </div>

            </div>
        </section>

    </main>


@endsection
