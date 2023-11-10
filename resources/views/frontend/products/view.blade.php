@extends('layouts.front')

@section('title')

{{$products->name}}

@endsection

@section('content')

<div class="py-3 mb-4 shadow-sm bg-warning border-top">
    <div class="container">
        <h6 class="mb-0">Collections / {{$products->category->name}} / {{$products->name}}</h6>
    </div>
</div>

<div class="container">
   <div class="card shadow product_data"> 
    <div class="card-body">
        <div class="row">
            <div class="col-md-4 border-right">
                <img src="{{asset('assets/uploads/product/'.$products->image)}}" class="w-100" alt="">
            </div>

            <div class="col-md-8">
                <h2 class="mb-0">
                    {{$products->name}}

                    @if($products->trending == "1")
                    <label style="font-size:16px;" class="float-end badge bg-danger trending_tag">Trending</label>
                    @endif
                </h2>
                <hr>

                <label class="me-3">Original Price: <s>TK {{$products->original_price}}</s></label>
                <label class="fw-bold">Selling Price: TK {{$products->selling_price}}</label>

                <hr>
                <p class="mt-3">
                    {{ $products->small_description }}
                </p>
                <hr>

                @if($products->qty > 0)
                <label class="badge bg-success">In Stock</label>
                @else 
                <label class="badge bg-danger">Out Of Stock</label>
                @endif

                <div class="row mt-2">
                    <div class="col-md-2">
                        <input type="hidden" value="{{$products->id}}" class="prod_id">
                        <label for="Quantity">Quantity</label>
                        <div class="input-group text-center mb-3" style="width:120px;">
                            <button class="input-group-text decreament-btn">-</button>
                            <input type="text" name="quantity" value="1" class="form-control qty-input">
                            <button class="input-group-text increament-btn">+</button>
                        </div>
                    </div>

                    <div class="col-md-10">
                        <br>

                        @if($products->qty > 0)
                        <label class="badge bg-success">In Stock</label>
                        <button type="button" class="btn btn-primary addToCart me-3 float-start">Add to Cart <i class="fas fa-shopping-cart"></i></button>
                        @endif
                        <button type="button" class="btn btn-success me-3  float-start">Add to Wishlist <i class="fas fa-heart"></i></button>

                    </div>

                </div>

               

            </div>
        </div>
<hr>
        <div class="row mt-2">
            <h3>Description:</h3>
                    <p>
                        {{$products->description}}
                   </p>
        </div>

    </div>
   </div>
</div>

@endsection

