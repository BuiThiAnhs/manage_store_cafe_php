@extends('customer.index')
@section('ui-main')

<section class=" menu " id="menu">
    <h1 class="heading mt-9 ">our menu <span> menu</span></h1>

    <div class="box-container">
        <a href="#" class="box">
            <img src="{{url('customer/assets/image/background_app/menu-1.png')}}" alt="">
            <div class="content">
                <h3>Bán Chạy</h3>
                <p>Xem những sản phẩm bán chạy của cửa hàng tại đây.</p>
            </div>
        </a>

        <a href="#" class="box">
            <img src="{{url('customer/assets/image/background_app/menu-4.png')}}" alt="">
            <div class="content">
                <h3>Café</h3>
                <p>Xem những sản phẩm cà phê tại đây.</p>
            </div>
        </a>

        <a href="#" class="box">
            <img src="{{url('customer/assets/image/background_app/menu-6.png')}}" alt="">
            <div class="content">
                <h3>Nước Ép</h3>
                <p>Xem những sản phẩm nước ép tại đây.</p>
            </div>
        </a>

        <a href="#" class="box">
            <img src="{{url('customer/assets/image/background_app/menu-2.png')}}" alt="">
            <div class="content">
                <h3>Bánh Ngọt</h3>
                <p>Xem những sản phẩm bánh ngọt tại đây.</p>
            </div>
        </a>

    </div>
</section>
@endsection
