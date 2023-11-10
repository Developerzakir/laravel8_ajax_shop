@extends('layouts.admin')

@section('content')

<div class="card">

        <div class="card-header">
        <h2>Add Product</h2>
        </div>

        <div class="card-body">

        <form action="{{url('update-product/'.$product->id)}}" method="POST" enctype='multipart/form-data'>
            @csrf
            @method("PUT")
            <div class="row">
                <div class="col-md-12">
                    <select class="form-control" name="cat_id" aria-label="Default select example">
                        <option value="">{{$product->category->name}}</option> 
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="">Name</label>
                    <input type="text" class="form-control" value="{{$product->name}}" name="name">
                </div>

                <div class="col-md-6">
                    <label for="">Slug</label>
                    <input type="text" class="form-control" value="{{$product->slug}}" name="slug">
                </div>

                <div class="col-md-12">
                    <label for="">Small Description</label>
                    <textarea name="small_description"  class="form-control" rows="3">{{$product->small_description}}</textarea>
                </div>
                <div class="col-md-12">
                    <label for="">Description</label>
                    <textarea name="description"   class="form-control" rows="3">{{$product->description}}</textarea>
                </div>

                <div class="col-md-6">
                    <label for="">Original Price</label>
                    <input type="number" name="original_price" value="{{$product->original_price}}" class="form-control">
                </div>

                <div class="col-md-6">
                    <label for="">Selling Price</label>
                    <input type="number" name="selling_price"  value="{{$product->selling_price}}" class="form-control">
                </div>

                <div class="col-md-6">
                    <label for="">Tax</label>
                    <input type="number" name="tax" value="{{$product->tax}}" class="form-control">
                </div>

                <div class="col-md-6">
                    <label for="">Quantity</label>
                    <input type="number" name="qty" value="{{$product->qty}}" class="form-control">
                </div>

                <div class="col-md-6">
                    <label for="">Status</label>
                    <input type="checkbox" name="status"  {{$product->status ? "checked" : ""}}>
                </div>

                <div class="col-md-6">
                    <label for="">Popular</label>
                    <input type="checkbox" name="popular"  {{$product->popular ? "checked" : ""}}>
                </div>

                <div class="col-md-12">
                    <label for="">Meta Title</label>
                    <input type="text" class="form-control" name="meta_title" value="{{$product->meta_title}}">
                </div>

                <div class="col-md-12">
                    <label for="">Meta Keywords</label>
                    <input type="text" class="form-control" name="meta_keywords" value="{{$product->meta_keywords}}">
                </div>

                <div class="col-md-12">
                    <label for="">Meta Description</label>
                    <input type="text" class="form-control" name="meta_descrip" value="{{$product->meta_descrip}}">
                </div>

                @if($product->image)
                <img src="{{ asset('assets/uploads/product/'.$product->image) }}" alt="" width="100px" height="100px">
                @endif

                <div class="col-md-12">
                    <input type="file" name="image" class="form-control">
                </div>

                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>


            </div>

        </form>

            
        </div>
</div>


@endsection