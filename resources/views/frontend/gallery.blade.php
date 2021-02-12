@extends('frontend.master')
@section('content')

    <div class="brand_color">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>photo gallery</h2>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <!-- Lastestnews -->
<div class="Lastestnews blog">
    <div class="container">

        <div class="row">

            @foreach($galleries as $gallery)
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 margin">
                <div class="news-box" {{ $loop->index == 0 ? 'active' : '' }}>
{{--                    @foreach($gallery->image as $image)--}}
                    <figure><img src="{{ asset('images/galleries/' .$gallery->image) }}" alt="{{$gallery->name}}" width="100" height="100" /></figure>
{{--                    @endforeach--}}
                    <h3 style="text-align: center"> {{$gallery->name}} </h3>

                </div>
            </div>
{{--            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 margin">--}}
{{--                <div class="news-box">--}}
{{--                    <figure><img src="{{asset('frontend/images/12.png')}}" alt="img" /></figure>--}}
{{--                    <h3 style="text-align: center">Cable Quality Control</h3>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 margin">--}}
{{--                <div class="news-box">--}}
{{--                    <figure><img src="{{asset('frontend/images/132.jpg')}}" alt="img" /></figure>--}}
{{--                    <h3 style="text-align:center"> Maintain Cable Color </h3>--}}
{{--                </div>--}}
{{--            </div>--}}

            @endforeach

        </div>
    </div>
</div>
<!-- end Lastestnews -->
@endsection
