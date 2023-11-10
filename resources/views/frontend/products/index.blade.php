@extends('layouts.front')

@section('title')

{{$category->name}}

@endsection

@section('content')

<div class="py-3 mb-4 shadow-sm bg-warning border-top">
    <div class="container">
        <h6 class="mb-0">Collections /{{$category->name}}</h6>
    </div>
</div>

<div class="py-5">
    <div class="container">
        <div class="row">
            <h2>{{$category->name}}</h2>
                @foreach($products as $product)
                <div class="col-md-3 mb-2">
                    <div class="card">
                        <a href="{{url('category/'.$category->slug.'/'.$product->slug)}}">
                            <img  src="{{asset('assets/uploads/product/'.$product->image)}}" alt="Product image">
                            <div class="card-body">
                                <h2>{{$product->name}}</h2>
                                <span class="float-start">{{$product->selling_price}}</span>
                                <span class="float-end"><s>{{$product->original_price}}</s></span>
                            </div>
                        </a>
                    </div>
                </div>
               @endforeach  
        </div>
    </div>
</div>

@endsection