@extends('master')
@section('content')
<div class="custom-product pt-5">
    <div class="col-sm-10">
        <div class="trending-wrapper">
            <h4>My Oreders</h4>
            @foreach ($orders as $item)
                <div class="row searched-item cart-list-devider">
                    <div class="col-sm-4 p-5">
                        <a href="detail/{{$item->id}}">
                            <div class="img-container">
                                <img class="trending-img" src="{{$item->gallery}}">
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 p-5">
                        <a href="detail/{{$item->id}}">
                            <div class="">
                                <h2 class="text-body">Name:  {{$item->name}}</h2>
                                <span class="text-success">Price:  {{$item->price}} €</span>
                                <h6 class="text-dark">Delevery Status:  {{$item->status}}</h6>
                                <h6 class="text-dark">Delevery address: {{$item->address}}</h6>
                                <h6 class="text-dark">Payment Status:  {{$item->payment_status}}</h6>
                                <h6 class="text-dark">Payment Method:  {{$item->payment_method}}</h6>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection