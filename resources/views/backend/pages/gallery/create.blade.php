@extends('backend.layouts.master')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="card">
                <div class="card-header">
                    Add Gallery
                </div>
                <div class="card-body">
                    <form action="{{route('admin.gallery.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @include('backend.layouts.partials.message_product')
                        <div class="form-group">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp" placeholder="Enter Gallery Name">
                        </div>
{{--                        <div class="form-group">--}}
{{--                            <label for="exampleInputPassword1" class="form-label">Description</label>--}}
{{--                            <textarea name="description" rows="8" cols="80" class="form-control"></textarea>--}}
{{--                        </div>--}}

                        <div class="form-group">
                            <label for="image" class="form-label">Gallery Image</label>
                            <input type="file" class="form-control" name="image" id="image">
                        </div>

                        <button type="submit" class="btn btn-primary">Add Gallery</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection
