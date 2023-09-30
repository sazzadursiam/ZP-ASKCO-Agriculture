@extends('frontend.layout.master')
@section('home_menu_active', 'active')
@section('page_title')
    Home
@endsection
@section('content')

    <!-- ======= Hero Section ======= -->
    @include('frontend._partials.hero')
    <!-- End Hero -->

    <main id="main">
        <!-- ======= Why Us Section ======= -->
        {{-- <section id="why-us" class="why-us">
            <div class="container">

                <div class="row">

                    <div class="col-lg-12 d-flex align-items-stretch">
                        <div class="icon-boxes d-flex flex-column justify-content-center">
                            <div class="row">
                                <div class="col-xl-3 d-flex align-items-stretch">
                                    <div class="icon-box mt-4 mt-xl-0" style="background: #458301">
                                        <i class="fa-solid fa-truck-arrow-right"></i>
                                        <h4>Transport Facility</h4>
                                    </div>
                                </div>
                                <div class="col-xl-3 d-flex align-items-stretch">
                                    <div class="icon-box mt-4 mt-xl-0" style="background: #2E3191;">
                                        <i class="fa-solid fa-charging-station"></i>
                                        <h4>Backup Generator</h4>
                                    </div>
                                </div>
                                <div class="col-xl-3 d-flex align-items-stretch">
                                    <div class="icon-box mt-4 mt-xl-0" style="background: #458301">
                                        <i class="fa-solid fa-vial-virus"></i>
                                        <h4>Laboratory Equipments & Facility</h4>
                                    </div>
                                </div>
                                <div class="col-xl-3 d-flex align-items-stretch">
                                    <div class="icon-box mt-4 mt-xl-0" style="background: #2E3191">
                                        <i class="fa-regular fa-snowflake"></i>
                                        <h4>Dehumidifier &
                                            Humidifier System</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section> --}}

        <section id="departments" class="departments">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-8 details order-2 order-lg-1">

                        <h3 class="section_title" style="color: #458300">OUR STORY</h3>

                        <p class="f-18">Askco Multipurpose Specialized Preservation Centre Limited was started in 2002 by
                            Ltd. Col MA
                            Mannan (Retd.) and the pioneer Company in Bangladesh for multi specialized cold storage seeing
                            the exigency to store agro commodities humid for retaining their market value and efficient
                            future us. Askco has been serving to multi nation and national corporate seed company for all
                            kind of seed, fruits, vegetable, processed food & pharmacy industries with 18 (eighteen) years
                            of expertise in the technology of Cold Storage preservation. The preservation mainly capacity of
                            this is about 4500 Metric tons batch wise. The project consist of pre - fabricated sand which is
                            favorable especially for seed product and fresh fruits & vegetable preservation & Processing
                            also. It has dehumidifier for exp & humidifier system which can keep high humid & low humid
                            Product.</p>
                        <div>
                            <a href="{{ route('about_us_page') }}" class="appointment-btn mb-2">DISCOVER
                                MORE</a>
                        </div>
                    </div>
                    <div class="col-lg-4 text-center order-1 order-lg-2">
                        <img src="{{ asset('frontend_assets/common/1.png') }}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </section>

        <section id="services" class="services pt-0">
            <div class="container">

                <div class="section-title">
                    <h2 class="section_title" style="color: #458300">OUR SERVICES</h2>

                    <h4 class="text-uppercase" style="font-weight: 700; color:#2E3191">
                        we offer a wide array of services designed to support and empower our mission of preserving
                    </h4>
                </div>

                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 ">
                        <div class="icon-box">
                            <img class="img-fluid" src="{{ asset('frontend_assets/common/s1.png') }}" alt="">
                            <h4 class="mt-4"><a href="#">Seed Storage</a></h4>
                            <div>
                                <a href="#" class="appointment-btn mb-2">READ MORE</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6  mt-4 mt-md-0">
                        <div class="icon-box">
                            <img class="img-fluid" src="{{ asset('frontend_assets/common/s2.png') }}" alt="">
                            <h4 class="mt-4"><a href="{{ route('seed-processing') }}">Seed Processing</a></h4>
                            <div>
                                <a href="{{ route('seed-processing') }}" class="appointment-btn mb-2">READ MORE</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center my-4">
                    <div class="col-lg-4 col-md-6">
                        <div class="icon-box">
                            <img class="img-fluid" src="{{ asset('frontend_assets/common/s3.png') }}" alt="">
                            <h4 class="mt-4"><a href="#">Seed Laboratory</a></h4>
                            <div>
                                <a href="#" class="appointment-btn mb-2">READ MORE</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 ">
                        <div class="icon-box">
                            <img class="img-fluid" src="{{ asset('frontend_assets/common/s4.png') }}" alt="">
                            <h4 class="mt-4"><a href="{{ route('seed-packaging') }}">Seed Packing</a></h4>
                            <div>
                                <a href="{{ route('seed-packaging') }}" class="appointment-btn mb-2">READ MORE</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6  mt-4 mt-md-0">
                        <div class="icon-box">
                            <img class="img-fluid" src="{{ asset('frontend_assets/common/s5.png') }}" alt="">
                            <h4 class="mt-4"><a href="{{ route('transport') }}">Transport Facility</a></h4>
                            <div>
                                <a href="{{ route('transport') }}" class="appointment-btn mb-2">READ MORE</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>


        <section id="about" class="about pt-0">
            <div class="container">
                <div class="section-title">
                    <h2 class="section_title" style="color: #458300">WHY CHOOSE US</h2>

                    <h4 class="text-uppercase" style="font-weight: 700; color:#2E3191">
                        some of the remarkable features that make our center a unique and indispensable resource
                    </h4>
                </div>

                <div class="row">

                    <div
                        class="col-md-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-1 px-lg-5">

                        <div class="icon-box">
                            <div class="icon"><i class="fa-regular fa-snowflake"></i></div>
                            <h4 class="title"><a href="#">Dehumidifier and humidifier System</a></h4>
                            <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui
                                blanditiis
                                praesentium voluptatum deleniti atque</p>
                        </div>

                        <div class="icon-box">
                            <div class="icon"><i class="fa-solid fa-flask-vial"></i></div>
                            <h4 class="title"><a href="#">Laboratory Equipment and Facility</a></h4>
                            <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias
                                excepturi sint occaecati cupiditate non provident</p>
                        </div>

                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-gift"></i></div>
                            <h4 class="title"><a href="#">Manual Packing</a></h4>
                            <p class="description">Explicabo est voluptatum asperiores consequatur magnam. Et veritatis
                                odit. Sunt aut deserunt minus aut eligendi omnis</p>
                        </div>

                    </div>
                    <div
                        class="col-md-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-1 px-lg-5">

                        <div class="icon-box">
                            <div class="icon"><i class="fa-solid fa-temperature-low"></i></div>
                            <h4 class="title"><a href="#">Pre-Cool/Heat Room</a></h4>
                            <p class="description">Explicabo est voluptatum asperiores consequatur magnam. Et veritatis
                                odit. Sunt aut deserunt minus aut eligendi omnis</p>
                        </div>

                        <div class="icon-box">
                            <div class="icon"><i class="fa-solid fa-seedling"></i></div>
                            <h4 class="title"><a href="#">Favorable Environment
                                    for Quality Products </a></h4>
                            <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui
                                blanditiis
                                praesentium voluptatum deleniti atque</p>
                        </div>

                        <div class="icon-box">
                            <div class="icon"><i class="fa-solid fa-charging-station"></i></div>
                            <h4 class="title"><a href="#">Backup Generator</a></h4>
                            <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias
                                excepturi sint occaecati cupiditate non provident</p>
                        </div>
                    </div>

                </div>

                <div class="row justify-content-center mt-5" style="border-radius: 10px;">
                    <div class="col-md-4 d-flex justify-content-center align-items-center"
                        style="background-color: #2E3191;">
                        <div class="text-white py-5 w-100" style="">
                            <p class="mb-3 text-center"><i class="fa-regular fa-file-pdf fa-2xl"></i></p>
                            <h6 class="text-center"><b>Download Our Brochure</b></h6>
                            <p class="text-center">View more details of Ascko MSP Centre</p>
                            <div class="d-flex justify-content-center">
                                <a href="" class="appointment-btn mb-2 py-2"
                                    style="background-color: #458301">Download Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 px-0">
                        <img class="img-fluid" src="{{ asset('frontend_assets/common/33.png') }}" alt="">
                    </div>
                </div>

            </div>
        </section>




        <section id="about" class="about client_slider pt-0">

            <div class="section-title">
                <h2 class="section_title" style="color: #458300">OUR CLIENTS</h2>

                <h4 class="text-uppercase" style="font-weight: 700; color:#2E3191">
                    Trusted by Visionaries: Our Valued Clients
                </h4>
            </div>
            <section class="client-slider">
                <div class="slider">
                    <div class="logos me-3 me-md-0">
                        <img src="{{ asset('frontend_assets/common/client-slider/1.png') }}">
                        <img src="{{ asset('frontend_assets/common/client-slider/2.png') }}">
                        <img src="{{ asset('frontend_assets/common/client-slider/3.png') }}">
                        <img src="{{ asset('frontend_assets/common/client-slider/4.png') }}">
                        <img src="{{ asset('frontend_assets/common/client-slider/5.png') }}">
                        <img src="{{ asset('frontend_assets/common/client-slider/6.png') }}">
                    </div>
                    <div class="logos">
                        <img src="{{ asset('frontend_assets/common/client-slider/1.png') }}">
                        <img src="{{ asset('frontend_assets/common/client-slider/2.png') }}">
                        <img src="{{ asset('frontend_assets/common/client-slider/3.png') }}">
                        <img src="{{ asset('frontend_assets/common/client-slider/4.png') }}">
                        <img src="{{ asset('frontend_assets/common/client-slider/5.png') }}">
                        <img src="{{ asset('frontend_assets/common/client-slider/6.png') }}">
                    </div>
                </div>
            </section>

        </section>


        <section id="testimonials" class="testimonials pt-0">
            <div class="container">

                <div class="section-title">
                    <h2 class="section_title" style="color: #2E3191">OUR CLIENT’S SAY</h2>
                </div>

                <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <img src="{{ asset('frontend_assets/common/avater.png') }}" class="testimonial-img"
                                        alt="">
                                    <h3>Abdur Rahman</h3>
                                    <h4>Manager</h4>
                                    <p>
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        Excellent facility. Showing be very useful for the industry.
                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <img src="{{ asset('frontend_assets/common/avater.png') }}" class="testimonial-img"
                                        alt="">
                                    <h3>Jamil Hasan</h3>
                                    <h4>Manager</h4>
                                    <p>
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        Simply superb. I’ve never seen such a modern facility in any seed company. Askco MSP
                                        Centre Ltd. is really ahead of time, taking care of future needs of seed industry
                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->
                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <img src="{{ asset('frontend_assets/common/avater.png') }}" class="testimonial-img"
                                        alt="">
                                    <h3>Abdur Rahman</h3>
                                    <h4>Manager</h4>
                                    <p>
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        Excellent facility. Showing be very useful for the industry.
                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <img src="{{ asset('frontend_assets/common/avater.png') }}" class="testimonial-img"
                                        alt="">
                                    <h3>Jamil Hasan</h3>
                                    <h4>Manager</h4>
                                    <p>
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        Simply superb. I’ve never seen such a modern facility in any seed company. Askco MSP
                                        Centre Ltd. is really ahead of time, taking care of future needs of seed industry
                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->


                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section>


    </main>


@endsection
