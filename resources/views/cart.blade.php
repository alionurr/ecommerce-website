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
                            <h2>Cart List</h2>
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
                <div class="row mb-5">
                    <div class="col-sm-3">
                        <a href="/products" class="btn_1">Continue Shopping</a>
                    </div>
                    <div class="col-sm-3"><span class="float-right">Total : ${{$total}}</span></div>
                    <div class="col-sm-3 offset-sm-3">
                        <a href="#" class="btn_1 float-right">Order Now</a>
                    </div>
                </div>
              <thead>
                <tr>
                  <th scope="col">Product</th>
                  <th scope="col">Price</th>
                  <th scope="col">Quantity</th>
                  <th scope="col">Total</th>
                </tr>
              </thead>
              @foreach ($products as $item)
              <tbody>
                <tr>
                  <td>
                    <div class="media">
                      <div class="d-flex">
                        <a href="/product_details/{{$item->id}}"><img src="{{$item->image}}" alt="{{$item->name}}" /></a>
                      </div>
                      <div class="media-body">
                        <p>{{$item->description}}</p>
                      </div>
                    </div>
                  </td>
                  <td>
                    <h5>${{$item->price}}</h5>
                  </td>
                  <td>
                    <div class="product_count">
                      <span class="input-number-decrement"> <i class="ti-minus"></i></span>
                      <input class="input-number" type="text" value="1" min="0" max="10">
                      <span class="input-number-increment"> <i class="ti-plus"></i></span>
                    </div>
                  </td>
                  <td>
                    <h5>$720.00</h5>
                  </td>
                  <td>
                    <a href="/remove_item/{{$item->cart_id}}" class="btn">Remove</a>
                  </td>
                </tr>
            </tbody>
            @endforeach
        </table>

        <div class="row mb-5">
            <div class="col-sm-3">
                <a href="/products" class="btn_1">Continue Shopping</a>
            </div>
            <div class="col-sm-3"><span class="float-right">Total : ${{$total}}</span></div>
            <div class="col-sm-3 offset-sm-3">
                <a href="#" class="btn_1 float-right">Order Now</a>
            </div>
        </div>
          </div>
        </div>
        </div>
    </section>
    <!--================End Cart Area =================-->
</main>
@endsection
