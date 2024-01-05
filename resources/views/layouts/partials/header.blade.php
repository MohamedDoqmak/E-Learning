<header class="header__transparent">
    <div class="header__area">
        <div class="main-header third-header header-xy-spacing" id="header-sticky">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-xxl-3 col-xl-3 col-lg-5 col-md-6 col-6">
                        <div class="logo-area d-flex align-items-center">
                            <div class="logo">
                                <a href="index.html">
                                    <img src="assets/img/logo/logo-black.png" alt="logo">
                                </a>
                            </div>
                            <div class="header-cat-menu ml-40 d-none d-md-block">
                                <nav>
                                    <ul>
                                        <li><a href="course-grid.html"> @lang('components/header.Categories')
                                                <span><i class="arrow_carrot-down"></i></span></a>
                                            <ul class="sub-menu">
                                                <li><a href="course-grid.html">Bangla Medium</a></li>
                                                <li><a href="course-grid.html">English Medium</a></li>
                                                <li><a href="course-grid.html">Video Edition</a></li>
                                                <li><a href="course-grid.html">Logo Design</a></li>
                                                <li><a href="course-grid.html">Francy Medium</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div
                        class="col-xxl-9 col-xl-9 col-lg-7 col-md-6 col-6 d-flex align-items-center justify-content-end">
                        <div class="main-menu main-menu-black d-flex justify-content-end">
                            <nav id="mobile-menu">
                                <ul>
                                    <!-- Language Dropdown -->
                                    <li class="has-dropdown">
                                        <a href="#">
                                            {{ Config::get('languages')[App::getLocale()] }}
                                        </a>
                                        <ul class="submenu">
                                            @foreach (Config::get('languages') as $lang => $language)
                                            @if ($lang != App::getLocale())
                                            <li>
                                                <a href="{{ route('lang.switch', $lang) }}">
                                                    {{ $language }}
                                                </a>
                                            </li>
                                            @endif
                                            @endforeach
                                        </ul>
                                    </li>

                                    <li class="has-dropdown">
                                        <a href="about.html">@lang('components/header.Pages')</a>
                                        <ul class="submenu">
                                            <li><a href="about.html">@lang('components/header.About')</a></li>
                                            <li><a href="contact.html">@lang('components/header.Contact')</a></li>
                                            <li><a href="checkout.html">@lang('components/header.Checkout')</a></li>
                                            <li><a href="faq.html">@lang('components/header.FAQ')</a></li>
                                            <li><a href="register.html">@lang('components/header.Register')</a></li>
                                            <li><a href="sign-in.html">@lang('components/header.Signin')</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="instructor.html">@lang('components/header.Instructors')</a>

                                    </li>
                                    <li>
                                        <a href="course-grid.html">@lang('components/header.Courses')</a>
                                    </li>
                                    <li>
                                        <a href="blog.html">@lang('components/header.LatestBlogs')</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="header-right d-flex align-items-center">
                            <div class="header-meta header-meta-white">
                                <ul>
                                    <li><a href="sign-in.html" class="d-none d-md-block"><i
                                                class="fi fi-rr-user"></i></a></li>
                                    <li><a href="cart.html" class="d-none d-md-block"><i
                                                class="	 fi fi-rr-shopping-bag"></i></a></li>
                                    <li><a href="#" class="tp-menu-toggle d-xl-none"><i class="icon_ul"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
