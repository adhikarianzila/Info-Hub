@extends('layouts.admin-main')

@section('title', 'admin testimonial')

@section('content')
    <div class="container-fluid px-4">
        <div class="class card-header">
            <h4>View Testimonials
                <a href="{{ url('admin/add-testimonials') }}" class="btn btn primary btn -sm float-end">Add
                    Testimonial</a>
            </h4>
        </div>
        <div class="card-body">
            @if (session('message'))
                <div class="alert alert-success">{{ session('message') }}</div>
            @endif

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Title</th>
                        <th>Image</th>
                        <th>Comment</th>
                        <th>Status</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($testimonial as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->title }}</td>
                            <td>
                                <img src="{{ asset('uploads/testimonial/' . $item->image) }}" width="50px" height="50px"
                                    alt="img">
                            </td>
                            <td>{{ $item->description }}</td>
                            <td>{{ $item->status == '1' ? 'Hidden' : 'Shown' }}</td>
                            <td>
                                <a href="" class="btn btn-success">Edit</a>
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    @endsection
