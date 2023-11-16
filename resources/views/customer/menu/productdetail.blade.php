@extends('customer.index')
@section('ui-main')
    <section class=" menu " @if(empty($product_type['name'])) href= "{{url('/menu/productdetail')}}" @else href ="{{url('/menu/productdetail/'.$product_type['name'])}}" @endif>
        <h2>{{$title}}</h2>
        <div class="row">
            @foreach($products as $product)
                <div class="pricing-column col-lg-4 col-md-6 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <span class="shop-item-title" ><h3>@if($product['name_product']) {{ $product['name_product']}} @endif</h3></span>
                        </div>
                        <div class="card-body">
                            <img class="card-image shop-item-image align-items-center"  @if($product['image_product']) src="{{ asset('customer/assets/image/menu/' . $product['image_product'])}}"  @endif alt="">
                            <span class="shop-item-price mt-2"><h6 style="text-align: center;"> @if($product['description_product']){{$product['description_product']}} @endif </h6></span>

                        </div>
                        <div class="card-footer">
                            <span class="shop-item-price"><h3 style="text-align: center;"> @if($product['price_product']) {{ $product['price_product']}} @endif</h3></span>

                            <a href="javascript:addCart({{$product['id']}})" class="btn btn-lg btn-block btn-outline-dark shop-item-button" type="button">Thêm vào giỏ hàng</a>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        {{ $products->links()}}
    </section>
    <script>
        function addCart(productID) {
            $.ajax({
                url: "/cart_add",
                type: "get",
                data: { productID: productID },
                success: function (response) {
                    $('.cart-total-price').text('$' + response['total']);
                    // Hiển thị thông tin sản phẩm đã thêm vào giỏ hàng
                    var cartItem = $('.content-section .cart-items');
                    var cartItemData = cartItem.find("div[data-rowId='" + response['cart'].rowId + "']");

                    if (cartItemData.length) {
                        // Nếu sản phẩm đã tồn tại trong giỏ hàng, cập nhật thông tin
                        cartItemData.find('.cart-price').text('$' + response['cart'].price.toFixed(2));
                    }
                    else {
                        // Nếu sản phẩm chưa tồn tại, thêm mới
                        var newCartItem = '<div class="cart-row" data-rowId="' + response['cart'].rowId + '">\n' +
                            '    <div class="cart-item cart-column">\n' +
                            '        <span class="cart-item-title">' + response['cart'].name + '</span>\n' +
                            '    </div>\n' +
                            '    <span class="cart-price cart-column">$' + response['cart'].price.toFixed(2) + '</span>\n' +
                            '    <div class="cart-quantity cart-column">\n' +
                            '        <input class="cart-quantity-input" type="number" value="' + response['cart'].qty + '">\n' +
                            '        <button class="btn btn-danger" type="button">REMOVE</button>\n' +
                            '    </div>\n' +
                            '</div>';
                        cartItem.append(newCartItem);
                    }
                    alert("Thêm thành công!!"+ response['cart'].name);
                    console.log(response);
                },
                error: function (response) {
                    alert("Thêm lỗi !!!");
                    console.log(response.responseText);
                },
            });
        }
    </script>

@endsection
