
@extends('frontend.master')
@section('content')

<div class="brand_color">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2>about</h2>
                </div>
            </div>
        </div>
    </div>

</div>


<div class="about">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                @foreach($profiles as $profile)
                <div class="about_box mt-2" {{ $loop->index == 0 ? 'active' : '' }}>

                        <figure><img src="{{ asset('storage/'.$profile->image) }}" alt="{{ $profile->title }}" width="193" height="130"/></figure>
{{--                    <figure><img src="{{asset('frontend/images/pc_layout.png')}}"/></figure>--}}

                </div>
                @endforeach
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <div class="about_box">
                    <h3> {{$profile->title}}</h3>

                    <hr>
{{--                    <h3>Who is Dahe</h3>--}}
{{--                    <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum.</p>--}}
{{--                    <p>Simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>--}}
                    <div class="profile-description">
                        {!! $profile->description !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


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
                            {{--                            <i><img src="{{asset('frontend/icon/1.png')}}"/></i>--}}
                            <h4 class="one">Founded in 2007</h4>
                            {{--                            <p>Perspiciatis eos quos totam cum minima autPerspiciatis eos quos</p>--}}
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="for_box">
                            {{--                            <i><img src="{{asset('frontend/icon/2.png')}}"/></i>--}}
                            <h4 class="one">11-50 People</h4>
                            {{--                            <p>Perspiciatis eos quos totam cum minima autPerspiciatis eos quos</p>--}}
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="for_box">
                            {{--                            <i><img src="{{asset('frontend/icon/3.png')}}"/></i>--}}
                            <h4 class="one">81% Quick Response</h4>
                            {{--                            <p>Perspiciatis eos quos totam cum minima autPerspiciatis eos quos</p>--}}
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="for_box">
                            {{--                            <i><img src="{{asset('frontend/icon/4.png')}}"/></i>--}}
                            <h4 class="one">
                                <a href="#" class="why-choose">
                                    above 2000 sqm
                                </a>

                            </h4>
                            {{--                            <p>Perspiciatis eos quos totam cum minima autPerspiciatis eos quos</p>--}}
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

@endsection



