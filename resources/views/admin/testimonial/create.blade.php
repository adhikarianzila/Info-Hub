@extends('layouts.admin-main')

@section('title', 'admin testimonial')

@section('content')
    <div class="container-fluid px-4">

        <div class="card mt-4">
            <div class="class card-header">
                <h1 class="mt-2">Add Testimonials</h1>
            </div>
            <div class="card-body">

                @if ($errors->any())
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                            <div>{{ $error }}</div>
                        @endforeach
                    </div>
                @endif

                <form action="{{ url('admin/add-testimonials') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="class mb-3">
                        <label>Testimonial Name</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="class mb-3">
                        <label>Title</label>
                        <input type="text" name="title" class="form-control">
                    </div>
                    <div class="class mb-3">
                        <label>Description</label>
                        <textarea name="description" rows="5" class="form-control"></textarea>
                    </div>
                    <div class="class mb-3">
                        <label>Image</label>
                        <input type="file" name="image" class="form-control">
                    </div>
                    <h6>Status Mode</h6>
                    <div class="row">
                        <div class="col-md-3 mb-3">
                            <label>Navbar Status</label>
                            <input type="checkbox" name="navbar_status" />
                        </div>
                        <div class="col-md-3 mb-3">
                            <label>Status</label>
                            <input type="checkbox" name="status" />
                        </div>
                        <div class="col-md-6">
                            <button type="submit" class="btn btn-primary">Save Testimonial</button>
                        </div>
                </form>
            </div>
        </div>
    </div>
@endsection
