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
                                <h3 style="color:#013289" class="text-center">
                                    {{__('project.our_project')}}
                                </h3>
            </div>

            <div class="row d-flex justify-content-center mt-100 mb-100">
                <div class="col-lg-6">
                    <div class="card">
{{--                        <div class="card-body text-center">--}}
{{--                            <h4 class="card-title m-b-0">{{__('project.our_project')}}</h4>--}}
{{--                        </div>--}}
                        <hr>
                        <ul class="list-style-none">
                            <li class="d-flex no-block card-body"><i class="fa fa-check-circle w-30px m-t-5"></i>
                                <div class="ml-auto">
                                    <h4>
                                        {{__('project.first_project')}}
                                    </h4>
                                </div>
                            </li>
                            <hr>
                            <li class="d-flex no-block card-body"><i class="fa fa-check-circle w-30px m-t-5"></i>
                                <div class="ml-auto">
                                    <h4>
                                        {{__('project.second_project')}}
                                    </h4>
                                </div>
                            </li>
                            <hr>
                            <li class="d-flex no-block card-body"><i class="fa fa-check-circle w-30px m-t-5"></i>
                                <div class="ml-auto">
                                    <h4>
                                        {{__('project.third_project')}}
                                    </h4>
                                </div>
                            </li>
                            <hr>
                            <li class="d-flex no-block card-body"><i class="fa fa-check-circle w-30px m-t-5"></i>
                                <div class="ml-auto">
                                    <h4>
                                        {{__('project.fourth_project')}}
                                    </h4>
                                </div>
                            </li>
                            <hr>
                            <li class="d-flex no-block card-body"><i class="fa fa-check-circle w-30px m-t-5"></i>
                                <div class="ml-auto">
                                    <h4>
                                        {{__('project.fifth_project')}}
                                    </h4>
                                </div>
                            </li>
                            <hr>
                            <li class="d-flex no-block card-body"><i class="fa fa-check-circle w-30px m-t-5"></i>
                                <div class="ml-auto">
                                    <h4>
                                        {{__('project.sixth_project')}}
                                    </h4>
                                </div>
                            </li>
                            <hr>
                            <li class="d-flex no-block card-body"><i class="fa fa-check-circle w-30px m-t-5"></i>
                                <div class="ml-auto">
                                    <h4>
                                        {{__('project.seventh_project')}}
                                    </h4>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </section>

    </main><!-- End #main -->
@endsection
