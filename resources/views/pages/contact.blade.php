@extends('template.master')
@section('title' , __('contact.title'))
@section('content')
<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">

    <div class="container" data-aos="fade-up">

        <header class="section-header">
            <!--                <h2>Contact</h2>-->
            <p class="mt-5">{{__('contact.title')}}</p>
        </header>

        <div class="row gy-4">

            <div class="col-lg-6">

                <div class="row gy-4">
                    <div class="col-md-6">
                        <div class="info-box">
                            <i class="bi bi-geo-alt"></i>
                            <h3>{{__('contact.address')}}</h3>
                            <p>{{__('contact.city')}},<br>{{__('contact.city_district')}}</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="info-box">
                            <i class="bi bi-telephone"></i>
                            <h3>{{__('contact.call_us')}}</h3>
                            <p>
                                <a href="tel:+966114740022">+966114740022</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="info-box">
                            <i class="bi bi-envelope"></i>
                            <h3>{{__('contact.email')}}</h3>
                            <p><a href="mailto:public.relation@deyarat.com">public.relation@deyarat.com</a>
                                <br>
                                <a href="mailto:info@deyarat.com">info@deyarat.com</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="info-box">
                            <i class="bi bi-clock"></i>
                            <h3>{{__('contact.open')}}</h3>
                            <p>{{__('contact.sun')}} - {{__('contact.thur')}}<br>8:00{{__('contact.am')}} - 03:00{{__('contact.pm')}}</p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-lg-6">
                <form action="{{route('sendMsg')}}" method="post" class="php-email-form">
                    @csrf
                    <div class="row gy-4">

                        <div class="col-md-6">
                            <input type="text" name="name" class="form-control" placeholder="{{__('contact.name')}}" required>
                            @error('name')
                                <small class="text text-danger">{{$message}}</small>
                            @enderror
                        </div>

                        <div class="col-md-6 ">
                            <input type="email" class="form-control" name="email" placeholder="{{__('contact.your_email')}}" required>
                            @error('email')
                            <small class="text text-danger">{{$message}}</small>
                            @enderror
                        </div>

                        <div class="col-md-12">
                            <input type="text" class="form-control" name="subject" placeholder="{{__('contact.subject')}}" required>
                            @error('subject')
                            <small class="text text-danger">{{$message}}</small>
                            @enderror
                        </div>

                        <div class="col-md-12">
                                <textarea class="form-control" name="message" rows="6" placeholder="{{__('contact.message')}}"
                                          required></textarea>
                            @error('message')
                            <small class="text text-danger">{{$message}}</small>
                            @enderror
                        </div>

                        <div class="col-md-12 text-center">
                        @if(session()->has('success'))
                            <div class="sent-message">{{session()->get('success')}}</div>
                        @endif
                        </div>

                    </div>
                    <button class="btn btn-primary">{{__('contact.send_msg')}}</button>
                </form>

            </div>

        </div>

    </div>

</section><!-- End Contact Section -->

</main><!-- End #main -->
