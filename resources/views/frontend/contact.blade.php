
@extends('frontend.master')
@section('content')
    <div class="brand_color">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Contact Us</h2>
                    </div>
                </div>
            </div>
{{--            @if($message = get('success'))--}}
{{--                <div class="alert alert-success">--}}
{{--                    <p>{{$message}}</p>--}}
{{--                </div>--}}
{{--            @endif--}}
        </div>

    </div>

{{--<!-- contact -->--}}
{{--<div class="contact">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-md-12">--}}
{{--                <div class="right">--}}
{{--                    <h3>Request for Quotation to Integra-Dahe-Industries Ltd.</h3>--}}
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
{{--<!-- end contact -->--}}


    <!-- rfq -->
{{--    <div class="contact">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-12">--}}

{{--                    --}}{{--                <form class="main_form" action="/contact" method="post", enctype="multipart/form-data">--}}
{{--                    --}}{{--                    @csrf--}}
{{--                    --}}{{--                    @if ($errors->any())--}}
{{--                    --}}{{--                        <div class="alert alert-danger">--}}
{{--                    --}}{{--                            <ul>--}}
{{--                    --}}{{--                                @foreach ($errors->all() as $error)--}}
{{--                    --}}{{--                                    <li>{{ $error }}</li>--}}
{{--                    --}}{{--                                @endforeach--}}
{{--                    --}}{{--                            </ul>--}}
{{--                    --}}{{--                        </div>--}}
{{--                    --}}{{--                    @endif--}}

{{--                    <div class="title">--}}
{{--                        <h3><strong class="black">Request For Quotation To Integra-Dahe Industries Ltd. </strong></h3>--}}
{{--                    </div>--}}



{{--                    <div class="row">--}}
{{--                        <div class="msg-header">--}}
{{--                            <h4 class="title">To:info@dahe.com</h4>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">--}}
{{--                            <input class="form-control" placeholder="Brand" type="text" name="brand">--}}
{{--                        </div><br>--}}
{{--                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">--}}
{{--                            <input class="form-control" placeholder="Enter color & type" type="text" name="color">--}}
{{--                        </div>--}}

{{--                        <div class="col-md-12">--}}
{{--                            <textarea class="textarea" placeholder="Message" name="message"></textarea>--}}
{{--                        </div>--}}
{{--                        <div class="msg-button">--}}
{{--                            <button class="send">Send</button>--}}
{{--                        </div>--}}

{{--                    </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}



    <!-- start rfq -->
{{--<div class="rfq">--}}
{{-- <div class="container">--}}
{{--     <div class="contact-box">--}}
{{--         <form class="main-form" action="/contact" method="post", enctype="multipart/form-data">--}}
{{--             @csrf--}}
{{--             @if ($errors->any())--}}
{{--                 <div class="alert alert-danger">--}}
{{--                     <ul>--}}
{{--                         @foreach ($errors->all() as $error)--}}
{{--                             <li>{{ $error }}</li>--}}
{{--                         @endforeach--}}
{{--                     </ul>--}}
{{--                 </div>--}}
{{--             @endif--}}
{{--         <div class="left">--}}
{{--         <div class="right">--}}
{{--             <h3>Request for Quotation to Integra-Dahe-Industries Ltd.</h3>--}}
{{--             <input type="text" class="field" name="brand" placeholder="Brand">--}}
{{--             <input type="text" class="field" name="type" placeholder="Type">--}}
{{--             <input type="text" class="field" name="color" placeholder="Color">--}}
{{--             <textarea class="field area" name="message" placeholder="Message"></textarea>--}}
{{--             <button class="btn">Send</button>--}}

{{--         </div>--}}
{{--         </div>--}}
{{--         </form>--}}
{{--         </div>--}}
{{--     </div>--}}
{{-- </div>--}}

    <!-- end rfq -->
@endsection
