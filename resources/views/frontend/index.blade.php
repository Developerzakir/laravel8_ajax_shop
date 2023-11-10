@extends('layouts.front')

@section('title')

E-shop Store

@endsection

@section('content')

@include('layouts.inc.slider')
<div class="py-5">
    <div class="container">
        <div class="row">
            <h2>Featured Products</h2>
            <div class="owl-carousel featured-carousel owl-theme">
                @foreach($featured_products as $product)
                <div class="item">
                    <div class="card">
                        <img  src="{{asset('assets/uploads/product/'.$product->image)}}" alt="Product image">
                        <div class="card-body">
                            <h2>{{$product->name}}</h2>
                            <span class="float-start">{{$product->selling_price}}</span>
                            <span class="float-end"><s>{{$product->original_price}}</s></span>
                        </div>
                    </div>
                </div>
               @endforeach  
            </div>
        </div>
    </div>
</div>


<div class="py-5">
    <div class="container">
        <div class="row">
            <h2>Featured Category</h2>
            <div class="owl-carousel featured-carousel owl-theme">
                @foreach($featured_category as $cat)
                <div class="item">
                    <a href="{{url('view-category/'.$cat->slug)}}">
                    <div class="card">
                        <img  src="{{asset('assets/uploads/category/'.$cat->image)}}" alt="Product image">
                        <div class="card-body">
                            <h2>{{$cat->name}}</h2>
                            <p>
                                {{$cat->description}}
                            </p>
                        </div>
                    </div>
                    </a>
                </div>
               @endforeach  
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script>
    $('.featured-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    dots: false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:4
        }
    }
})
</script>

@endsection