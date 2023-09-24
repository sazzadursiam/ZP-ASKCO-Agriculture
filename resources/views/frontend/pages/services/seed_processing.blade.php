@extends('frontend.layout.master')
@section('services_menu_active', 'active')
@section('processing_menu_active', 'active')
@section('page_title')
    Seed Processing
@endsection
@section('custom_css')
    <style>
        .seed_box {
            box-shadow: 0px 4px 25px 0px rgba(0, 0, 0, 0.10);
            padding: 10px 20px;
            border-radius: 10px;
            min-height: 95px;
            margin-bottom: 20px;
            display: flex;
            align-items: center
        }

        .seed_box p {
            margin-bottom: 0;
        }
    </style>
@endsection
@section('content')
    <main id="main" style="min-height: 90vh;">
        <div class="inner_page_hero d-flex flex-column align-items-center position-relative">
            <img src="{{ asset('frontend_assets/common/seed-processing.png') }}" alt="" class="w-100">

            <div class="text-center inner-box">
                <h5 class="text-white mb-0 text-uppercase"><b>Seed Processing</b></h5>
            </div>
        </div>



        <!-- ======= Departments Section ======= -->
        <section id="departments" class="departments">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-md-12">
                        <div class="seed_box">
                            <p>
                                <i class="fa-solid fa-circle position-relative me-2" style="font-size: 5px;top:-3px"></i> We
                                have
                                a
                                separate
                                work shade for
                                fumigation, grading,
                                packaging and necessary
                                space for sun
                                drying is also available. We have Unit-1 and Unit-2 Processing Plant Seed Cleaning/ Grading,
                                Gravity Separator, Treatment-Drying, Packing. Inkjet Print & delivery also. Working Power &
                                Capacity at askco MSP Centre Limited. Ashulia, Dhaka.
                            </p>
                        </div>
                        <div class="seed_box">
                            <p>
                                <i class="fa-solid fa-circle position-relative me-2" style="font-size: 5px;top:-3px"></i>
                                Rice Seed Cleaning grading per/Day Capacity up to 100MT.
                            </p>
                        </div>
                        <div class="seed_box">
                            <p>
                                <i class="fa-solid fa-circle position-relative me-2" style="font-size: 5px;top:-3px"></i>
                                Seed Gravity Separator Per/Day Capacity up to 80MT.
                            </p>
                        </div>
                        <div class="seed_box">
                            <p>
                                <i class="fa-solid fa-circle position-relative me-2" style="font-size: 5px;top:-3px"></i>
                                Seed Treatment & Auto Drying Per/Day Capacity up to 80MT.
                            </p>
                        </div>
                        <div class="seed_box">
                            <p>
                                <i class="fa-solid fa-circle position-relative me-2" style="font-size: 5px;top:-3px"></i>
                                Small Seed Treater Cum Coating Dressing Drum for Vegetables capacity 200 kg per hour.
                            </p>
                        </div>
                        <div class="seed_box">
                            <p>
                                <i class="fa-solid fa-circle position-relative me-2" style="font-size: 5px;top:-3px"></i>
                                Small Seed Treater Cum Coating Dressing Drum for Vegetables capacity 200 kg per hour.
                            </p>
                        </div>
                        <div class="seed_box">
                            <p>
                                <i class="fa-solid fa-circle position-relative me-2" style="font-size: 5px;top:-3px"></i>
                                Manual Packing (Man Power) Per/Day Capacity up to 50 MT.
                            </p>
                        </div>
                        <div class="seed_box">
                            <p>
                                <i class="fa-solid fa-circle position-relative me-2" style="font-size: 5px;top:-3px"></i>
                                Manual Packing (Man Power) Per/Day Capacity up to 50 MT.
                            </p>
                        </div>
                        <div class="seed_box">
                            <p>
                                <i class="fa-solid fa-circle position-relative me-2" style="font-size: 5px;top:-3px"></i>
                                Auto Packaging Machine Per/Day Capacity up to 30 MT.
                            </p>
                        </div>
                        <div class="seed_box">
                            <p>
                                <i class="fa-solid fa-circle position-relative me-2" style="font-size: 5px;top:-3px"></i>
                                Inkjet Printing Per/Day Capacity 35000 Pcs Pouch.
                            </p>
                        </div>
                        <div class="seed_box">
                            <p>
                                <i class="fa-solid fa-circle position-relative me-2" style="font-size: 5px;top:-3px"></i>
                                Specialized Machinery for Seed Manual & Auto Packaging. Re-Packing, Bulking & Other works
                            </p>
                        </div>

                    </div>
                </div>
                <div class="row py-5">
                    <div class="col-md-6 col-lg-3 py-2 text-center">
                        <img class="img-fluid" src="{{ asset('frontend_assets/common/seed_processing/1.png') }}"
                            alt="">
                    </div>
                    <div class="col-md-6 col-lg-3 py-2 text-center">
                        <img class="img-fluid" src="{{ asset('frontend_assets/common/seed_processing/2.png') }}"
                            alt="">
                    </div>
                    <div class="col-md-6 col-lg-3 py-2 text-center">
                        <img class="img-fluid" src="{{ asset('frontend_assets/common/seed_processing/3.png') }}"
                            alt="">
                    </div>
                    <div class="col-md-6 col-lg-3 py-2 text-center">
                        <img class="img-fluid" src="{{ asset('frontend_assets/common/seed_processing/4.png') }}"
                            alt="">
                    </div>
                </div>
            </div>
        </section><!-- End Departments Section -->

    </main>


@endsection
