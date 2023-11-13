@extends('customer.index')
@section('main')
    <div class="pricing-column col-lg-4 col-md-4 col-sm-4">

        <div class="card">
            <div class="card-header">
                <span class="shop-item-title"><h3>{{$sanPham->tensanpham}}</h3></span>
            </div>
            <div class="card-body">

                <img class="card-image shop-item-image" src="../customer/assets/image/menu/cafe/{{$chitietsanpham->anh[0]->path}}" alt="">
                <span class="shop-item-price"><h6 style="text-align: center;">{{$chitietsanpham->mota}}</h6></span>

            </div>
            <div class="card-footer">
                <span class="shop-item-price"><h3 style="text-align: center;">{{$sanPham->giaban}}</h3></span>
                <button class="btn btn-lg btn-block btn-outline-dark shop-item-button" type="button">Add to Cart</button>
            </div>
        </div>

    </div>
@endsection
