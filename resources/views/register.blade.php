@extends('master')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-sm-4 offset-sm-4">
                <form action="register" method="POST">
                    @csrf
                    <i class="mb-4 fa fa-address-card-o" style="font-size:72px;color:red"></i>
                    <h1 class="h3 mb-3 fw-normal">Registration Form</h1>
                    <label for="inputUserName" class="visually-hidden">User name</label>
                    <div class="d-flex">
                        <input class="col-sm-12" onchange="checkUserName()" type="text" id="inputUserName" name="name" class="form-control" placeholder="User name" required autofocus><i id="checkN"></i>
                    </div>
                    <label for="inputEmail" class="visually-hidden">Email address</label>
                    <div class="d-flex">
                        <input class="col-sm-12" type="email" onchange="checkEmail()" id="inputEmail" name="email" class="form-control" placeholder="Email address" required autofocus><i id="checkE"></i>
                    </div>
                    <label for="inputPassword" class="visually-hidden">Password</label>
                    <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
                    <label for="checkPassword" class="visually-hidden">Reenter Password</label>
                    <div class="d-flex">
                        <input class="col-sm-12" type="password" id="rePassword" onkeyup="checkPassword()" name="ckeckPassword" class="form-control" placeholder="Password" required><i id="check"></i>
                    </div>
                    <button id="submit" class="w-100 btn btn-lg mt-5 btn-primary" type="submit" disabled>Register</button>
                </form>
            </div>
        </div>
    </div>

<script>

    function checkPassword(){
        let password = document.getElementById('inputPassword').value;
        let rePassword = document.getElementById('rePassword').value;
        let submit = document.getElementById('submit');
        let check = document.getElementById('check');

        if(rePassword == password){
            check.setAttribute('class', 'fa fa-check');
            check.setAttribute('style', 'font-size:32px;color:green;');
            (rePassword == password && checkEmail() && checkUserName())? submit.disabled = false:submit.disabled = true;
        }else{
            check.setAttribute('class', 'fa fa-close');
            check.setAttribute('style', 'font-size:32px;color:red;');
            (rePassword == password && checkEmail() && checkUserName())? submit.disabled = false:submit.disabled = true;
        }
    }
    
    function checkEmail(){
        let email = document.getElementById('inputEmail').value;
        let check = document.getElementById('checkE');
        let regExp = new RegExp("^[\\w-\\.]+@([\\w-]+\\.)+[\\w-]{2,4}$");
        if(regExp.test(email)){
            check.setAttribute('class', 'fa fa-check');
            check.setAttribute('style', 'font-size:32px;color:green;');
            return true;
        }else{
            check.setAttribute('class', 'fa fa-close');
            check.setAttribute('style', 'font-size:32px;color:red;');
            return false;
        }
    }

    function checkUserName(){
        let userName = document.getElementById('inputUserName').value;
        let regExp = new RegExp("^.{3,}$");
        let check = document.getElementById('checkN');

        if(regExp.test(userName)){
            check.setAttribute('class', 'fa fa-check');
            check.setAttribute('style', 'font-size:32px;color:green;');

            return true;
        }else{
            check.setAttribute('class', 'fa fa-close');
            check.setAttribute('style', 'font-size:32px;color:red;');

            return false;
        }
    }
  </script>
@endsection