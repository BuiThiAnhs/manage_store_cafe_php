@extends('customer.index')
@section('ui-main')
{{--    todo:slide--}}
<section class="home" id="home">
    <img src="">
    <div class="row">
        <div class="content">
            <h3>Một Lựa Chọn Tuyệt Cà Là Zời </h3>
            <a onclick="location.href='/menu'"class="btn">Mua hàng thôi nèo cậu ưi !!!</a>
        </div>

        <div class="image">
            <img src="../customer/assets/image/background_app/home-img-1.png" class="main-home-image" alt="">
        </div>
    </div>

    <div class="image-slider">
        <img src="../customer/assets/image/background_app/home-img-1.png" alt="">
        <img src="../customer/assets/image/background_app/home-img-2.png" alt="">
        <img src="../customer/assets/image/background_app/home-img-3.png" alt="">
    </div>
</section>
{{--todo:about us--}}

{{--todo:product bestseller--}}
<section class="" id="pricing">
    <h3>Sản Phẩm Nổi Bật</h3>
    <div class="row">
        <div class="pricing-column col-lg-4 col-md-6 col-sm-12">

            <div class="card" onclick="location.href='/menu'">
                <div class="card-header">
                    <span class="shop-item-title"><h3>COLD-BREWED</h3></span>
                </div>
                <div class="card-body">

                    <img class="card-image shop-item-image " src="https://coffeeatthree.com/wp-content/uploads/0420-cold-brew-coffee-010.jpg">

                </div>
                <div class="card-footer">
                    <span class="shop-item-price"><h3 style="text-align: center;">Đi tiếp</h3></span>
                </div>
            </div>

        </div>
        <div class="pricing-column col-lg-4 col-md-6 col-sm-12">

            <div class="card">
                <div class="card-header">
                    <span class="shop-item-title"><h3>AMERICANO</h3></span>
                </div>
                <div class="card-body">

                    <img class="card-image shop-item-image" src="https://www.adityabirlacapital.com/healthinsurance/active-together/wp-content/uploads/2019/12/How-Are-Espressos-Good-For-Health_blog_lower_1.png">


                </div>
                <div class="card-footer">
                    <span class="shop-item-price"><h3 style="text-align: center;">₹399</h3></span>
                </div>
            </div>

        </div>
        <div class="pricing-column col-lg-4 col-md-6 col-sm-12">

            <div class="card">
                <div class="card-header">
                    <span class="shop-item-title"><h3>CAPPUCCINO</h3></span>
                </div>
                <div class="card-body">

                    <img class="card-image shop-item-image" src="https://merriam-webster.com/assets/mw/images/article/art-wap-landing-mp-lg/cappuccino-2029-e80b7c6d318c7862df2c4c8623a11f99@1x.jpg">


                </div>
                <div class="card-footer">
                    <span class="shop-item-price"><h3 style="text-align: center;">₹499</h3></span>
                </div>
            </div>

        </div>
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
