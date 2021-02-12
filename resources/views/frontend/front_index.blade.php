
@extends('frontend.master')
@section('content')
<section class="slider_section">
{{--    <div id="main_slider" class="carousel slide banner-main" data-ride="carousel">--}}

{{--        <div class="carousel-inner">--}}
{{--            <div class="carousel-item active">--}}
{{--                <img class="first-slide" src="{{asset('frontend/images/banner1.jpg')}}" alt="First slide">--}}
{{--                <div class="container">--}}
{{--                    <div class="carousel-caption relative">--}}
{{--                        <h1>Our <br> <strong class="black_bold">Latest </strong><br>--}}
{{--                            <strong class="yellow_bold">Product </strong></h1>--}}
{{--                        <p>It is a long established fact that a r <br>--}}
{{--                            eader will be distracted by the readable content of a page </p>--}}
{{--                        <a  href="#">see more Products</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="carousel-item">--}}
{{--                <img class="second-slide" src="{{asset('frontend/images/banner2-min.jpg')}}" alt="Second slide">--}}
{{--                <div class="container">--}}
{{--                    <div class="carousel-caption relative">--}}
{{--                        <h1>Our <br> <strong class="black_bold">Latest </strong><br>--}}
{{--                            <strong class="yellow_bold">Product </strong></h1>--}}
{{--                        <p>It is a long established fact that a r <br>--}}
{{--                            eader will be distracted by the readable content of a page </p>--}}
{{--                        <a  href="#">see more Products</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="carousel-item">--}}
{{--                <img class="third-slide" src="{{asset('frontend/images/banner3-min.jpg')}}" alt="Third slide">--}}
{{--                <div class="container">--}}
{{--                    <div class="carousel-caption relative">--}}
{{--                        <h1>Our <br> <strong class="black_bold">Latest </strong><br>--}}
{{--                            <strong class="yellow_bold">Product </strong></h1>--}}
{{--                        <p>hjvbhjbhbh <br>--}}
{{--                            eader will be distracted by the readable content of a page </p>--}}
{{--                        <a  href="#">see more Products</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--        </div>--}}
{{--        <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">--}}
{{--            <i class='fa fa-angle-right'></i>--}}
{{--        </a>--}}
{{--        <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">--}}
{{--            <i class='fa fa-angle-left'></i>--}}
{{--        </a>--}}

{{--    </div>--}}
    <div class="our-slider">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">

                @foreach ($sliders as $slider)
                    <li data-target="#carouselExampleIndicators" data-slide-to="{{ $loop->index}}" class="{{ $loop->index == 0 ? 'active' : '' }}"></li>
                @endforeach

            </ol>
            <div class="carousel-inner">

                @foreach ($sliders as $slider)
                    <div class="carousel-item {{ $loop->index == 0 ? 'active' : '' }}">
                        <img class="d-block w-100" src="{{ asset('storage/'.$slider->image) }}" alt="{{ $slider->title }}" style="height: 450px;" />

                        <div class="carousel-caption d-none d-md-block">
                            <h5>{{ $slider->title }}</h5>

                            @if ($slider->button_text)
                                <p>
                                    <a href="{{ $slider->button_link }}" target="_blank" class="btn btn-danger">{{ $slider->button_text }}</a>
                                </p>
                            @endif

                        </div>
                    </div>
                @endforeach


            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</section>





<!-- Product_page -->
<div class="service">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="title">
                      <h2>our <strong class="black">products</strong></h2>
                      <span>We package the products with best services to make you a happy customer.</span>
                    </div>
            </div>
        </div>

    </div>
</div>


{{--<div class="col-md-8">--}}
{{--    <div class="widget">--}}
{{--        <h3 class="pro-header">All Products</h3>--}}
{{--        @include('frontend.pages.product.partials.all_products')--}}

{{--    </div>--}}
{{--    <div class="widget">--}}

{{--    </div>--}}
{{--</div>--}}



<div class="product-bg border-bottom">
    <div class="product-bg-white">
        <div class="container">
            <div class="row">
                @foreach($products as $product)
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                    <div class="product-box" {{ $loop->index == 0 ? 'active' : '' }}>

                      <i><img src="{!!asset('images/products/' .$product->image)!!}" alt="{{$product->title}}"  width="100" /></i>
                    <h3>
                        <a href="/product"><span style="color:black"> {{$product->title}} </span></a>
                    </h3>
{{--                        <i><img src="{{asset('frontend/icon/c51.png')}}"/></i>--}}
{{--                        <h3>--}}
{{--                            <a href="/product"><span style="color:black">ITL CAT6 CABLE</span></a>--}}
{{--                        </h3>--}}
                    </div>
                </div>
{{--                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">--}}
{{--                    <div class="product-box">--}}
{{--                        <i><img src="{{asset('frontend/icon/cat5.png')}}"/></i>--}}
{{--                        <h3>--}}
{{--                            <a href="/product"><span style="color:black">ITL CAT5 CABLE</span></a>--}}
{{--                        </h3>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">--}}
{{--                    <div class="product-box">--}}
{{--                        <i><img src="{{asset('frontend/icon/c5e.png')}}"/></i>--}}
{{--                        <h3>--}}
{{--                            <a href="/product"><span style="color:black">XTECH CAT5 CABLE</span></a>--}}
{{--                        </h3>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">--}}
{{--                    <div class="product-box">--}}
{{--                        <i><img src="{{asset('frontend/icon/cat6.png')}}"/></i>--}}
{{--                        <h3>--}}
{{--                            <a href="/product"><span style="color:black">XTECH CAT6 CABLE</span></a>--}}
{{--                        </h3>--}}
{{--                    </div>--}}
{{--                </div>--}}


                @endforeach
            </div>
        </div>
    </div>
</div>


{{--    <end Product_page>--}}

    <!-- service -->
    <div class="service">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="title">
                        <h2>our <strong class="black">brands</strong></h2>
                        <span>Easy and effective way to get your device repair</span>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($brands as $brand)
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                    <div class="service-box" {{ $loop->index == 0 ? 'active' : '' }}>

                            <i><img src="{{ asset('images/brands/' .$brand->image) }}" alt="{{$brand->name}}" width="200" height="150"/></i>
                            <h3> {{$brand->name}} </h3>
{{--                        <i><img src="{{asset('frontend/icon/adp.png')}}"/></i>--}}
{{--                        <h3>Fast service</h3>--}}
{{--                           <p>Communication Cable. Connected Together in one physical location. </p>--}}
                    </div>

                </div>
{{--                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">--}}
{{--                    <div class="service-box">--}}
{{--                        <a href="https://xtechcorporation.com/"><i><img src="{{asset('frontend/icon/Xtech.png')}}"/></i></a>--}}
{{--                        <h3>Xtech</h3>--}}
{{--                        <p>Manufacture all Types of FTTx, Networking Accessories,etc. </p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">--}}
{{--                    <div class="service-box">--}}
{{--                       <a href="https://www.integra-bd.com/"><i><img src="{{asset('frontend/icon/itl.png')}}"/></i></a>--}}
{{--                        <h3>ITL</h3>--}}
{{--                        <p> One stop solution center for networking technology projects </p>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--</div>--}}
        @endforeach
        </div>
    </div>

    <!-- CHOOSE  -->

{{--<div class="why-choose-us">--}}
{{--    <div class="container choose">--}}
{{--        <h2>Why Choose Us</h2>--}}

{{--        <div class="title">--}}
{{--            <p>CAT5E/CAT6A/ CAT7/ CAT8 Network Cable,Fiber Cable,Fire Alarm Cable,Coaxial Power cable,Power Cable Shenzhen ADP Cables Co., Ltd. was established in 2002 and is a professional manufacturer of Power cable</p>--}}
{{--        </div>--}}
{{--        <div class="row text-paragraph">--}}
{{--            <div class="col-sm-4">--}}

{{--                   <span class="text-dark">--}}
{{--                         <a href="#" class="btn btn-outline-warning">Founded in 2007</a>--}}
{{--                </span>--}}


{{--            </div>--}}
{{--            <div class="col-sm-4 ">--}}

{{--                <span class="text-dark">--}}
{{--                         <a href="#" class="btn btn-outline-warning">11-50 People</a>--}}
{{--                </span>--}}

{{--            </div>--}}
{{--            <div class="col-sm-4 ">--}}

{{--                  <span class="text-dark">--}}
{{--                         <a href="#" class="btn btn-outline-warning">81% Quick Response Rate</a>--}}
{{--                </span>--}}
{{--            </div>--}}
{{--            <div class="col-sm-4 ">--}}

{{--                  <span class="text-dark">--}}
{{--                         <a href="#" class="btn btn-outline-warning">above 2000 squrae meters</a>--}}
{{--                </span>--}}

{{--            </div>--}}

{{--            <div class="col-sm-4 ">--}}

{{--                  <span class="text-dark">--}}
{{--                         <a href="#" class="btn btn-outline-warning">1 exhibitions</a>--}}
{{--                </span>--}}
{{--            </div>--}}

{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}


<!-- start CHOOSE -->
    <div class="whyshoose border-top">
        <div class="container whyschose">

            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="title">
                        <h2>Why<strong class="black">Choose Us</strong></h2>
                    </div>
                </div>

                </div>
            </div>
        </div>

    <div class="whyschose">
    <div class="choose_bg">
        <div class="container">
            <div class="white_bg">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="for_box">
                            <h4 class="one">
                                <a href="#" class="why-choose">
                                Founded in 2007
                                </a>
                            </h4>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="for_box">
                            <h4 class="one">
                                <a href="#" class="why-choose">
                                11-50 People
                                </a>
                            </h4>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="for_box">
                            <h4 class="one">
                                <a href="#" class="why-choose">
                                81% Quick Response
                                </a>
                            </h4>

                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="for_box">
                            <h4 class="one">
                                <a href="#" class="why-choose">
                                Above 2000 sqm
                                </a>
                            </h4>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <a href="http://127.0.0.1:8000/profile" class="read-more">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
   </div>
    <!-- end CHOOSE -->


    <!-- Company Information -->

    <div class="service">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="title">
                        <h2>company <strong class="black">information</strong></h2>
                    </div>
                </div>

                    <div class="container">
                        <div class="white_bg">
                            <div class="row">
                                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                    <div class="company_box">
                                        <i class="company-location"><img src="{{asset('frontend/icon/i1-removebg-preview.png')}}"/></i>
                                        <h3 class="com_in">Country/Region</h3>
                                        <p>Bangladesh,Dhaka</p>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                    <div class="company_box">
                                        <i><img src="{{asset('frontend/icon/i2-removebg-preview.png')}}"/></i>
                                        <h3 class="com_in">Year Establish</h3>
                                        <p>2018</p>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                    <div class="company_box">
                                        <i><img src="{{asset('frontend/icon/i3-removebg-preview.png')}}"/></i>
                                        <h3 class="com_in">Business Type</h3>
                                        <p>Industrial Company</p>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                    <div class="company_box">
                                        <i><img src="{{asset('frontend/icon/i4-removebg-preview.png')}}"/></i>
                                        <h3 class="com_in">Main Products</h3>
                                        <p>Optical Fiber Cable, Network Cable...</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

        </div>
    </div>
<!-- end Company Information -->


        <!-- Company Information img-->
        <div class="company-bg">
        <div class="company">
        <div class="container">
            <div class="row">
                @foreach($coms as $com)

                <div class="responsive">
                    <div class="gallery" {{ $loop->index == 0 ? 'active' : '' }}>
                        <a target="_blank" href="#">
                            <img src="{!!asset('images/coms/' .$com->image)!!}" alt="img" width="600" height="400">
{{--                            <img src="{{asset('frontend/images/11.png')}}" alt="img" width="600" height="400">--}}
                        </a>
{{--                        <div class="desc">Add a description of the image here</div>--}}
                    </div>
                </div>



{{--                <div class="responsive">--}}
{{--                    <div class="gallery">--}}
{{--                        <a target="_blank" href="#">--}}
{{--                            <img src="{{asset('frontend/images/12.png')}}" alt="img" width="600" height="400">--}}
{{--                        </a>--}}
{{--                        <div class="desc">Add a description of the image here</div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="responsive">--}}
{{--                    <div class="gallery">--}}
{{--                        <a target="_blank" href="#">--}}
{{--                            <img src="{{asset('frontend/images/132.jpg')}}" alt="img" width="600" height="400">--}}
{{--                        </a>--}}
{{--                        <div class="desc">Add a description of the image here</div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="responsive">--}}
{{--                    <div class="gallery">--}}
{{--                        <a target="_blank" href="#">--}}
{{--                            <img src="{{asset('frontend/images/13.png')}}" alt="img" width="600" height="400">--}}
{{--                        </a>--}}
{{--                        <div class="desc">Add a description of the image here</div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                </div>--}}
        @endforeach
        </div>
        </div>
        </div>
    </div>

        <!-- end Company Information img -->



<!-- Enterprise core competence -->

<div class="service">
    <div class="E-container  border-top">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="title">
                    <h1><strong class="black">Enterprise core competence</strong></h1>
                </div>
            </div>

            <div class="container">
                <div class="white_bg">
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                            <div class="company_box">
                                <i><img src="{{asset('frontend/icon/e1.png')}}"/></i>
                                <h3 class="en">R&D Capability</h3>
                                <p>Number of R&D Staff</p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                            <div class="company_box">
                                <i><img src="{{asset('frontend/icon/e2.png')}}"/></i>
                                <h3 class="en">Certifications</h3>
                                <p>Certificates:</p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                            <div class="company_box">
                                <i><img src="{{asset('frontend/icon/e3.png')}}"/></i>
                                <h3 class="en">Trade Capability</h3>
                                <p>Export Percentage:</p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                            <div class="company_box">
                                <i><img src="{{asset('frontend/icon/e4.png')}}"/></i>
                                <h3 class="en">Quality Control</h3>
                                <p>Qc Staff:</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
    <!-- end Enterprise core competence -->


    <!-- Enterprise img-->
    <div class="enterprise-bg">
        <div class="enterprise">
            <div class="container">
                <div class="row">
                   @foreach($enterprises as $enterprise)
                    <div class="responsive">
                        <div class="gallery" {{ $loop->index == 0 ? 'active' : '' }}>
                            <a target="_blank" href="#">
                                <img src="{!!asset('images/enterprise/' .$enterprise->image)!!}" alt="img" width="600" height="400">
{{--                                <img src="{{asset('frontend/images/11.png')}}" alt="img" width="600" height="400">--}}
                            </a>
                            <div class="desc"> {{ $enterprise->description }} </div>
{{--                            <div class="desc">Add a description of the image here</div>--}}
                        </div>
                    </div>



{{--                    <div class="responsive">--}}
{{--                        <div class="gallery">--}}
{{--                            <a target="_blank" href="#">--}}
{{--                                <img src="{{asset('frontend/images/12.png')}}" alt="img" width="600" height="400">--}}
{{--                            </a>--}}
{{--                            <div class="desc">Add a description of the image here</div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="responsive">--}}
{{--                        <div class="gallery">--}}
{{--                            <a target="_blank" href="#">--}}
{{--                                <img src="{{asset('frontend/images/132.jpg')}}" alt="img" width="600" height="400">--}}
{{--                            </a>--}}
{{--                            <div class="desc">Add a description of the image here</div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="responsive">--}}
{{--                        <div class="gallery">--}}
{{--                            <a target="_blank" href="#">--}}
{{--                                <img src="{{asset('frontend/images/13.png')}}" alt="img" width="600" height="400">--}}
{{--                            </a>--}}
{{--                            <div class="desc">Add a description of the image here</div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

                    @endforeach
                </div>
            </div>
        </div>
    </div>


<!-- Send message  -->



<!-- start rfq -->
{{--<div class="rfq">--}}

{{--<div class="container">--}}
{{--    <div class="contact-box">--}}
{{--        <div class="left">--}}
{{--            <div class="right">--}}
{{--                <h3>Request for Quotation to Integra-Dahe-Industries Ltd.</h3>--}}
{{--                <input type="text" class="field" placeholder="Brand">--}}
{{--                <input type="text" class="field" placeholder="Type">--}}
{{--                <input type="text" class="field" placeholder="Color">--}}
{{--                <textarea class="field area" placeholder="Message"></textarea>--}}
{{--                <button class="btn">Send</button>--}}

{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--</div>--}}

<!-- contact -->
{{--<div class="contact">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-md-12">--}}
{{--                <div class="right">--}}
{{--                <h3>Request for Quotation to Integra-Dahe-Industries Ltd.</h3>--}}
{{--                </div>--}}

{{--                <form class="main_form" action="/contact" method="post", enctype="multipart/form-data">--}}
{{--                    @csrf--}}
{{--                    @if ($errors->any())--}}
{{--                        <div class="alert alert-danger">--}}
{{--                            <ul>--}}
{{--                                @foreach ($errors->all() as $error)--}}
{{--                                    <li>{{ $error }}</li>--}}
{{--                                @endforeach--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    @endif--}}

{{--                    <div class="row">--}}

{{--                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">--}}
{{--                            <input class="form-control" placeholder="Brand" type="text" name="brand">--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">--}}
{{--                            <input class="form-control" placeholder="Color" type="text" name="color">--}}
{{--                        </div>--}}
{{--                        <div class="col-md-12 ">--}}
{{--                            <input class="form-control" placeholder="Type" type="text" name="type">--}}
{{--                        </div>--}}
{{--                        <div class="col-md-12">--}}
{{--                            <textarea class="textarea" placeholder="Message" name="message"></textarea>--}}
{{--                        </div>--}}
{{--                        <div class=" col-md-12">--}}
{{--                            <button class="send">Send</button>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </form>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
<!-- end contact -->
<!-- end rfq -->







@endsection
