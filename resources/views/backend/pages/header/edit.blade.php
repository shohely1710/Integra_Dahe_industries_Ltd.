@extends('backend.layouts.master')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="card">
                <div class="card-header">
                    Edit Menu
                </div>
                <div class="card-body">
                    <form action="{{route('admin.menu.update', $menu->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @include('backend.layouts.partials.message_product')
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp" value="{{$menu->name}}">
                            {{--                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>--}}
                        </div>

                        <button type="submit" class="btn btn-success">Update Menu</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection
