@extends('master')
@section('content')

<div class="custom-product mt-5">
    <div class="col-sm-10">
        <table class="table">
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Amount</td>
                <td>$ {{$total}}</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Tax</td>
                <td>$ 0</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Delivery</td>
                <td>$ 10</td>
              </tr>
              <tr>
                <th scope="row">4</th>
                <td>Total Amount</td>
                <td>$ {{$total+10}}</td>
              </tr>
            </tbody>
          </table>
          <div>
            <form action="/orderinfo" method="POST">
                @csrf
                <div class="form-group">
                    <textarea name="address" placeholder="enter your address" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label for="pwd">Payment Method</label><br>
                    <input type="radio" value="cash" name="payment"><span>Online Payment</span><br>
                    <input type="radio" value="cash" name="payment"><span>EMI Payment</span><br>
                    <input type="radio" value="cash" name="payment"><span>Payment on Delivery</span><br>
                </div>
                <button type="submit" class="btn btn-default">Order Now</button>
              </form>
          </div>
    </div>
</div>
@endsection
