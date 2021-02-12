<header>
    <!-- header inner -->
    <div class="header">
        <div class="head_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                        <div class="top-box">
                            <ul class="sociel_link">
                                <li> <a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li> <a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li> <a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                        <div class="search top-box">
{{--                            <p style="color:black;"> <a href = "mailto: abc@example.com">info@integra-dahe.com</a></p>--}}
                            <form class="form-inline my-2 my-lg-0" action="{!! route('search') !!}" method="get">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" name="search" placeholder="Search Products" aria-label="Recipient's username">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary" type="button"><i class="fa fa-search"></i> </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    <!--end header inner-->

    <!--logo-->

    <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                    <div class="full">
                        <div class="center-desk">
                            <div class="logo"> <a href="{{asset('frontend/index.html')}}"><img src="{{asset('frontend/images/d2.png')}}" alt="logo" clas/></a> </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7 col-md-9 col-sm-9">
                    <div class="menu-area">
                        <div class="limit-box">
                            <nav class="main-menu">
                                <ul class="menu-area-main">
                                    <li class="active"> <a href="/">Home</a> </li>
                                    <li> <a href="/profile">Profile</a> </li>
{{--                                    <li class="dropdown">--}}
{{--                                        <a class="dropdown-toggle" data-toggle="dropdown" href="/profile">profile--}}
{{--                                        <span class="caret"></span></a>--}}
{{--                                        <ul class="dropdown-menu">--}}

{{--                                            <li><a href="/profile">Company Overview</a></li>--}}
{{--                                            <li><a href="/profile">Company Capability</a></li>--}}
{{--                                            <li><a href="/profile">Business Performance </a></li>--}}
{{--                                            <li><a href="/profile">Additional Information</a></li>--}}
{{--                                        </ul>--}}
{{--                                    </li>--}}
                                    <li class="dropdown">
{{--                                        @foreach($menus as $menu)--}}
                                        <a class="dropdown-toggle" data-toggle="dropdown" href="/product">products
                                            </a>
                                        <ul class="dropdown-menu">


{{--                                                <li><a href="/product"> {{$menu->name}} </a></li>--}}

                                            <li><a href="/product">Masks machine materials</a></li>
                                            <li><a href="/product">Cable machine+production..</a></li>
                                            <li><a href="/product">Fiber optic cable</a></li>
                                            <li><a href="/product">Fiber optic accessories</a></li>
                                        </ul>
                                    </li>
                                    <li> <a href="/gallery">Gallery</a> </li>
                                    <li> <a href="/contact">Contact</a> </li>

                                </ul>


                            </nav>
                        </div>

                    </div>


{{--                    <nav class="navbar navbar-expand-md" style="background-color:#e3f2fd;">--}}
{{--                        <a class="navbar-brand" href="#">Bootstrap</a>--}}
{{--                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">--}}
{{--                            <span class="navbar-toggler-icon"></span>--}}
{{--                        </button>--}}
{{--                        <div class="collapse navbar-collapse" id="navbarSupportedContent">--}}
{{--                            <ul class="navbar-nav ml-auto">--}}
{{--                                <li class="nav-item active">--}}
{{--                                    <a class="nav-link" href="#">Home</a>--}}
{{--                                </li>--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a class="nav-link" href="#">About</a>--}}
{{--                                </li>--}}
{{--                                <li class="nav-item ">--}}
{{--                                    <a class="nav-link" href="#">Location</a>--}}
{{--                                </li>--}}
{{--                                <li class="nav-item dropdown">--}}
{{--                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">Services</a>--}}
{{--                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">--}}
{{--                                    <a class="dropdown-item" href="#">PhotoGraphy</a>--}}
{{--                                    <div class="dropdown-divider"></div>--}}
{{--                                    <a class="dropdown-item" href="#">View Our Portfolio</a>--}}
{{--                                </div>--}}
{{--                                </li>--}}
{{--                                <li class="nav-item ">--}}
{{--                                    <a class="nav-link" href="#">Contact Us</a>--}}
{{--                                </li>--}}

{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </nav>--}}



                    </div>
                    </div>
                </div>
        <!-- end header inner -->
</header>
<!-- end header -->
