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
        <section id="why-us" class="why-us">
            <div class="container">

                <div class="row">
                    {{-- <div class="col-lg-4 d-flex align-items-stretch">
                        <div class="content">
                            <h3>Why Choose Medilab?</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
                                Asperiores dolores sed et. Tenetur quia eos. Autem tempore quibusdam vel necessitatibus
                                optio ad corporis.
                            </p>
                            <div class="text-center">
                                <a href="#" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
                            </div>
                        </div>
                    </div> --}}
                    <div class="col-lg-12 d-flex align-items-stretch">
                        <div class="icon-boxes d-flex flex-column justify-content-center">
                            <div class="row">
                                <div class="col-xl-3 d-flex align-items-stretch">
                                    <div class="icon-box mt-4 mt-xl-0" style="background: #458301">
                                        {{-- <i class="bx bx-receipt"></i> --}}
                                        <i class="fa-solid fa-truck-arrow-right"></i>
                                        <h4>Transport Facility</h4>
                                        {{-- <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut
                                            aliquip</p> --}}
                                    </div>
                                </div>
                                <div class="col-xl-3 d-flex align-items-stretch">
                                    <div class="icon-box mt-4 mt-xl-0" style="background: #10125E;">
                                        {{-- <i class="bx bx-cube-alt"></i> --}}
                                        <i class="fa-solid fa-charging-station"></i>
                                        <h4>Backup Generator</h4>
                                        {{-- <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                            deserunt</p> --}}
                                    </div>
                                </div>
                                <div class="col-xl-3 d-flex align-items-stretch">
                                    <div class="icon-box mt-4 mt-xl-0" style="background: #458301">
                                        {{-- <i class="bx bx-images"></i> --}}
                                        <i class="fa-solid fa-vial-virus"></i>
                                        <h4>Laboratory Equipments & Facility</h4>
                                        {{-- <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis
                                            facere</p> --}}
                                    </div>
                                </div>
                                <div class="col-xl-3 d-flex align-items-stretch">
                                    <div class="icon-box mt-4 mt-xl-0" style="background: #10125E">
                                        {{-- <i class="bx bx-images"></i> --}}
                                        <i class="fa-regular fa-snowflake"></i>
                                        <h4>Dehumidifier &
                                            Humidifier System</h4>
                                        {{-- <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis
                                            facere</p> --}}
                                    </div>
                                </div>
                            </div>
                        </div><!-- End .content-->
                    </div>
                </div>

            </div>
        </section><!-- End Why Us Section -->



        <!-- ======= Departments Section ======= -->
        <section id="departments" class="departments pt-0">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-8 details order-2 order-lg-1">

                        <h3 style="color: #458300">WHO WE ARE</h3>
                        <h3 class="text-uppercase">we embark on a vital journey to safeguard the essence of nature's
                            gifts</h3>
                        <p>Askco Multipurpose Specialized Preservation Center Limited was started in 2002 by Ltd. Col
                            MA Mannan (Retd.) and the pioneer Company in Bangladesh for multi specialized cold storage
                            seeing the exigency to store agro commodities humid for retaining their market value and
                            efficient future us. Askco has been serving to multi nation and national corporate seed
                            company for all kind of seed, fruits, vegetable, processed food & pharmacy industries with
                            18 (eighteen) years of expertise in the technology of Cold Storage preservation. The
                            preservation mainly capacity of this is about 4500 Metric tons batch wise. The project
                            consist of pre - fabricated sand which is favorable especially for seed product and fresh
                            fruits & vegetable preservation & Processing also. It has dehumidifier for exp & humidifier
                            system which can keep high humid & low humid Product.</p>
                        <div>
                            <a href="#" class="appointment-btn mb-2">DISCOVER
                                MORE</a>
                        </div>
                    </div>
                    <div class="col-lg-4 text-center order-1 order-lg-2">
                        <img src="{{ asset('frontend_assets/common/1.png') }}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </section><!-- End Departments Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services pt-0">
            <div class="container">

                <div class="section-title">
                    <h2 style="color: #458300">Our Services</h2>

                    <h4 class="text-uppercase" style="font-weight: 700; color:#10125E">
                        we offer a wide array of services designed to support and empower our mission of preserving
                    </h4>
                    {{-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit
                        sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias
                        ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> --}}
                </div>

                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 ">
                        <div class="icon-box">
                            <img src="{{ asset('frontend_assets/common/2.png') }}" alt="">
                            <h4 class="mt-4"><a href="">Seed Processing</a></h4>
                            <div>
                                <a href="#" class="appointment-btn mb-2">READ MORE</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6  mt-4 mt-md-0">
                        <div class="icon-box">
                            <img src="{{ asset('frontend_assets/common/3.png') }}" alt="">
                            <h4 class="mt-4"><a href="">Seed Processing</a></h4>
                            <div>
                                <a href="#" class="appointment-btn mb-2">READ MORE</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6  mt-4 mt-lg-0">
                        <div class="icon-box">
                            <img src="{{ asset('frontend_assets/common/4.png') }}" alt="">
                            <h4 class="mt-4"><a href="">Seed Processing</a></h4>
                            <div>
                                <a href="#" class="appointment-btn mb-2">READ MORE</a>
                            </div>
                        </div>
                    </div>

                    {{-- <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                        <div class="icon-box">
                            <div class="icon"><i class="fas fa-dna"></i></div>
                            <h4><a href="">Nemo Enim</a></h4>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                        <div class="icon-box">
                            <div class="icon"><i class="fas fa-wheelchair"></i></div>
                            <h4><a href="">Dele cardo</a></h4>
                            <p>Quis consequatur saepe eligendi voluptatem consequatur dolor consequuntur</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                        <div class="icon-box">
                            <div class="icon"><i class="fas fa-notes-medical"></i></div>
                            <h4><a href="">Divera don</a></h4>
                            <p>Modi nostrum vel laborum. Porro fugit error sit minus sapiente sit aspernatur</p>
                        </div>
                    </div> --}}

                </div>

            </div>
        </section><!-- End Services Section -->



        <!-- ======= About Section ======= -->
        <section id="about" class="about pt-0">
            <div class="container">
                <div class="section-title">
                    <h2 style="color: #458300">WHY CHOOSE US</h2>

                    <h4 class="text-uppercase" style="font-weight: 700; color:#10125E">
                        some of the remarkable features that make our center a unique and indispensable resource
                    </h4>
                </div>

                <div class="row">

                    <div
                        class="col-md-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-1 px-lg-5">

                        <div class="icon-box">
                            <div class="icon"><i class="fa-solid fa-charging-station"></i></div>
                            <h4 class="title"><a href="">Backup Generator</a></h4>
                            <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias
                                excepturi sint occaecati cupiditate non provident</p>
                        </div>

                        <div class="icon-box">
                            <div class="icon"><i class="fa-regular fa-snowflake"></i></div>
                            <h4 class="title"><a href="">Dehumidifier and humidifier System</a></h4>
                            <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                                praesentium voluptatum deleniti atque</p>
                        </div>

                        <div class="icon-box">
                            <div class="icon"><i class="fa-solid fa-temperature-low"></i></div>
                            <h4 class="title"><a href="">Pre-Cool/Heat Room</a></h4>
                            <p class="description">Explicabo est voluptatum asperiores consequatur magnam. Et veritatis
                                odit. Sunt aut deserunt minus aut eligendi omnis</p>
                        </div>

                    </div>
                    <div
                        class="col-md-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-1 px-lg-5">

                        <div class="icon-box">
                            <div class="icon"><i class="fa-solid fa-vial-virus"></i></div>
                            <h4 class="title"><a href="">Laboratory Equipment and Facility</a></h4>
                            <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias
                                excepturi sint occaecati cupiditate non provident</p>
                        </div>

                        <div class="icon-box">
                            <div class="icon"><i class="fa-solid fa-seedling"></i></div>
                            <h4 class="title"><a href="">Favorable Environment
                                    for Quality Products </a></h4>
                            <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui
                                blanditiis
                                praesentium voluptatum deleniti atque</p>
                        </div>

                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-gift"></i></div>
                            <h4 class="title"><a href="">Manual Packing</a></h4>
                            <p class="description">Explicabo est voluptatum asperiores consequatur magnam. Et veritatis
                                odit. Sunt aut deserunt minus aut eligendi omnis</p>
                        </div>

                    </div>

                </div>

            </div>
        </section><!-- End About Section -->




        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials pt-0">
            <div class="container">

                <div class="section-title">
                    <h2 style="color: #458300">CLIENTS FEEDBACK</h2>

                    <h4 class="text-uppercase" style="font-weight: 700; color:#10125E">
                        WHAT OUR CLIENTS SAY
                    </h4>
                </div>

                <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img"
                                        alt="">
                                    <h3>Saul Goodman</h3>
                                    <h4>Ceo &amp; Founder</h4>
                                    <p>
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        Proin iaculis purus consequat sem cure digni ssim donec porttitora entum
                                        suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et.
                                        Maecen aliquam, risus at semper.
                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img"
                                        alt="">
                                    <h3>Sara Wilsson</h3>
                                    <h4>Designer</h4>
                                    <p>
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        Export tempor illum tamen malis malis eram quae irure esse labore quem cillum
                                        quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat
                                        irure amet legam anim culpa.
                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img"
                                        alt="">
                                    <h3>Jena Karlis</h3>
                                    <h4>Store Owner</h4>
                                    <p>
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem
                                        veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis
                                        sint minim.
                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img"
                                        alt="">
                                    <h3>Matt Brandon</h3>
                                    <h4>Freelancer</h4>
                                    <p>
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim
                                        fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore
                                        quem dolore labore illum veniam.
                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img"
                                        alt="">
                                    <h3>John Larson</h3>
                                    <h4>Entrepreneur</h4>
                                    <p>
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor
                                        noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam
                                        esse veniam culpa fore nisi cillum quid.
                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section><!-- End Testimonials Section -->


    </main>


@endsection
