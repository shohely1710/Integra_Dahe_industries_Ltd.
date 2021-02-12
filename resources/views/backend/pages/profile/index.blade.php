@extends('backend.layouts.master')

@section('content')
    <div class="main-panel">
        <div class="content-wrapper">

            <div class="card">
                <div class="card-header">
                    Manage Profile
                </div>
                <div class="card-body">
{{--                    @include('backend.layouts.partials.messages')--}}

                    <a href="#addSliderModal" data-toggle="modal" class="btn btn-info float-right mb-2">
                        <i class="fa fa-plus"></i> Add New Image
                    </a>
                    <div class="clearfix"></div>

                    <!-- Add Modal -->
                    <div class="modal fade" id="addSliderModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Add new profile image</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>

                                <div class="modal-body">
                                    <form action="{!! route('admin.profile.store') !!}"  method="post" enctype="multipart/form-data">

                                        @csrf
                                        <div class="form-group">
                                            <label for="title">Profile Title <small class="text-danger">(required)</small></label>
                                            <input type="text" class="form-control" name="title" id="title" placeholder="Profile Title" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="image">Profile Image <small class="text-danger">(required)</small></label>
                                            <input type="file" class="form-control" name="image" id="image" placeholder="Profile Image" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputPassword1" class="form-label">Description <small class="text-danger">(required)</small></label>
                                            <textarea name="description" rows="8" cols="80" class="form-control"></textarea>
                                        </div>


                                        <button type="submit" class="btn btn-success">Add New</button>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>

                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>


                    <table class="table table-hover table-striped">
                        <tr>
                            <th>#</th>
                            <th>Profile Title</th>
                            <th>Profile Image</th>
                            <th>Profile Description</th>
                            <th>Action</th>
                        </tr>

                        @foreach ($profiles as $profile)
                            <tr>
                                <td>{{ $loop->index+1 }}</td>
                                <td>{{ $profile->title }}</td>
                                <td>
                                    <img src="{{ asset('storage/'.$profile->image) }}" width="40">
                                </td>

                                <td>
                                    {{ $profile->description }}
                                </td>

                                <td>
                                    <a href="#editModal{{ $profile->id }}" data-toggle="modal" class="btn btn-success">Edit</a>

                                    <a href="#deleteModal{{ $profile->id }}" data-toggle="modal" class="btn btn-danger">Delete</a>

                                    <!-- Delete Modal -->
                                    <div class="modal fade" id="deleteModal{{ $profile->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Are sure to delete?</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{!! route('admin.profiles.delete', $profile->id) !!}"  method="post">
                                                        {{ csrf_field() }}
                                                        <button type="submit" class="btn btn-danger">Permanent Delete</button>
                                                    </form>

                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Edit Modal -->
                                    <div class="modal fade" id="editModal{{ $profile->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Are sure to edit?</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{!! route('admin.profiles.update', $profile->id) !!}"  method="post" enctype="multipart/form-data">

                                                        {{ csrf_field() }}
                                                        <div class="form-group">
                                                            <label for="title">Profile Title <small class="text-danger">(required)</small></label>
                                                            <input type="text" class="form-control" name="title" id="title" placeholder="Profile Title" required value="{{ $profile->title }}">
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="image">Profile Image
                                                                <a href="{{ asset('storage/'.$profile->image) }}" target="_blank">
                                                                    Previous Image
                                                                </a>

                                                                <small class="text-danger">(required)</small></label>
                                                            <input type="file" class="form-control" name="image" id="image" placeholder="Profile Image">
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="exampleInputPassword1" class="form-label">Description</label>
                                                            <textarea name="description" rows="8" cols="80" class="form-control" placeholder="Profile Description" required value="{{ $profile->description }}"></textarea>
                                                        </div>


                                                        <button type="submit" class="btn btn-success">Update</button>
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>

                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </td>
                            </tr>
                        @endforeach

                    </table>
                </div>
            </div>

        </div>
    </div>
    <!-- main-panel ends -->
@endsection
