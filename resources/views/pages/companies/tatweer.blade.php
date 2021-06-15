@extends('template.master')
@section('title' , __('companies/tatweer.company_name'))
@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <ol>
                    <li><a href="{{route('index_page')}}">{{__('navbar.home')}}</a></li>
                    <li>{{__('companies/tatweer.company_name')}}</li>
                </ol>
                <h2>{{__('companies/tatweer.company_name')}}</h2>

            </div>
        </section><!-- End Breadcrumbs -->

        <section class="inner-page">
            <div class="container">
                <img class="company_logo" src="{{asset('assets/img/company/houseofdeve.png')}}" alt="">
                <a class="text-center d-block my-5" href="http://www.hod.sa">www.hod.sa</a>
                <p style="font-size: 20px;color:#013289">
                    {{__('companies/tatweer.company_description')}}
                </p>
            </div>

        </section>

    </main><!-- End #main -->
@endsection
