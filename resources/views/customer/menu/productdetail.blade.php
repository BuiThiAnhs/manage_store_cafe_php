@extends('customer.index')
@section('ui-main')
    <section class=" menu ">
        <div class="row">
            @foreach($products as $product)
                <div class="pricing-column col-lg-4 col-md-6 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <span class="shop-item-title"><h3>{{$product['name_product']}}</h3></span>
                        </div>
                        <div class="card-body">

                            <img class="card-image shop-item-image" src="{{ asset('customer/assets/image/menu/' . $product['image_product'])}}" alt="">
                            <span class="shop-item-price"><h6 style="text-align: center;">{{$product['description_product']}}</h6></span>

                        </div>
                        <div class="card-footer">
                            <span class="shop-item-price"><h3 style="text-align: center;">{{$product['price_product']}}</h3></span>
                            <button class="btn btn-lg btn-block btn-outline-dark shop-item-button" type="button">Thêm vào giỏ hàng </button>
                        </div>
                    </div>
                </div>
        @endforeach
    </section>
@endsection
