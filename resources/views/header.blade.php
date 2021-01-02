<?php
use App\Http\Controllers\ProductController;
$totle= ProductController::cartItem();
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">E-comm</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav col-6">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">Orders</a>
                </li>
                </ul>
                <ul class="navbar-nav col-6 justify-content-end">
                <li class="nav-item">
                    <form action="/search" class="d-flex">
                        <input class="form-control search-box me-2" name="query" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </li>
                <li class="nav-item pr-0">
                    <a class="nav-link" aria-current="Cart" href="/cartlist">Cart({{$totle}})</a>
                </li>
                <!-- Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                    @if (Session::has('user'))
                        {{Session::get('user')['name']}}
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Profile</a>
                        <a class="dropdown-item" href="/logout">Logout</a>
                    </div>
                    @else
                    Guest
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="/login">Login</a>
                </div>
                    @endif
                </li>
            </ul>
        </div>
    </div>
</nav>
