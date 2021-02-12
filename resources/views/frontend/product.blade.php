
@extends('frontend.master')
@section('content')
    <div class="brand_color">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>our product</h2>
                    </div>
                </div>
            </div>
        </div>

    </div>
{{--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">--}}

    <!-- our Product_page -->
{{--    <div class="product">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-12 margin-tb">--}}
{{--                    <div class="pull-left">--}}
{{--                        <h2>Product Details</h2>--}}
{{--                    </div>--}}
{{--                    <div class="pull-right">--}}
{{--                        <a class="btn btn-success"href="">Show all</a>--}}
{{--                    </div>--}}
{{--                    <table class="table table-bordered">--}}
{{--                        <tr>--}}
{{--                            <th width="150px">Product Name</th>--}}
{{--                            <th width="150px">Product Code</th>--}}
{{--                            <th width="200px">Details</th>--}}
{{--                            <th width="100px">Product Logo</th>--}}
{{--                            <th width="280px">Action</th>--}}
{{--                        </tr>--}}
{{--                        @foreach($products as $pro)--}}
{{--                        <tr>--}}

{{--                            <td>{{$pro->product_name}}</td>--}}
{{--                            <td>{{$pro->product_code}}</td>--}}
{{--                            <td>{{$pro->details}}</td>--}}
{{--                            <td> </td>--}}
{{--                            <td>--}}
{{--                                <a class="btn-btn-info" href="">Show</a>--}}
{{--                                <a class="btn-btn-info" href="">Edit</a>--}}
{{--                                <a class="btn-btn-info" href="">Delete</a>--}}
{{--                            </td>--}}

{{--                        </tr>--}}
{{--                        @endforeach--}}
{{--                    </table>--}}
{{--                </div>--}}

{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

@endsection
