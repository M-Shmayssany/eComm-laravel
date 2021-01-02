<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-comm project</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
    /* Make the image fully responsive */
    .carousel-inner img {
        height: 400px; !important
    }
    .carousel-style {
        background: rgb(215,215,215);
        background: linear-gradient(90deg, rgba(215,215,215,1) 0%, rgba(255,255,255,1) 25%, rgba(250,250,250,1) 75%, rgba(215,215,215,1) 100%);
    }
    .slider-text {
        background-color: rgb(46 169 95 / 60%);
    }
    .detail-img {
        height: 200px;
    }
    .search-box{
        width: 500px;
    }
    </style>
</head>
<body class="d-flex flex-column h-100">
    {{View::make('header')}}
    @yield('content')
    {{View::make('footer')}}

</body>
</html>