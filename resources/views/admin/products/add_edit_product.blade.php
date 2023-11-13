@extends('admin.index')
@section('main-contents')
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form name="productForm" id="productForm" @if(empty($product['id'])) action="{{url('/admin/product/add_edit_product')}}" @else action="{{url('/admin/product/add_edit_product/'.$product['id'])}}" @endif method="post">@csrf
            <h5 class="card-title fw-semibold mb-6 ">{{$title}}</h5>
            <div class="mb-3">
                <label for="name_product" class="form-label">Sản phẩm</label>
                <input type="text" class="form-control" id="name_product" name="name_product" @if($product['name_product']) value="{{$product['name_product']}}" @endif>
            </div>
            <div class="mb-3">
                <label for="price_product" class="form-label">Giá bán</label>
                <input type="text" class="form-control" id="price_product" name="price_product" @if($product['price_product']) value="{{$product['price_product']}}" @endif>
            </div>
            <div class="mb-3">
                <label for="description_product" class="form-label">Mô tả</label>
                <textarea type="text" rows="3" class="form-control" id="description_product" name="description_product" >@if($product['description_product']) {{$product['description_product']}} @endif </textarea>
            </div>
            <div class="mb-3">
                <label for="image_product" class="form-label">Ảnh</label>
                <input type="file" class="form-control" id="image_product" name="image_product"  @if($product['image_product']) value="customer/assets/image/menu/{{$product['image_product']}}" @endif>
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Loại sản phẩm </label>
                <select id="unit" class="form-select" name="type" >
                    @foreach($product_types as $product_type_id => $product_type_name)
                        <option>{{  $product_type_name }} </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Xác nhận lại nội dung </label>
            </div>
            <button type="submit" class="btn btn-primary">Lưu </button>
            </form>
        </div>
    </div>
</div>
@endsection

