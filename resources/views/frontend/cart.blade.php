@extends('layouts.front')

@section('title')

E-shop Store

@endsection

@section('content')

<div class="py-3 mb-4 shadow-sm bg-warning border-top">
    <div class="container">
        <h6 class="mb-0">
            <a href="{{url('')}}">
                Home
            </a>/
            <a href="{{url('cart')}}">
                Cart
            </a>
            
        </h6>
    </div>
</div>

<div class="container my-5">
    <div class="card shadow ">
        <div class="card-body">
            @php $total =0; @endphp 
            @foreach($cartItems as $item)
            <div class="row product_data">
                <div class="col-md-2">
                    <img width="70px" height="70px" src="{{asset('assets/uploads/product/'.$item->products->image)}}" alt="image here">
                </div>
                <div class="col-md-3 my-auto">
                    <p>{{$item->products->name}}</p>
                </div>

                <div class="col-md-2 my-auto">
                    <h6>{{$item->products->selling_price}} TK</h6>
                </div>

                <div class="col-md-3 my-auto">
                    <input type="hidden" class="prod_id" value="{{$item->prod_id}}">
                    @if($item->products->qty > $item->prod_qty )
                    <label for="Quantity">Quantity</label>
                    <div class="input-group text-center mb-3" style="width:120px;">
                        <button class="input-group-text decreament-btn   changeQuantityBtn">-</button>
                        <input type="text" name="quantity" value="{{$item->prod_qty}}" class="form-control qty-input">
                        <button class="input-group-text increament-btn   changeQuantityBtn">+</button>
                    </div>
                    @php $total +=$item->products->selling_price * $item->prod_qty ; @endphp 
                    @else 
                    <h6>Out of stock</h6>
                    @endif
                </div>
                <div class="col-md-2">
                    <button class="btn btn-danger delete-cart-item">Remove</button>
                </div>
            </div> 
            @endforeach
        </div>
        <div class="card-footer">
            <h6>
                <b>Total Price:</b> {{$total}} TK
                <a href="{{url('checkout')}}" class="btn btn-outline-success float-end">Proceed To Checkout</a>
            
            </h6>
        </div>

    </div>
</div>

@endsection