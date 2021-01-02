@extends('master')
@section('content')


<h4>Search result for Products</h4>
<div class="row custom-product pt-5">
    <div class="col-sm-4">
        <a href="#">Filter</a>
    </div>
    <div class="col-sm-4">
        @foreach ($products as $item)
            <div class="container p-1">
                <div class="card" style="width:400px">
                    <div style="width:400px; height:350px;overflow: hidden;" >
                    <img class="card-img-top" src="{{$item['gallery']}}" alt="Card image">
                    </div>
                    <div class="card-body">
                    <h4 class="card-title">{{$item['name']}}</h4>
                    <p class="card-text">{{$item['description']}}</p>
                    <a href="detail/{{$item['id']}}" class="btn btn-primary stretched-link">More Details</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection