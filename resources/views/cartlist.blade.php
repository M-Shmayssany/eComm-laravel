@extends('master')
@section('content')



<div class="custom-product pt-5">
    <div class="col-sm-10">
        <div class="trending-wrapper">
            <h4>Cart for Products</h4>
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
                                <h2>{{$item->name}}</h2>
                                <h6>{{$item->description}}</h6>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-3 pt-5">
                        <button class="btn btn-warning">Remove from Cart</button>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection