@extends('frontend.layout.master')
@section('about_menu_active', 'active')
@section('page_title')
    About us
@endsection

@section('custom_css')

    <style>
        .social-links a {
            font-size: 18px;
            display: inline-block;
            background: #10125e;
            color: #fff;
            line-height: 1;
            padding: 8px 0;
            margin-right: 4px;
            border-radius: 50%;
            text-align: center;
            width: 36px;
            height: 36px;
            transition: 0.3s;
        }
    </style>
@endsection
@section('content')
    <main id="main" style="min-height: 90vh;">
        <div class="inner_page_hero d-flex flex-column align-items-center position-relative">
            <img src="{{ asset('frontend_assets/common/contact_hero.png') }}" alt="" class="w-100">

            <div class="text-center"
                style="background-color: #10125e; padding: 15px 0px; border-radius: 10px; width:40%;position: absolute;bottom: -35px;">
                <h5 class="text-white mb-0"><b>CONTACT US</b></h5>
            </div>
        </div>



        <!-- =======  Section ======= -->
        <section id="" class="">
            <div class="container mt-5">
                <div class="row gy-4">
                    <div class="col-md-6">
                        <h6 class="text-uppercase" style="color: #458300"><b>CONTACT US FOR ANY QUESTIONS</b></h6>
                        <br>
                        <h6 class="text-uppercase" style="color: #10125e"><b>Registered Office</b></h6>
                        <p style="color: #10125e">House: 34, Old DOHS, Dhaka cantonment. Banani, Dhaka-1206
                        </p>
                        <br>
                        <h6 class="text-uppercase" style="color: #10125e"><b>Industry</b></h6>
                        <p style="color: #10125e">Holding: 01, Ward: 05, Road: 02, Block: B, Ashulia, Dhaka
                        </p>

                    </div>
                    <div class="col-md-6">
                        <h6 class="text-uppercase" style="color: #458300"><b>Follow our social network</b></h6>

                        <div class="social-links pt-3 pt-md-0">
                            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact pt-0">
            <div class="container">

                <div class="section-title">
                    <h2 style="color: #458300">GET IN TOUCH</h2>
                    {{-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                        consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia
                        fugiat sit in iste officiis commodi quidem hic quas.</p> --}}
                </div>
            </div>



            <div class="container mb-5">
                <div class="row mt-1 justify-content-center">

                    <div class="col-md-6 mt-5 mt-lg-0">

                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Your Name" required>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Your Email" required>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone"
                                    required>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="address" id="address"
                                    placeholder="Address" required>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="subject" id="subject"
                                    placeholder="Subject" required>
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center"><button type="submit" style="background-color: #10125e">Send
                                    Message</button></div>
                        </form>

                    </div>

                </div>

            </div>

            <div>
                <iframe style="border:0; width: 100%; height: 350px;"
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621"
                    frameborder="0" allowfullscreen></iframe>
            </div>
        </section><!-- End Contact Section -->

    </main>


@endsection
