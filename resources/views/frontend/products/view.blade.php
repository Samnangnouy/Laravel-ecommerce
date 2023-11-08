@extends('layouts.front')
@section('title')
    {{ $products->name }}
@endsection
@section('content')
<div class="py-3 mb-4 shadow-sm bg-warning border-top">
    <div class="container">
        <h6 class="mb-0">Collections / {{ $products->category->name }} / {{ $products->name }}</h6>
    </div>
</div>
<div class="container">
    <div class="card shadow mb-4 product_data">
        <div class="card-body">
            <div class="row">
                <div class="col-md-4 borderd-right">
                    <img src="{{ asset('assets/uploads/products/'.$products->image) }}" class="w-100" alt="">
                </div>
                <div class="col-md-8">
                    <h2 class="mb-0">
                        {{ $products->name }}
                        @if($products->trending == '1')
                            <label style="font-size: 16px;" class="float-end badge bg-danger trending_tag">Trending</label>
                        @endif
                    </h2>
                    <hr>
                    <label class="me-3">Original Price : <s>Rs {{ $products->orinal_price }} </s></label>
                    <label class="fw-bold">Selling Price : Rs {{ $products->selling_price }}</label>
                    <p class="mt-3">
                        {{ $products->Small_description }}
                    </p>
                    <hr>
                    @if($products->qty > 0)
                        <label class="badge bg-success">In Stock</label>
                    @else
                        <lable class="badge bg-danger">Out Of Stock</lable>
                    @endif
                    <div class="row mt-2">
                        <div class="col-md-3">
                            <input type="hidden" class="prod_id" value="{{ $products->id }}"
                            <label for="Quantity">Quantity</label>
                            <div class="input-group text-center mb-3" style="width: 130px;">
                                <button class="input-group-text decrement-btn">-</button>
                                <input type="text" name="quantity" value="1" class="form-control text-center qty-input">
                                <button class="input-group-text increment-btn">+</button>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <br>
                            @if($products->qty > 0)
                                <button type="button" class="btn btn-primary me-3 addToCartBtn float-start">Add to Cart <i class="fa fa-shopping-cart"></i></button>
                            @endif
                            <button type="button" class="btn btn-success me-3 addToWishlist float-start">Add to Wishlist <i class="fa fa-heart"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 px-3">
                <hr>
                <h3>Description</h3>
                <p class="mt-3">
                    {{ $products->description }}
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
