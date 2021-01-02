@extends('master')
@section('content')

<div class="container mt-3">


    <div id="myCarousel" class="carousel slide" data-ride="carousel">
    
        <!-- Indicators -->
        <ul class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ul>
        
        <!-- The slideshow -->
        <div class="carousel-inner carousel-style">
            @foreach ($products as $item)
                <div class="carousel-item {{$item['id']==1?'active':''}}">
                    <img src="{{$item['gallery']}}" >
                    <div class="carousel-caption slider-text">
                        <h3>{{$item['name']}}</h3>
                        <p>{{$item['description']}}</p>
                    </div>
                </div>
                @endforeach
        </div>
        
        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
</div>
<div class="row col-12 pt-5">
@foreach ($products as $item)
    <div class="col col-4 container p-1">
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
@endsection