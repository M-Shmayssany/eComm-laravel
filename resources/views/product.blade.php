@extends('master')
@section('content')
<div class="row">
    
        <div class="col-md-3">
			<!-- Categories Links Starts -->
				<h3 class="side-heading">Categories</h3>
				<div class="list-group categories">
                    @foreach($categories as $category)
					<a href="category-grid.html" class="list-group-item">
						<i class="fa fa-chevron-right"></i>
						{{$category['name']}}
                    </a>
                    @endforeach
				</div>
			<!-- Categories Links Ends -->
			<!-- Special Products Starts -->
				<h3 class="side-heading">Specials</h3>
				<ul class="side-products-list">
                <!-- Special Product #1 Starts -->
                @foreach ($products as $item)
                @if($item['tag_message'] == 'special')
					<li class="clearfix">
						<img src="{{$item['gallery']}}" alt="Special product" class="img-responsive">
						<h5 class="col-sm-12"><a href="#">{{$item['name']}}</a></h5>
						<div class="price col-sm-12">
                            <span class="price-new">€ {{$item['price']}}</span>
                            @if($item['old_price'] != '') 
                            <span class="price-old">€ {{$item['old_price']}}</span>
                            @endif
						</div>
                    </li>
                    <!-- Special Product #1 Ends -->
                @endif
                @endforeach
				</ul>
			<!-- Special Products Ends -->
			<!-- Banner #1 Starts -->
				<img src="img/side-banner1.jpg" alt="Side Banner" class="img-responsive">
				<br>
			<!-- Banner #1 Ends -->
			<!-- Shopping Options Starts -->
				<h3 class="side-heading">Shopping Options</h3>
				<div class="list-group">
					<div class="list-group-item">
						Brands
					</div>
					<div class="list-group-item">
						<div class="filter-group">
							<label class="checkbox">
								<input name="filter1" type="checkbox" value="br1" checked="checked">
								Brand Name 1
							</label>
							<label class="checkbox">
								<input name="filter2" type="checkbox" value="br2">
								Brand Name 2
							</label>
							<label class="checkbox">
								<input name="filter3" type="checkbox" value="br3">
								Brand Name 3
							</label>
							<label class="checkbox">
								<input name="filter4" type="checkbox" value="br4">
								Brand Name 4
							</label>
						</div>
					</div>
					<div class="list-group-item">
						Manufacturer
					</div>
					<div class="list-group-item">
						<div class="filter-group">
							<label class="radio">
								<input name="filter-manuf" type="radio" value="mr1" checked="checked">
								Manufacturer Name 1
							</label>
							<label class="radio">
								<input name="filter-manuf" type="radio" value="mr2">
								Manufacturer Name 2
							</label>
							<label class="radio">
								<input name="filter-manuf" type="radio" value="mr3">
								Manufacturer Name 3
							</label>
						</div>							
					</div>	
					<div class="list-group-item">
						<button type="button" class="btn btn-black">Filter</button>
					</div>
				</div>
			<!-- Shopping Options Ends -->
			</div>
    
    <div class="col-sm-9">
        <div class="container mt-3">


            <div id="myCarousel" class="carousel slide" data-ride="carousel">
            
                <!-- Indicators -->
                <ul class="carousel-indicators">
                    @foreach ($products as $key => $item)
                    <li data-target="#myCarousel" data-slide-to="{{$key}}" class="{{$key==0?'active':''}}"></li>

                    @endforeach
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

        <div class="row">
        @foreach ($products as $item)
        <div class="col-6 col-md-3 mb-2">
            <div class="card card-product">
                @if($item['tag_type'] == 'corner_tag')
                <div class="ribbon"><span class="text-white" style="background-color: {{$item['tag_color']}};">{{$item['tag_message']}}</span></div>
                @elseif($item['tag_type'] == 'flat_tag')
                <div class="badge badge-pill"  style="background-color: {{$item['tag_color']}};">{{$item['tag_message']}}</div>
                @endif
                <button class="wishlist active" title="Added to wishlist"><i class="fa fa-heart" style="color: red;"></i></button>
                <a href="detail.html"><img src="{{$item['gallery']}}" alt="Apple 15.4&quot; MacBook Pro Laptop Space Gray" class="card-img-top"></a>
                <div class="card-body">
                    <span class="price">€ {{$item['price']}}</span>
                    <a href="detail.html" class="card-title h6">{{$item['name']}}</a>
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="rating" data-value="4"><i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                        </span>
                        <a href="detail/{{$item['id']}}" type="button" class="btn btn-outline-info btn-sm">More Details</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    </div>
</div>
@endsection