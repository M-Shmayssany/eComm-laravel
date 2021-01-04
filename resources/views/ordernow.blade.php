@extends('master')
@section('content')
<div class="custom-product pt-5">
    <div class="col-sm-10">
        <table class="table table-striped">

            <tbody>
            <tr>
                <td>Amount</td>
                <td>{{$total}} €</td>
            </tr>
            <tr>
                <td>Tax</td>
                <td>0 €</td>
            </tr>
            <tr>
                <td>Delivery</td>
                <td>10 €</td>
            </tr>
            <tr>
                <td>Total Amount</td>
                <td>{{$total + 10}} €</td>
            </tr>
            </tbody>
        </table>
        <div>
            <form action="/orderplace" method="POST">
                @csrf
                <div class="form-group">
                    <textarea name="address" placeholder="enter your address" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <ul class="list-group">
                        <li class="list-group-item border-0"><label>Payment Method</label></li>
                        <li class="list-group-item border-0"><input value="online" type="radio" name="payment"><span> Online payment</span></li>
                        <li class="list-group-item border-0"><input value="transfer" type="radio" name="payment"><span> EMI payment</span></li>
                        <li class="list-group-item border-0"><input value="cash" type="radio" name="payment"><span> Payment on delevery</span></li>
                    </ul>
                </div>
                <button type="submit" class="btn btn-primary">Order New</button>
            </form>
        </div>
    </div>
</div>
@endsection