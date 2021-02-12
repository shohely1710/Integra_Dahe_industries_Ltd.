@extends('backend.layouts.master')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="card">
                <div class="card-header">
                    Edit Gallery
                </div>
                <div class="card-body">
                    <form action="{{route('admin.gallery.update', $gallery->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @include('backend.layouts.partials.message_product')
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp" value="{{$gallery->name}}">
                            {{--                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>--}}
                        </div>
{{--                        <div class="form-group">--}}
{{--                            <label for="exampleInputPassword1" class="form-label">Description(optional)</label>--}}
{{--                            <textarea name="description" rows="8" cols="80" class="form-control">{!! $brand->description !!}</textarea>--}}
{{--                        </div>--}}


                        <div class="form-group">
                            <label for="oldimage" class="form-label">Gallery Old Image</label><br>

                            <img src="{!!asset('images/galleries/' .$gallery->image)!!}" width="100"><br>

                            <label for="image" class="form-label">Gallery New Image(optional)</label><br>

                            <img src="{!!asset('images/galleries/' .$gallery->image)!!}" width="100">

                            <input type="file" class="form-control" name="image" id="image">

                        </div>

                        <button type="submit" class="btn btn-success">Update Gallery</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection
