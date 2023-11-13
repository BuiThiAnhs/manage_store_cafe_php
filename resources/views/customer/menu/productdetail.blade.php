@extends('customer.index')
@section('ui-main')
    <section class=" menu " @if(empty($product_type['name'])) href= "{{url('/menu/productdetail')}}" @else href ="{{url('/menu/productdetail/'.$product_type['name'])}}" @endif>
        <h3>{{$title}}</h3>
        <div class="row">
            @foreach($products as $product)
                <div class="pricing-column col-lg-4 col-md-6 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <span class="shop-item-title"><h3>@if($product['name_product']) {{ $product['name_product']}} @endif</h3></span>
                        </div>
                        <div class="card-body">

                            <img class="card-image shop-item-image align-items-center"  @if($product['image_product']) src="{{ asset('customer/assets/image/menu/' . $product['image_product'])}}"  @endif alt="">
                            <span class="shop-item-price mt-2"><h6 style="text-align: center;"> @if($product['description_product']){{$product['description_product']}} @endif </h6></span>

                        </div>
                        <div class="card-footer">
                            <span class="shop-item-price"><h3 style="text-align: center;"> @if($product['price_product']) {{ $product['price_product']}} @endif</h3></span>
                            <a href="{url('/cart')}}" class="btn btn-lg btn-block btn-outline-dark shop-item-button" type="button">Thêm vào giỏ hàng </a>
                        </div>
                    </div>
                </div>
        @endforeach
    </section>
@endsection
