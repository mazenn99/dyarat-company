
<!-- ======= Header ======= -->
<header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <a href="{{route('index_page')}}" class="logo d-flex align-items-center">
            <img src="{{asset('assets/img/dyarat.png')}}" alt="">
        </a>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto @if(request()->routeIs('/') ? 'active' : '') @endif" href="{{route('index_page')}}">{{__('navbar.home')}}</a></li>
                <li class="dropdown"><a href="#"><span>{{__('navbar.branch')}}</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="{{route('aldares')}}">{{__('companies/aldares.company_name')}}</a></li>
                        <li><a href="{{route('mayeera')}}">{{__('companies/moayara.company_name')}}</a></li>
                        <li><a href="{{route('qyas')}}">{{__('companies/qyas.company_name')}}</a></li>
                        <li><a href="{{route('tatweer')}}">{{__('companies/tatweer.company_name')}}</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#"><span>{{__('navbar.companies')}}</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <!--              <li><a href="#">Drop Down 1</a></li>-->
                        <!--              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>-->
                        <!--                <ul>-->
                        <!--                  <li><a href="#">Deep Drop Down 1</a></li>-->
                        <!--                  <li><a href="#">Deep Drop Down 2</a></li>-->
                        <!--                  <li><a href="#">Deep Drop Down 3</a></li>-->
                        <!--                  <li><a href="#">Deep Drop Down 4</a></li>-->
                        <!--                  <li><a href="#">Deep Drop Down 5</a></li>-->
                        <!--                </ul>-->
                        <!--              </li>-->
                        <li><a href="{{route('najat')}}">{{__('companies/najat.company_name')}}</a></li>
                        <li><a href="{{route('caterer')}}">{{__('companies/caterer.company_name')}}</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#"><span>{{__('navbar.investment')}}</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <!--              <li><a href="#">Drop Down 1</a></li>-->
                        <!--              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>-->
                        <!--                <ul>-->
                        <!--                  <li><a href="#">Deep Drop Down 1</a></li>-->
                        <!--                  <li><a href="#">Deep Drop Down 2</a></li>-->
                        <!--                  <li><a href="#">Deep Drop Down 3</a></li>-->
                        <!--                  <li><a href="#">Deep Drop Down 4</a></li>-->
                        <!--                  <li><a href="#">Deep Drop Down 5</a></li>-->
                        <!--                </ul>-->
                        <!--              </li>-->
                        <li><a href="{{route('petroapp')}}">{{__('navbar.petroapp')}}</a></li>
                        <li><a href="{{route('gatherin')}}">{{__('navbar.gather_in')}}</a></li>
                        <li><a href="{{route('nearpay')}}">{{__('navbar.nearpay')}}</a></li>
                        <li><a href="{{route('watani')}}">{{__('navbar.watani')}}</a></li>
                    </ul>
                </li>
                <li><a class="nav-link scrollto @if(request()->routeIs('team*') ? 'active' : '') @endif" href="{{route('team')}}">{{__('navbar.our_team')}}</a></li>
                <li><a class="nav-link scrollto" href="{{route('project_page')}}">{{__('navbar.our_project')}}</a></li>
                <!--          <li><a class="nav-link scrollto" href="#portfolio">Portfolio</a></li>-->
                <!--          <li><a class="nav-link scrollto" href="#team">Team</a></li>-->
                <!--          <li><a href="blog.html">Blog</a></li>-->
                <li><a class="nav-link scrollto" href="{{route('client')}}">{{__('navbar.our_client')}}</a></li>
                <li><a class="nav-link scrollto" href="{{route('contact')}}">{{__('navbar.contact')}}</a></li>
                <li class="dropdown"><a href="#"><span>{{__('navbar.language')}}</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <!--              <li><a href="#">Drop Down 1</a></li>-->
                        <!--              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>-->
                        <!--                <ul>-->
                        <!--                  <li><a href="#">Deep Drop Down 1</a></li>-->
                        <!--                  <li><a href="#">Deep Drop Down 2</a></li>-->
                        <!--                  <li><a href="#">Deep Drop Down 3</a></li>-->
                        <!--                  <li><a href="#">Deep Drop Down 4</a></li>-->
                        <!--                  <li><a href="#">Deep Drop Down 5</a></li>-->
                        <!--                </ul>-->
                        <!--              </li>-->
                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                            <li>
                                <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                    {{ $properties['native'] }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </li>
                <!--          <li><a class="getstarted scrollto" href="#about">Get Started</a></li>-->
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->
