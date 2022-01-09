@extends('master')
@section("content")
<div class="custom-product">
     <div class="col-sm-12">
        <div class="trending-wrapper">
            <h4>Result for Products</h4>
            <a class="btn btn-success" href="/"> ← Continue Shop</a> <br> <br>
            @foreach($products as $item)
            <div class=" row searched-item cart-list-devider">
              <div class="col-sm-3">
                  <a href="detail/{{$item->id}}">
                      <img class="trending-image" src="{{$item->gallery}}">
                    </a>
              </div>
              <div class="col-sm-3">
                      <div class="">
                        <h2>{{$item->name}}</h2>
                        <h5>{{$item->description}}</h5>
                      </div>
              </div>
              <div class="col-sm-2">
                      <div class="">
                        <h2>${{$item->price}}</h2>
                      </div>       
              </div>
              <div class="col-sm-1">
                  <a href="/removecart/{{$item->cart_id}}" class="btn btn-warning" >Remove to Cart</a>
              </div>
            </div>
            @endforeach
          </div>
          <a class="btn btn-success" href="ordernow" style="float:right;">Order Now</a> <br> <br>

     </div>
</div>
@endsection 