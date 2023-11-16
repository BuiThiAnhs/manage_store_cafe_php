@extends('customer.index')
@section('ui-main')
<section class=" menu container content-section" style="padding-top: 150px" >
    <hr>
    <h2 class="section-header">Giỏ Hàng</h2>
    <div class="cart-row">
        <span class="cart-item cart-header cart-column">Sản Phẩm</span>
        <span class="cart-price cart-header cart-column">Giá</span>
        <span class="cart-quantity cart-header cart-column">Số Lượng </span>
    </div>
    <div class="cart-items">

{{-- todo: sanphamdathemgiohang--}}
        @foreach($cartItems as $cart)
            <div data-rowId="{{$cart['rowId']}}"  class= "cart-row">
                <div class="cart-item cart-column">
                    <span class="cart-item-title">{{$cart['name']}}</span>
                </div>
                <span class="cart-price cart-column">{{$cart['price']}}</span>
                <div class="cart-quantity cart-column">

                    <input class="cart-quantity-input" type="number" value="{{$cart['qty']}}" >
                    <button class="btn btn-danger" type="button">REMOVE</button>
                </div>
            </div>
        @endforeach
    </div>
    <div class="cart-total">
        <input class="form-check-input primary" type="checkbox" value="" id="checks_table" checked=""name="check_table">
        <label class="form-check-label cart-total-title" for="checks_table">
            Sử dụng tại chỗ.
        </label>
        <strong class="cart-total-title">Thanh Toán</strong>
        <span class="cart-total-price"> {{$total}}"</span>
    </div>
</section>

@endsection
