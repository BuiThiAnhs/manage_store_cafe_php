@extends('customer.index')
@section('ui-main')
{{--    todo:slide--}}
<section class="home" id="home">
    <img src="">
    <div class="row">
        <div class="content">
            <h3>Một Lựa Chọn Tuyệt Cà Là Zời </h3>
            <a onclick="location.href='/menu/productlist'"class="btn">Mua hàng thôi nèo cậu ưi !!!</a>
        </div>

        <div class="image">
            <img src="{{url('/customer/assets/image/background_app/home-img-1.png')}}" class="main-home-image" alt="">
        </div>
    </div>

    <div class="image-slider">
        <img src="{{url('/customer/assets/image/background_app/home-img-1.png')}}" alt="">
        <img src="{{url('/customer/assets/image/background_app/home-img-2.png')}}" alt="">
        <img src="{{url('/customer/assets/image/background_app/home-img-3.png')}}" alt="">
    </div>
</section>
{{--todo:about us--}}

{{--todo:product bestseller--}}
<section class="" id="pricing">
    <h3>Sản Phẩm Nổi Bật</h3>
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
    </div>
</section>


{{--    todo:slogan--}}
<section class="book  " id="book" >
    <h1 class="heading">For you <span>From My Heart </span></h1>
    <div style="text-align: center ">
        <input type="submit" value="“Life is like a cup of coffee.
“It's all in how you prepare, but most of all it's in how you do it.”" class="btn" style = "font-size: 30px" >
    </div>
</section>
@endsection
