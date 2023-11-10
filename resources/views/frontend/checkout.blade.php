@extends('layouts.front')

@section('title')

Checkout Page

@endsection

@section('content')
<div class="py-3 mb-4 shadow-sm bg-warning border-top">
    <div class="container">
        <h6 class="mb-0">
            <a href="{{url('')}}">
                Home
            </a>/
            <a href="{{url('cart')}}">
                Checkout
            </a>
            
        </h6>
    </div>
</div>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-7">
            <div class="card">
                <div class="card-body">
                    <h2>Basic Details</h2>
                    <hr>
                    <div class="row checkout-form">
                        <div class="col-md-6">
                            <label for="firstName">First Name</label>
                            <input type="text" id="firstName" class="form-control" placeholder="Enter First Name">
                        </div>

                        <div class="col-md-6">
                            <label for="lastName">Last Name</label>
                            <input type="text" id="lastName" class="form-control" placeholder="Enter Last Name">
                        </div>

                        <div class="col-md-6 mt-3">
                            <label for="email">Email</label>
                            <input type="text" id="email" class="form-control" placeholder="Enter Email">
                        </div>

                        <div class="col-md-6 mt-3">
                            <label for="phone">Phone Number</label>
                            <input type="text" id="phone" class="form-control" placeholder="Enter Phone">
                        </div>

                        <div class="col-md-6 mt-3">
                            <label for="address1">Address 1</label>
                            <input type="text" id="address1" class="form-control" placeholder="Enter Address 1">
                        </div>

                        <div class="col-md-6 mt-3">
                            <label for="address2">Address 2</label>
                            <input type="text" id="address2" class="form-control" placeholder="Enter Address 2">
                        </div>

                        <div class="col-md-6 mt-3">
                            <label for="city">City</label>
                            <input type="text" id="city" class="form-control" placeholder="Enter City">
                        </div>

                        <div class="col-md-6 mt-3">
                            <label for="state">State</label>
                            <input type="text" id="state" class="form-control" placeholder="Enter State">
                        </div>

                        <div class="col-md-6 mt-3">
                            <label for="country">Country</label>
                            <input type="text" id="country" class="form-control" placeholder="Enter Country">
                        </div>

                        <div class="col-md-6 mt-3">
                            <label for="pincode">Pin Code</label>
                            <input type="text" id="pincode" class="form-control" placeholder="Enter Pin Code">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-5">
            <div class="card">
                <div class="card-body">
                    <h6>Order details</h6>
                    <hr>
                   <table class="table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Qty</th>
                            <th>Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($cartItem as $item)
                        <tr>
                        <td>{{$item->products->name}}</td>
                        <td>{{$item->prod_qty}}</td>
                        <td>{{$item->products->selling_price}} TK</td>

                        </tr>
                        @endforeach
                    </tbody>
                   </table>
                   <hr>
                   <a href="" class="btn btn-primary  btn-block float-end">Place Order</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection