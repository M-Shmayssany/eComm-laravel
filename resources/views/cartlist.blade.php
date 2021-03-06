@extends('master')
@section('content')
<div class="custom-product pt-5">
    <div class="col-sm-10">
        <div class="trending-wrapper">
            <h4>Cart for Products</h4>
            <a class="btn btn-success mb-5" href="ordernow">Order Now</a>
            @foreach ($products as $item)
                <div class="row searched-item cart-list-devider">
                    <div class="col-sm-4 p-5">
                        <a href="detail/{{$item->id}}">
                            <div class="img-container">
                                <img class="trending-img" src="{{$item->gallery}}">
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-4 p-5">
                        <a href="detail/{{$item->id}}">
                            <div class="">
                                <h2 class="text-body">{{$item->name}}</h2>
                                <h6 class="text-dark">{{$item->description}}</h6>
                                <span class="text-success">{{$item->price}} €</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-3 pt-5">
                        <a href="/removecart/{{$item->cart_id}}" class="btn btn-warning">Remove from Cart</a>
                    </div>
                </div>
            @endforeach
        </div>
        <a class="btn btn-success mt-5" href="ordernow">Order Now</a>
    </div>
</div>
@endsection