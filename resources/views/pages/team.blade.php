@extends('template.master')
@section('title' , __('team.title'))
@section('content')
    <div id="main">
        <section id="team" class="team">

            <div class="container" data-aos="fade-up">

                <header class="section-header mb-5">
                    {{--                    <h2>Team</h2>--}}
                    {{--                    <p class="mt-5">{{__('team.our_team')}}</p>--}}
                </header>

                                <div class="col-lg-12 col-md-12 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                                    <div class="member p-5" style="margin: 10px auto 40px">
{{--                                        <div class="member-img">--}}
{{--                                            <img src="{{asset('assets/img/team/leadership-profile.png')}}" class="img-fluid" alt="">--}}
{{--                                            <div class="social">--}}
{{--                                                                                <a href=""><i class="bi bi-twitter"></i></a>--}}
{{--                                                                                <a href=""><i class="bi bi-facebook"></i></a>--}}
{{--                                                                                <a href=""><i class="bi bi-instagram"></i></a>--}}
{{--                                                <a href="https://www.linkedin.com/in/youcef-al-hamdan-77a0b76/"><i--}}
{{--                                                        class="bi bi-linkedin"></i></a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
                                        <div class="member-info">
                                            <h4>{{__('team.yousef')}}</h4>
                                            <span>{{__('team.yousef_position')}}</span>
                                            <p>{{__('team.yousef_word')}}</p>
                                        </div>
                                    </div>
                                </div>

                <div>
                    <hr class="mb-5">
                    {{--                    <h1 class="text-center mb-5">{{__('team.manager')}}</h1>--}}
                </div>
                <div class="row gy-4">

                    {{--                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">--}}
                    {{--                        <div class="member">--}}
                    {{--                            <div class="member-img">--}}
                    {{--                                <img src="{{asset('assets/img/team/team-1.jpg')}}" class="img-fluid" alt="">--}}
                    {{--                                <div class="social">--}}
                    {{--                                    <a href=""><i class="bi bi-twitter"></i></a>--}}
                    {{--                                    <a href=""><i class="bi bi-facebook"></i></a>--}}
                    {{--                                    <a href=""><i class="bi bi-instagram"></i></a>--}}
                    {{--                                    <a href=""><i class="bi bi-linkedin"></i></a>--}}
                    {{--                                </div>--}}
                    {{--                            </div>--}}
                    {{--                            <div class="member-info">--}}
                    {{--                                <h4>يوسف حمدان الحمدان</h4>--}}
                    {{--                                <span>رئيس مجلس الاداره</span>--}}
                    {{--                                <!--                    <p>Velit aut quia fugit et et. Dolorum ea voluptate vel tempore tenetur ipsa quae aut. Ipsum exercitationem iure minima enim corporis et voluptate.</p>-->--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}

                    <div class="col-lg-3 col-md-6 col-sm-12 d-flex align-items-stretch" data-aos="fade-up"
                         data-aos-delay="200">
                        <div class="member p-5">
{{--                            <div class="member-img">--}}
{{--                                <img src="{{asset('assets/img/team/leadership-profile.png')}}" class="img-fluid" alt="">--}}
{{--                                <div class="social">--}}
{{--                                    --}}{{--                                    <a href=""><i class="bi bi-twitter"></i></a>--}}
{{--                                    --}}{{--                                    <a href=""><i class="bi bi-facebook"></i></a>--}}
{{--                                    --}}{{--                                    <a href=""><i class="bi bi-instagram"></i></a>--}}
{{--                                    <a href="https://www.linkedin.com/in/bader-alhamdan-96487895/"><i--}}
{{--                                            class="bi bi-linkedin"></i></a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                            <div class="member-info">
                                <h4>{{__('team.badr')}}</h4>
                                <span>{{__('team.badr_position')}}</span>
                                <!--                    <p>Quo esse repellendus quia id. Est eum et accusantium pariatur fugit nihil minima suscipit corporis. Voluptate sed quas reiciendis animi neque sapiente.</p>-->
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-3 col-md-6 col-sm-12 d-flex align-items-stretch" data-aos="fade-up"
                         data-aos-delay="400">
                        <div class="member p-5">
{{--                            <div class="member-img">--}}
{{--                                <img src="{{asset('assets/img/team/leadership-profile.png')}}" class="img-fluid" alt="">--}}
{{--                                <div class="social">--}}
{{--                                    --}}{{--                                    <a href=""><i class="bi bi-twitter"></i></a>--}}
{{--                                    --}}{{--                                    <a href=""><i class="bi bi-facebook"></i></a>--}}
{{--                                    --}}{{--                                    <a href=""><i class="bi bi-instagram"></i></a>--}}
{{--                                    <a href="https://www.linkedin.com/in/hamdan-alhamdan-85364067/"><i--}}
{{--                                            class="bi bi-linkedin"></i></a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                            <div class="member-info">
                                <h4>{{__('team.mohammed')}}</h4>
                                <span>{{__('team.mohammed_position')}}</span>
                                <!--                    <p>Rerum voluptate non adipisci animi distinctio et deserunt amet voluptas. Quia aut aliquid doloremque ut possimus ipsum officia.</p>-->
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-12 d-flex align-items-stretch" data-aos="fade-up"
                         data-aos-delay="400">
                        <div class="member p-5">
{{--                            <div class="member-img">--}}
{{--                                <img src="{{asset('assets/img/team/leadership-profile.png')}}" class="img-fluid" alt="">--}}
{{--                                --}}{{--                                <div class="social">--}}
{{--                                --}}{{--                                    <a href=""><i class="bi bi-twitter"></i></a>--}}
{{--                                --}}{{--                                    <a href=""><i class="bi bi-facebook"></i></a>--}}
{{--                                --}}{{--                                    <a href=""><i class="bi bi-instagram"></i></a>--}}
{{--                                --}}{{--                                    <a href=""><i class="bi bi-linkedin"></i></a>--}}
{{--                                --}}{{--                                </div>--}}
{{--                            </div>--}}
                            <div class="member-info">
                                <h4>{{__('team.nazih')}}</h4>
                                <span>{{__('team.nazih_position')}}</span>
                                <!--                    <p>Rerum voluptate non adipisci animi distinctio et deserunt amet voluptas. Quia aut aliquid doloremque ut possimus ipsum officia.</p>-->
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-3 col-md-6 col-sm-12 d-flex align-items-stretch" data-aos="fade-up"
                         data-aos-delay="400">
                        <div class="member p-5">

{{--                            <div class="member-img">--}}
{{--                                <img src="{{asset('assets/img/team/leadership-profile.png')}}" class="img-fluid" alt="">--}}
{{--                                <div class="social">--}}
{{--                                    --}}{{--                                    <a href=""><i class="bi bi-twitter"></i></a>--}}
{{--                                    --}}{{--                                    <a href=""><i class="bi bi-facebook"></i></a>--}}
{{--                                    --}}{{--                                    <a href=""><i class="bi bi-instagram"></i></a>--}}
{{--                                    <a href="https://www.linkedin.com/in/ibraheem-hobani/"><i--}}
{{--                                            class="bi bi-linkedin"></i></a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                            <div class="member-info">
                                <h4>{{__('team.ibraheem')}}</h4>
                                <span>{{__('team.ibraheem_position')}}</span>
                                <!--                    <p>Rerum voluptate non adipisci animi distinctio et deserunt amet voluptas. Quia aut aliquid doloremque ut possimus ipsum officia.</p>-->
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-12 d-flex align-items-stretch" data-aos="fade-up"
                         data-aos-delay="400">
                        <div class="member p-5">

                            {{--                            <div class="member-img">--}}
                            {{--                                <img src="{{asset('assets/img/team/leadership-profile.png')}}" class="img-fluid" alt="">--}}
                            {{--                                <div class="social">--}}
                            {{--                                    --}}{{--                                    <a href=""><i class="bi bi-twitter"></i></a>--}}
                            {{--                                    --}}{{--                                    <a href=""><i class="bi bi-facebook"></i></a>--}}
                            {{--                                    --}}{{--                                    <a href=""><i class="bi bi-instagram"></i></a>--}}
                            {{--                                    <a href="https://www.linkedin.com/in/ibraheem-hobani/"><i--}}
                            {{--                                            class="bi bi-linkedin"></i></a>--}}
                            {{--                                </div>--}}
                            {{--                            </div>--}}
                            <div class="member-info">
                                <h4>{{__('team.mohsen')}}</h4>
                                <span>{{__('team.mohsen_position')}}</span>
                                <!--                    <p>Rerum voluptate non adipisci animi distinctio et deserunt amet voluptas. Quia aut aliquid doloremque ut possimus ipsum officia.</p>-->
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-12 d-flex align-items-stretch" data-aos="fade-up"
                         data-aos-delay="400">
                        <div class="member p-5">
                            {{--                            <div class="member-img">--}}
                            {{--                                <img src="{{asset('assets/img/team/leadership-profile.png')}}" class="img-fluid" alt="">--}}
                            {{--                                <div class="social">--}}
                            {{--                                    --}}{{--                                    <a href=""><i class="bi bi-twitter"></i></a>--}}
                            {{--                                    --}}{{--                                    <a href=""><i class="bi bi-facebook"></i></a>--}}
                            {{--                                    --}}{{--                                    <a href=""><i class="bi bi-instagram"></i></a>--}}
                            {{--                                </div>--}}
                            {{--                            </div>--}}
                            <div class="member-info">
                                <h4>{{__('team.moneam')}}</h4>
                                <span>{{__('team.moneam_position')}}</span>
                                <!--                    <p>Rerum voluptate non adipisci animi distinctio et deserunt amet voluptas. Quia aut aliquid doloremque ut possimus ipsum officia.</p>-->
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-12 d-flex align-items-stretch" data-aos="fade-up"
                         data-aos-delay="300">
                        <div class="member p-5">
                            {{--                            <div class="member-img">--}}
                            {{--                                                                <img src="{{asset('assets/img/team/leadership-profile.png')}}" class="img-fluid" alt="">--}}
                            {{--                                --}}{{--                                <div class="social">--}}
                            {{--                                --}}{{--                                    <a href=""><i class="bi bi-twitter"></i></a>--}}
                            {{--                                --}}{{--                                    <a href=""><i class="bi bi-facebook"></i></a>--}}
                            {{--                                --}}{{--                                    <a href=""><i class="bi bi-instagram"></i></a>--}}
                            {{--                                --}}{{--                                    <a href=""><i class="bi bi-linkedin"></i></a>--}}
                            {{--                                --}}{{--                                </div>--}}
                            {{--                            </div>--}}
                            <div class="member-info">
                                <h4>{{__('team.hamdan')}}</h4>
                                <span>{{__('team.hamdan_position')}} <br> {{__('team.hamdan_con_position')}}</span>
                                <!--                    <p>Vero omnis enim consequatur. Voluptas consectetur unde qui molestiae deserunt. Voluptates enim aut architecto porro aspernatur molestiae modi.</p>-->
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </section><!-- End Team Section -->
    </div>
@endsection
