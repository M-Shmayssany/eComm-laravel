@extends('master')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-sm-4 offset-sm-4">
                <form action="login" method="POST">
                    @csrf
                    <i class="mb-4 fa fa-address-card-o" style="font-size:72px;color:red"></i>
                    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
                    <label for="inputEmail" class="visually-hidden">Email address</label>
                    <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required autofocus>
                    <label for="inputPassword" class="visually-hidden">Password</label>
                    <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
                    <div class="checkbox mb-3">
                        <label>
                        <input type="checkbox" value="remember-me"> Remember me
                        </label>
                    </div>
                    <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
                    <a href="/register">Register!</a>
                </form>
            </div>
        </div>
    </div>

  
@endsection