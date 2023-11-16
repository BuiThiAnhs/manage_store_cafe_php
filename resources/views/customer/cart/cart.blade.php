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
        @foreach($carts as $cart)
            <div data-rowId={{$cart->rowId}}  class="cart-row">
                <div class="cart-item cart-column">
                    <span class="cart-item-title">{{$cart->name}}</span>
                </div>
                <span class="cart-price cart-column">{{$cart->price}}</span>
                <div class="cart-quantity cart-column">

                    <input class="cart-quantity-input" type="number" value="{{$cart->qty}}" >
                    <a href="javascript:deleteCart({{$cart->rowId}})" class="btn btn-danger" type="button">REMOVE</a>
                </div>
            </div>
        @endforeach
    </div>
    <input class="form-check-input primary" type="checkbox" value="" id="checks_table"name="check_table">
    <label  class="form-check-label cart-total-title" for="checks_table">
        Sử dụng tại chỗ.
    </label>
    <div class="cart-total">
        <strong class="cart-total-title">Tổng:  </strong>
        <span class="cart-total-price"> {{$total}}"</span>
    </div>

</section>
<script>
    $('#checks_table').change(function (){
        if ($(this).is(':checked')){
            $.ajax({
                type: 'GET',
                url: '/check_table',
                success: function(response) {
                    const swalWithBootstrapButtons = Swal.mixin({
                        customClass: {
                            confirmButton: "btn btn-success",
                            cancelButton: "btn btn-danger"
                        },
                        buttonsStyling: false
                    });
                    swalWithBootstrapButtons.fire({
                        title: "Số bàn trống",
                        text: response,
                        icon: "warning",
                        showCancelButton: true,
                        confirmButtonText: "Xác nhận",
                        cancelButtonText: "Hủy",
                        reverseButtons: true
                    }).then((result) => {
                        if (result.isConfirmed) {
                            $.ajax({
                                type: 'POST',
                                url: '/update_table/' + response,
                                success: function(response) {
                                    if (response.success) {
                                        swalWithBootstrapButtons.fire({
                                            title: "Thành công!",
                                            text: "Mời bạn ra bàn.",
                                            icon: "success"
                                        });
                                    } else {
                                        // Xử lý khi cập nhật không thành công
                                    }
                                },
                                error: function() {
                                    // Xử lý khi có lỗi xảy ra trong yêu cầu AJAX
                                }
                            });
                        }
                    });
                },
                error: function() {
                    alert("Đã xảy ra lỗi khi kiểm tra bàn.");
                }
            });
        }
    })

    function addCoupon(id) {
        $.ajax({
            type:"GET",
            url:"add_coupon",
            data:{id: id},
            success: function (response) {

            },
            error: function (response) {

            },
        })
    }

    function deleteCart(rowID) {
        $.ajax({
            type: "GET",
            url: "delete_cart",
            data: { rowID: rowID },
            success: function (response) {
                $('.cart-total-price').text('$' + response['total']);
                // Hiển thị thông tin sản phẩm đã thêm vào giỏ hàng
                var cartItem = $('.content-section .cart-items');
                var cartItemData = cartItem.find("div[data-rowId='" + rowID + "']");

                cartItemData.remove();
                alert("Xoas thành công!!"+ response['cart'].name);
                console.log(response);
            },
            error: function (response) {
                alert("Xóa lỗi !!!");
                console.log(response.responseText);
            },
        });
    }
</script>
@endsection
