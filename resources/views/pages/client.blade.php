@extends('template.master')
@section('title' , __('contact.title'))
@section('content')
    <main id="main">
        <section id="values" class="values">

            <div class="container" data-aos="fade-up">

                <header class="section-header mb-5">
                    <h1 class="mt-5">
                        {{__('client.shuraka')}}
                    </h1>
                </header>

                <div class="row">

                    <div class="col-lg-3">
                        <div class="box" style="height: 100%" data-aos="fade-up" data-aos-delay="200">
                            <img class="img-fluid" src="{{asset('assets/img/company/aramcologo.png')}}"
                                 alt="{{__('client.aramco')}}">
{{--                            <h3>{{__('client.aramco')}}</h3>--}}
{{--                            <p>{{\Illuminate\Support\Str::words(__('companies/qyas.company_description') , 8 , ' ...')}}</p>--}}
{{--                            <a class="text-center d-block my-5" href="https://www.homtrading.com">www.homtrading.com</a>--}}
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="box" style="height: 100%" data-aos="fade-up" data-aos-delay="200">
                            <img class="img-fluid" src="{{asset('assets/img/company/riyadh.svg')}}"
                                 alt="{{__('companies/qyas.company_name')}}">
{{--                            <h3>{{__('companies/najat.company_name')}}</h3>--}}
{{--                            <p>{{\Illuminate\Support\Str::words(__('companies/najat.company_description') , 8 , ' ...')}}</p>--}}
{{--                            <a class="text-center d-block my-5"--}}
{{--                               href="https://www.dar-alnajat.com">www.dar-alnajat.com</a>--}}
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="box" style="height: 100%" data-aos="fade-up" data-aos-delay="200">
                            <img class="img-fluid" src="{{asset('assets/img/company/dallah.png')}}"
                                 alt="{{__('companies/aldares.company_name')}}">
{{--                            <h3>{{__('companies/aldares.company_name')}}</h3>--}}
{{--                            <p>{{\Illuminate\Support\Str::words(__('companies/aldares.company_description') , 8 , ' ...')}}</p>--}}
{{--                            <a class="text-center d-block my-5" href="http://www.aldaris.net">www.aldaris.net</a>--}}
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="box" style="height: 100%" data-aos="fade-up" data-aos-delay="200">
                            <img class="img-fluid" src="{{asset('assets/img/company/saud.png')}}"
                                 alt="{{__('companies/caterer.company_name')}}">
{{--                            <h3>{{__('companies/caterer.company_name')}}</h3>--}}
{{--                            <p>{{\Illuminate\Support\Str::words(__('companies/caterer.company_description') , 8 , ' ...')}}</p>--}}
{{--                            <a class="text-center d-block my-5"--}}
{{--                               href="https://www.catererhouse.com">www.catererhouse.com</a>--}}
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="box" style="height: 100%" data-aos="fade-up" data-aos-delay="200">
                            <img class="img-fluid" src="{{asset('assets/img/company/min.png')}}"
                                 alt="{{__('companies/caterer.company_name')}}">
{{--                            <h3>{{__('companies/caterer.company_name')}}</h3>--}}
{{--                            <p>{{\Illuminate\Support\Str::words(__('companies/caterer.company_description') , 8 , ' ...')}}</p>--}}
{{--                            <a class="text-center d-block my-5"--}}
{{--                               href="https://www.catererhouse.com">www.catererhouse.com</a>--}}
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="box" style="height: 100%" data-aos="fade-up" data-aos-delay="200">
                            <img class="img-fluid" src="{{asset('assets/img/company/naql.svg')}}"
                                 alt="{{__('companies/caterer.company_name')}}">
{{--                            <h3>{{__('companies/caterer.company_name')}}</h3>--}}
{{--                            <p>{{\Illuminate\Support\Str::words(__('companies/caterer.company_description') , 8 , ' ...')}}</p>--}}
{{--                            <a class="text-center d-block my-5"--}}
{{--                               href="https://www.catererhouse.com">www.catererhouse.com</a>--}}
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="box" style="height: 100%" data-aos="fade-up" data-aos-delay="200">
                            <img class="img-fluid" src="{{asset('assets/img/company/esmint.png')}}"
                                 alt="{{__('companies/caterer.company_name')}}">
{{--                            <h3>{{__('companies/caterer.company_name')}}</h3>--}}
{{--                            <p>{{\Illuminate\Support\Str::words(__('companies/caterer.company_description') , 8 , ' ...')}}</p>--}}
{{--                            <a class="text-center d-block my-5"--}}
{{--                               href="https://www.catererhouse.com">www.catererhouse.com</a>--}}
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="box" style="height: 100%" data-aos="fade-up" data-aos-delay="200">
                            <img class="img-fluid" src="{{asset('assets/img/company/moi.png')}}"
                                 alt="{{__('companies/caterer.company_name')}}">
{{--                            <h3>{{__('companies/caterer.company_name')}}</h3>--}}
{{--                            <p>{{\Illuminate\Support\Str::words(__('companies/caterer.company_description') , 8 , ' ...')}}</p>--}}
{{--                            <a class="text-center d-block my-5"--}}
{{--                               href="https://www.catererhouse.com">www.catererhouse.com</a>--}}
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="box" style="height: 100%" data-aos="fade-up" data-aos-delay="200">
                            <img class="img-fluid" src="{{asset('assets/img/company/sabic.svg')}}"
                                 alt="{{__('companies/caterer.company_name')}}">
{{--                            <h3>{{__('companies/caterer.company_name')}}</h3>--}}
{{--                            <p>{{\Illuminate\Support\Str::words(__('companies/caterer.company_description') , 8 , ' ...')}}</p>--}}
{{--                            <a class="text-center d-block my-5"--}}
{{--                               href="https://www.catererhouse.com">www.catererhouse.com</a>--}}
                        </div>
                    </div>
                </div>
            </div>

        </section><!-- End Values Section -->
    </main>
@endsection
