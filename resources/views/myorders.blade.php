@extends('master')
@section('content')
<main>
    <!-- Hero Area Start-->
    <div class="slider-area ">
        <div class="single-slider slider-height2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2>My Orders</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--================Cart Area =================-->
    <section class="cart_area section_padding">
      <div class="container">
        <div class="cart_inner">
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Product</th>
                  <th scope="col">Price</th>
                </tr>
              </thead>
              @foreach ($orders as $item)
              <tbody>
                <tr>
                  <td>
                    <div class="media">
                      <div class="d-flex">
                        <a href="/product_details/{{$item->id}}"><img src="{{$item->image}}" alt="{{$item->name}}" /></a>
                      </div>
                      <div class="media-body">
                        <p>{{$item->description}}</p>
                        <div class="row">
                            <div class="col-sm-6">
                                <p>Address : {{$item->address}}</p>
                            </div>
                            <div class="col-sm-6">
                                <p>Payment Method : {{$item->payment_method}}</p>
                            </div>
                        </div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <h5>${{$item->price}}</h5>
                  </td>

                </tr>
            </tbody>
            @endforeach
        </table>
</main>
@endsection
