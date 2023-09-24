@extends('frontend.layout.master')
@section('services_menu_active', 'active')
@section('packaging_menu_active', 'active')
@section('page_title')
    Seed Packaging
@endsection
@section('custom_css')
    <style>
        @media screen and (max-width: 575px) {
            .consultancy_that_empowers_you .consultancy_that_empowers_you_row {
                padding: 0px;
            }
        }

        @media (min-width: 575px) and (max-width: 767px) {
            .consultancy_that_empowers_you .consultancy_that_empowers_you_row {
                padding: 0px;
            }
        }

        @media (min-width: 767px) and (max-width: 991px) {
            .consultancy_that_empowers_you .consultancy_that_empowers_you_row {
                padding: 0px;
            }
        }

        @media (min-width: 991px) and (max-width: 1199px) {
            .consultancy_that_empowers_you .consultancy_that_empowers_you_row {
                padding: 25px;
            }
        }

        @media (min-width: 1199px) and (max-width: 1399px) {
            .consultancy_that_empowers_you .consultancy_that_empowers_you_row {
                padding: 35px;
            }
        }

        @media (min-width: 1399px) {
            .consultancy_that_empowers_you .consultancy_that_empowers_you_row {
                /* padding: 50px; */
            }
        }
    </style>
@endsection
@section('content')
    <main id="main" style="min-height: 90vh;">
        <div class="inner_page_hero d-flex flex-column align-items-center position-relative">
            <img src="{{ asset('frontend_assets/common/seed_packaging.png') }}" alt="" class="w-100">

            <div class="text-center"
                style="background-color: #10125e; padding: 15px 0px; border-radius: 10px; width:40%;position: absolute;bottom: -35px;">
                <h5 class="text-white mb-0 text-uppercase"><b>Seed Packaging</b></h5>
            </div>
        </div>



        <!-- ======= Departments Section ======= -->
        <section id="departments" class="departments">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-md-5 col-lg-4 consultancy_that_empowers_you">
                        <div class="row consultancy_that_empowers_you_row g-2 ">
                            <div class="col-6">
                                <img class="img-fluid p-1" src="{{ asset('frontend_assets/common/6.png') }}"
                                    style="width: 100%; border-radius: 10px;">

                            </div>
                            <div class="col-6">
                                <img class="img-fluid p-1" src="{{ asset('frontend_assets/common/7.png') }}"
                                    style="width: 100%; border-radius: 10px;">

                            </div>
                        </div>
                        <div class="row consultancy_that_empowers_you_row g-2 ">
                            <div class="col-6">
                                <img class="img-fluid p-1" src="{{ asset('frontend_assets/common/8.png') }}"
                                    style="width: 100%; border-radius: 10px;">

                            </div>
                            <div class="col-6">
                                <img class="img-fluid p-1" src="{{ asset('frontend_assets/common/9.png') }}"
                                    style="width: 100%; border-radius: 10px;">

                            </div>
                        </div>

                    </div>
                    <div class="col-md-7 col-lg-8 align-self-start">
                        <div class="row text-end">
                            <p><b>Key Features</b></p>
                            <p class="mb-2">Non-GMO and Heirloom Seeds</p>
                            <p class="mb-2">High Germination Rate</p>
                            <p class="mb-2">Freshly Harvested for Maximum Viability</p>
                            <p class="mb-2">Variety Pack: Includes a wide range of vegetables, herbs, and flowers</p>
                            <p class="mb-2">Expertly Selected for Home Gardening</p>
                        </div>
                        <br>
                        <div class="row text-end">
                            <p><b>Storage Information</b></p>
                            <p class="mb-2">Store unused seeds in a cool, dry place.</p>
                            <p class="mb-2">Reseal the packaging to maintain seed freshness.</p>
                            <p class="mb-2">Properly stored, these seeds can last for multiple planting seasons.</p>
                        </div>

                    </div>
                </div>

            </div>
        </section><!-- End Departments Section -->

        <!-- ======= Departments Section ======= -->
        <section id="departments" class="departments pt-0 pb-2">
            <div class="container mt-0">
                <div class="row">
                    <div class="col-12">
                        <p>At Askco MSP Center Ltd., we understand the critical importance of preserving the viability and
                            quality of seeds. Our seed packing services are designed to meet the unique needs of
                            agriculturalists, horticulturists, and seed banks. Here's why our seed packing services are the
                            best choice for safeguarding your valuable seeds: <br><br>

                            1. <b>Expert Handling:</b> Our skilled team possesses in-depth knowledge of various seed types,
                            ensuring proper handling, sorting, and packaging to maintain seed viability. <br>
                            2. <b>Temperature Control:</b> Cold storage is essential for preserving seed quality. Our
                            state-of-the-art cold storage facilities maintain the ideal temperature and humidity levels to
                            prevent seed degradation. <br>
                            3. <b>Customized Packaging:</b> We offer a range of packaging options, from moisture-resistant
                            containers to vacuum-sealed bags, tailored to your specific seed types and quantities. <br>
                            4. <b>Quality Assurance:</b> Rigorous quality checks and regular monitoring ensure that your
                            seeds
                            remain in prime condition throughout their stay in cold storage. <br>
                            5. <b>Traceability:</b> Our advanced tracking systems allow you to access real-time information
                            about your stored seeds, providing peace of mind and easy retrieval when needed. <br>

                            <br><br>
                            For the ultimate protection and preservation of your seeds, trust our seed packing services.
                            We're dedicated to maintaining the integrity of your valuable genetic resources.
                        </p>
                    </div>


                </div>

            </div>
        </section><!-- End Departments Section -->


        <!-- ======= Departments Section ======= -->
        <section id="departments" class="departments">
            <div class="container">
                <div class="row gy-4 mx-2 mx-md-0"style="box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1); border-radius: 10px;">

                    <div class="col-md-12 p-3 p-md-4 mt-0 details ">
                        <p class="text-center mb-2" style="color: #10125e;"><b>Care & Fare Controlled of Preserved
                                Product</b>
                        </p>
                        <p class="text-center mb-2">"Pre-Cool/ Pre-Heat room arrangement included."</p>
                        <p class="text-center mb-2">"Room temperature can be adjusted individually."</p>
                        <p class="text-center mb-2">"Different room temperature & humidity depends one ach product
                            category."
                        </p>
                        <p class="text-center mb-2">"Our whole preservation system centrally controlled by a <br> Modern &
                            Specialized Refrigeration machinery included which Lunched World <br> Famous "My-Com Compressor"
                            Made
                            by Joint Venture of Japan, Thailand, & Denmark Origin."</p>
                    </div>

                </div>
            </div>
        </section>
        <!-- ======= Departments Section ======= -->
        <section id="departments" class="departments">
            <div class="container">
                <div class="row gy-4 mx-2 mx-md-0"style="box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1); border-radius: 10px;">

                    <div class="col-md-12 p-3 p-md-4 mt-0 details ">
                        <p class="text-center mb-2" style="color: #10125e;"><b>Feature of the project Fruits Storage</b>
                        </p>
                        <p class="text-center mb-2">"The storage has the capacity to preserve fresh fruits separately in
                            rack wise."</p>
                        <p class="text-center mb-2">"It has dehumidifier & humidifier system which can keep high humid & low
                            humid products."</p>
                        <p class="text-center mb-2">"We Ensure Favorable Environment for Quality Product."
                        </p>
                        <p class="text-center mb-2">"The industry is environment friendly and no child labor employed at any
                            stage."</p>
                    </div>

                </div>
            </div>
        </section>

    </main>


@endsection
