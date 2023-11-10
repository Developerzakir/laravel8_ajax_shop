@extends('layouts.admin')

@section('content')

<div class="card">
    <div class="card-header">
    <h2>Product Page</h2>


    </div>
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Category</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Selling Price</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                @foreach($products as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->category ? $item->category->name : '' }}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->description}}</td>
                    <td>{{$item->selling_price}}</td>
                    <td>
                        <img src="{{ asset('assets/uploads/product/'.$item->image) }}" width="100px" height="100px" alt="">
                    </td>
                    <td>
                        <a href="{{url('edit-product/'.$item->id)}}" class="btn btn-primary">Edit</a>
                        <a href="{{url('delete-product/'.$item->id)}}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>

                @endforeach
            </tbody>
        </table>
    </div>
</div>


@endsection