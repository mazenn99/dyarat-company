@extends('template.master')
@section('title' , __('index.title'))
@section('content')

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center">
                    <h1 data-aos="fade-up">Dyarat Dyarat Dyarat Dyarat Dyarat Dyarat </h1>
                    <h2 data-aos="fade-up" data-aos-delay="400">Dyarat Dyarat Dyarat Dyarat Dyarat Dyarat Dyarat
                        Dyarat</h2>
                    <div data-aos="fade-up" data-aos-delay="600">
                        <div class="text-center text-lg-start">
                            <a href="#about"
                               class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                                <span>about company</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                    <img src="assets/img/hero-img.png" class="img-fluid" alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <main id="main">
        <!-- ======= About Section ======= -->
        <section id="about" class="about">

            <div class="container" data-aos="fade-up">
                <div class="row gx-0">

                    <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up"
                         data-aos-delay="200">
                        <div class="content">
                            <h3>Who We Are</h3>
                            <h2>Dyarat Dyarat Dyarat Dyarat Dyarat Dyarat Dyarat Dyarat Dyarat Dyarat Dyarat Dyarat
                                Dyarat
                                Dyarat.</h2>
                            <p>
                                Dyarat Dyarat Dyarat Dyarat Dyarat Dyarat Dyarat Dyarat Dyarat Dyarat Dyarat Dyarat
                                Dyarat
                                Dyarat Dyarat Dyarat Dyarat Dyarat Dyarat.
                            </p>
                            <div class="text-center text-lg-start">
                                <a href="#"
                                   class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                                    <span>Read More</span>
                                    <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                        <img src="assets/img/about.jpg" class="img-fluid" alt="">
                    </div>

                </div>
            </div>

        </section><!-- End About Section -->

        <!-- ======= Values Section ======= -->
        <section id="values" class="values">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>Our Values</h2>
                    <p>Dyarat Dyarat Dyarat Dyarat Dyarat Dyarat</p>
                </header>

                <div class="row">

                    <div class="col-lg-4">
                        <div class="box" data-aos="fade-up" data-aos-delay="200">
                            <img src="assets/img/values-1.png" class="img-fluid" alt="">
                            <h3>Dyarat Dyarat Dyarat Dyarat Dyarat Dyarat</h3>
                            <p>Dyarat Dyarat Dyarat Dyarat Dyarat Dyarat Dyarat Dyarat Dyarat Dyarat Dyarat Dyarat.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 mt-4 mt-lg-0">
                        <div class="box" data-aos="fade-up" data-aos-delay="400">
                            <img src="assets/img/values-2.png" class="img-fluid" alt="">
                            <h3>Dyarat Dyarat Dyarat Dyarat Dyarat Dyarat</h3>
                            <p>Dyarat Dyarat Dyarat Dyarat Dyarat Dyarat Dyarat Dyarat Dyarat Dyarat Dyarat Dyarat.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 mt-4 mt-lg-0">
                        <div class="box" data-aos="fade-up" data-aos-delay="600">
                            <img src="assets/img/values-3.png" class="img-fluid" alt="">
                            <h3>Dyarat Dyarat Dyarat Dyarat Dyarat Dyarat.</h3>
                            <p>Dyarat Dyarat Dyarat Dyarat Dyarat Dyarat Dyarat Dyarat Dyarat Dyarat Dyarat Dyarat.</p>
                        </div>
                    </div>

                </div>

            </div>

        </section><!-- End Values Section -->
    </main><!-- End #main -->

@endsection
