@extends('layouts.admin')

@section('content')

<div class="card">
    <div class="card-header">
    <h2>Category Page</h2>


    </div>
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                @foreach($category as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->description}}</td>
                    <td>
                        <img src="{{ asset('assets/uploads/category/'.$item->image) }}" width="100px" height="100px" alt="">
                    </td>
                    <td>
                        <a href="{{url('edit-category/'.$item->id)}}" class="btn btn-primary">Edit</a>
                        <a href="{{url('delete-category/'.$item->id)}}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>

                @endforeach
            </tbody>
        </table>
    </div>
</div>


@endsection