@extends('frontend.layout.master')
@section('services_menu_active', 'active')
@section('transport_menu_active', 'active')
@section('page_title')
    Transport
@endsection
@section('custom_css')

    <style>
        .small_box {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 142px;
            width: 142px;
            border: 1px solid #000000;
            box-shadow: 0px 4px 25px 0px rgba(0, 0, 0, 0.10);
            background: #ffffff;
        }

        .small_box h4 {
            font-size: 30px;
            color: #10125E;
        }

        .small_box p {
            color: #10125E;
        }

        .custom__hr {
            margin-top: -70px;
            margin-left: 30px;
            z-index: -1;
        }

        @media (max-width: 768px) {
            .small_box {
                height: 80px;
                width: 100%;
            }

            .small_box h4 {
                font-size: 15px;
            }

            .small_box p {
                font-size: 12px;
            }
            .custom__hr {
            margin-top: -40px;
        }
        }
    </style>
@endsection
@section('content')
    <main id="main" style="min-height: 90vh;">
        <div class="inner_page_hero d-flex flex-column align-items-center position-relative">
            <img src="{{ asset('frontend_assets/common/transport.png') }}" alt="" class="w-100">

            <div class="text-center inner-box">
                <h5 class="text-white mb-0 text-uppercase"><b>Transport facility</b></h5>
            </div>
        </div>



        <!-- ======= Departments Section ======= -->
        <section id="departments" class="departments">
            <div class="container py-5">
                <div class="row pb-5">
                    <div class="col-lg-9">
                        <h4>Owned Transport Facility:</h3>
                            <ul>
                                <li>
                                    Truck (Covered van) 2 nos. capacity: 15 MT (Ashok Leyland)
                                </li>

                                <li>
                                    Truck (Open) 3 nos. capacity:15 MT (Tata/ Ashok Leyland)
                                </li>

                                <li>
                                    Small Pickup 2 Nos. capacity: 3 MT (Tata)
                                </li>

                                <li>
                                    Medium Pickup 2 Nos. capacity 7MT (Tata)
                                </li>
                            </ul>
                            <div class="row py-5">
                                <div class="col-3" style="z-index: 1">
                                    <div class="small_box">
                                        <h4 class="mb-0">15 MT</h4>
                                        <p class="mb-0">Ashok</p>
                                        <p class="mb-0">Leyland</p>
                                    </div>
                                </div>
                                <div class="col-3" style="z-index: 1">
                                    <div class="small_box">
                                        <h4 class="mb-0">15 MT</h4>
                                        <p class="mb-0">Tata/ Ashok</p>
                                        <p class="mb-0">Leyland</p>
                                    </div>
                                </div>
                                <div class="col-3" style="z-index: 1">
                                    <div class="small_box">
                                        <h4 class="mb-0">3 MT</h4>
                                        <p class="mb-0">Tata</p>
                                    </div>
                                </div>
                                <div class="col-3" style="z-index: 1">
                                    <div class="small_box">
                                        <h4 class="mb-0">7 MT</h4>
                                        <p class="mb-0">Tata</p>
                                    </div>
                                </div>
                                <div class="col-10">
                                    <hr class="custom__hr">
                                </div>
                            </div>
                    </div>
                    <div class="col-lg-3 text-center">
                        <img class="img-fluid" src="{{ asset('frontend_assets/common/transport/1.png') }}" alt="">
                    </div>
                </div>
                <div class="row pb-5">
                    <div class="col-lg-3 text-center order-1 order-md-0">
                        <img class="img-fluid" src="{{ asset('frontend_assets/common/transport/2.png') }}" alt="">
                    </div>
                    <div class="col-lg-9 text-end order-0 order-md-1">
                        <h4>Keeping Perishables Fresh, Every Mile of the Journey</h4>
                        <p>
                            At Askco MSP Center Ltd., our transport solutions ensure your cold storage goods arrive at their
                            destination as fresh as the moment they were stored. Discover our reliable and
                            temperature-controlled transportation services today.
                        </p>
                        <h4>Our Fleet</h4>
                        <p>
                            Our state-of-the-art fleet of refrigerated trucks and containers are equipped with advanced
                            temperature control systems to ensure that your goods remain at the precise temperature they
                            require throughout the entire journey. Whether you're dealing with frozen foods,
                            pharmaceuticals, or any other temperature-sensitive products, our fleet is up to the task.
                        </p>
                        <h4>Temperature Management</h4>
                        <p>
                            Maintaining the right temperature is essential in preserving the quality and safety of your
                            goods. Our vehicles are equipped with cutting-edge monitoring technology, enabling real-time
                            tracking and remote temperature adjustments. This guarantees that your products are in the best
                            possible condition upon arrival at their destination.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-9">
                        <h4>Experienced Drivers</h4>
                        <p>
                            Our team of experienced and well-trained drivers is dedicated to handling cold storage
                            transportation with the utmost care. They are well-versed in the unique challenges of
                            transporting temperature-sensitive cargo, ensuring safe and timely deliveries.
                        </p>
                        <h4>Customized Solutions</h4>
                        <p>
                            At Askco MSP Center Ltd. we understand that every client's needs are different. That's why we
                            offer customizable transportation solutions to accommodate your specific requirements. Whether
                            you need regular deliveries, on-demand services, or specialized handling for delicate products,
                            we've got you covered.
                            Efficiency and Reliability: We take pride in our commitment to efficiency and reliability. We
                            optimize routes, minimize transit times, and ensure that your cargo reaches its destination on
                            schedule. Our dedication to punctuality minimizes the risk of product spoilage and ensures that
                            your customers receive their orders in perfect condition.
                        </p>
                        <h4>Sustainability</h4>
                        <p>
                            We're committed to environmental responsibility. Our fleet is equipped with
                            Eco-friendly technologies, and we employ sustainable transportation practices to reduce our
                            carbon footprint. With Askco MSP Center Ltd., you can transport your goods while also
                            contributing to a greener future.
                        </p>
                    </div>
                    <div class="col-lg-3 text-center">
                        <img class="img-fluid" src="{{ asset('frontend_assets/common/transport/3.png') }}" alt="">
                    </div>
                </div>
            </div>
        </section>

    </main>


@endsection
