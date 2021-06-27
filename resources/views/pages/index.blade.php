@extends('template.master')
@section('title' , __('index.title'))
@section('content')

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center">
                    <h1 data-aos="fade-up">{{__('index.company_name')}}</h1>
                    <h2 data-aos="fade-up" data-aos-delay="400">{{__('index.short_description')}}</h2>
                    <div data-aos="fade-up" data-aos-delay="600">
                        <div class="text-center text-lg-start">
                            <a href="#about"
                               class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center {{app()->getLocale() == 'ar' ? 'float-end' : 'float-start'}}">
                                <span>{{__('index.who_we_are')}}</span>
                                <i class="bi bi-arrow-right mx-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                    <img src="{{asset('assets/img/img_site.jpg')}}" class="img-fluid" alt="">
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
                            <h2>{{__('index.who_we_are')}}</h2>
                            <h5 style="line-height: 40px">{{__('index.who_description')}}</h5>
                            {{--                            <p>--}}
                            {{--                                Dyarat Dyarat Dyarat Dyarat Dyarat Dyarat Dyarat Dyarat Dyarat Dyarat Dyarat Dyarat--}}
                            {{--                                Dyarat--}}
                            {{--                                Dyarat Dyarat Dyarat Dyarat Dyarat Dyarat.--}}
                            {{--                            </p>--}}
                            <div class="text-center text-lg-start">
                                <a href="{{asset('assets/profile/deyarat_profile.pdf')}}"
                                   class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                                    <span>{{__('index.more')}}</span>
                                    <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                        <img src="{{asset('assets/img/img_site.jpg')}}" class="img-fluid rounded-3" alt="">
                    </div>

                </div>
            </div>

        </section><!-- End About Section -->

        <!-- ======= Values Section ======= -->
        <section id="values" class="values">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>{{__('index.our_company')}}</h2>
                    <p>{{__('index.mother_company')}}</p>
                </header>

                <div class="row">

                    <div class="col-lg-3">
                        <div class="box" data-aos="fade-up" data-aos-delay="200">
                            <img class="img-fluid" src="{{asset('assets/img/company/dar_alqyas_logo.png')}}"
                                 alt="{{__('companies/qyas.company_name')}}">
                            <h3>{{__('companies/qyas.company_name')}}</h3>
                            <p>{{\Illuminate\Support\Str::words(__('companies/qyas.company_description') , 8 , ' ...')}}</p>
                            <a class="text-center d-block my-5" href="https://www.homtrading.com">www.homtrading.com</a>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="box" data-aos="fade-up" data-aos-delay="200">
                            <img class="img-fluid" src="{{asset('assets/img/company/najat.png')}}"
                                 alt="{{__('companies/qyas.company_name')}}">
                            <h3>{{__('companies/najat.company_name')}}</h3>
                            <p>{{\Illuminate\Support\Str::words(__('companies/najat.company_description') , 8 , ' ...')}}</p>
                            <a class="text-center d-block my-5"
                               href="https://www.dar-alnajat.com">www.dar-alnajat.com</a>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="box" data-aos="fade-up" data-aos-delay="200">
                            <img class="img-fluid" src="{{asset('assets/img/company/daras.png')}}"
                                 alt="{{__('companies/aldares.company_name')}}">
                            <h3>{{__('companies/aldares.company_name')}}</h3>
                            <p>{{\Illuminate\Support\Str::words(__('companies/aldares.company_description') , 8 , ' ...')}}</p>
                            <a class="text-center d-block my-5" href="http://www.aldaris.net">www.aldaris.net</a>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="box" data-aos="fade-up" data-aos-delay="200">
                            <img class="img-fluid" src="{{asset('assets/img/company/caterer.png')}}"
                                 alt="{{__('companies/caterer.company_name')}}">
                            <h3>{{__('companies/caterer.company_name')}}</h3>
                            <p>{{\Illuminate\Support\Str::words(__('companies/caterer.company_description') , 8 , ' ...')}}</p>
                            <a class="text-center d-block my-5"
                               href="https://www.catererhouse.com">www.catererhouse.com</a>
                        </div>
                    </div>
                </div>
            </div>

        </section><!-- End Values Section -->
    </main><!-- End #main -->

@endsection
