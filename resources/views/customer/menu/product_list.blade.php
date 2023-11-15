@extends('customer.index')
@section('ui-main')

<section class=" menu " id="menu">
    <h1 class="heading mt-9 "> Thực Đơn <span> thực đơn</span></h1>

    <div class="box-container">
{{--        <a href="{{url('/menu/productdetail/')}}" class="box">--}}
{{--            <img src="{{url('customer/assets/image/background_app/menu-1.png')}}" alt="">--}}
{{--            <div class="content">--}}
{{--                <h3>Bán Chạy</h3>--}}
{{--                <p>Xem những sản phẩm bán chạy của cửa hàng tại đây.</p>--}}
{{--            </div>--}}
{{--        </a>--}}

        @foreach($products as $product_id => $product_name)
            <a href="{{url('/menu/productdetail/'.$product_name)}}" class="box">
                <img src="{{url('customer/assets/image/background_app/menu-4.png')}}" alt="">
                <div class="content">
                    <h3>{{$product_name}}</h3>
                    <p>Xem những sản phẩm  tại đây.</p>
                </div>
            </a>
        @endforeach

    </div>
</section>
@endsection
