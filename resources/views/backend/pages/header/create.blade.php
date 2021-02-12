@extends('backend.layouts.master')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="card">
                <div class="card-header">
                    Add Menu
                </div>
                <div class="card-body">
                    <form action="{{route('admin.menu.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @include('backend.layouts.partials.message_product')
                        <div class="form-group">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp" placeholder="Enter Menu Name">
                        </div>


                        <button type="submit" class="btn btn-primary">Add Menu</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection
