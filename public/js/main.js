// main javascript file
// toolTip function
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});

//
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