@extends('template.master')
@section('title' , __('project.title'))
@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <ol>
                    <li><a href="{{route('index_page')}}">{{__('navbar.home')}}</a></li>
                    <li>{{__('project.title')}}</li>
                </ol>
                <h2 class="text-center">{{__('project.project_description')}}</h2>

            </div>
        </section><!-- End Breadcrumbs -->

        <section class="inner-page">
            <div class="container">
{{--                <img class="company_logo" src="{{asset('assets/img/company/daras.png')}}" alt="">--}}
{{--                <a class="text-center d-block my-5" href="http://www.aldaris.net">www.aldaris.net</a>--}}
{{--                <p style="font-size: 20px;color:#013289">--}}
{{--                    {{__('companies/aldares.company_description')}}--}}
{{--                </p>--}}
            </div>

        </section>

    </main><!-- End #main -->
@endsection
