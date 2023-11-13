@extends('customer.index')
@section('ui-main')
<section class=" home container content-section" style="padding-top: 100px">
    <hr>
    <h2 class="section-header">Giỏ Hàng</h2>
    <div class="cart-row">
        <span class="cart-item cart-header cart-column">Sản Phẩm</span>
        <span class="cart-price cart-header cart-column">Giá</span>
        <span class="cart-quantity cart-header cart-column">Số Lượng </span>
    </div>
    <div class="cart-items">

{{-- todo: sanphamdathemgiohang--}}
        <div class="cart-row">
            <div class="cart-item cart-column">
                <img class="cart-item-image" src="https://coffeeatthree.com/wp-content/uploads/0420-cold-brew-coffee-010.jpg" width="100px" height="100px">
                <span class="cart-item-title">COLD-BREWED</span>
            </div>
            <span class="cart-price cart-column">₹299</span>
            <div class="cart-quantity cart-column">
                <input class="cart-quantity-input" type="number" value="1">
                <button class="btn btn-danger" type="button">REMOVE</button>
            </div>
        </div>



    </div>
    <div class="cart-total">
        <strong class="cart-total-title">Thanh Toán</strong>
        <span class="cart-total-price">₹698</span>
    </div>
</section>
@endsection
