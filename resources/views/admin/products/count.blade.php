@extends('admin.index')
@section('main-contents')
<div class="body-wrapper " style=" margin-left: auto">
    <div class="container-lg">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Thống Kê Sản Phẩm</h5>
                <a type="button" class="btn btn-light" style="float: right; display: inline-block" href="{{url('/admin/product/add_edit_product')}}">Thêm</a>

                <div class="table-responsive mb-3">
                    <table class="table text-nowrap mb-0 align-middle">
                        <thead class="text-dark fs-4">
                        <tr>
                            <th class="row-cols-3 border-bottom-0 ">
                                <h6 class="fw-semibold mb-0 m-1">Mã Sản Phẩm </h6>
                            </th>
                            <th class=" row-cols-3border-bottom-0 m-1 ">
                                <h6 class="fw-semibold mb-0">Tên Sản Phẩm</h6>
                            </th>
                            <th class=" row-cols-3 border-bottom-0 m-1">
                                <h6 class="fw-semibold mb-0">Giá </h6>
                            </th>
                            <th class="row-cols-3 border-bottom-0 m-1">
                                <h6 class="fw-semibold mb-0">Mô tả</h6>
                            </th>
                            <th class="row-cols-3 border-bottom-0 m-1">
                                <h6 class="fw-semibold mb-0">Đánh giá</h6>
                            </th>
                            <th class="row-cols-3 border-bottom-0 m-1">
                                <h6 class="fw-semibold mb-0">Ngày tạo</h6>
                            </th>
                            <th class="row-cols-3 border-bottom-0 m-1">
                                <h6 class="fw-semibold mb-0">Hành động</h6>
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($product as $product)
                            <tr>
                                <td class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">{{$product['id']}}</h6>
                                </td>
                                <td class="border-bottom-0">
                                    <h6 class="fw-semibold mb-1">{{$product['name_product']}}</h6>
                                </td>
                                <td class="border-bottom-0">
                                    <p class="mb-0 fw-normal">{{$product['price_product']}}</p>
                                </td>
                                <td class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0 fs-4">{{$product['description_product']}}</h6>
                                </td>
                                <td class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0 fs-4">{{$product['assess_product']}}</h6>
                                </td>
                                <td class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0 fs-4">{{date("d-m-Y"), strtotime($product['created_at'])}}</h6>
                                </td>
                                <td class="border-bottom-0">
                                    <a href="{{url('admin/product/add_edit_product/'.$product['id'])}}"><i class="ti ti-edit"></i></a>
                                    &nbsp; &nbsp;
                                    <a <?php /* href="{{url('admin/product/delete_product'.$page['id'])}}"*/ ?> href="javacript:void(0)" record="product" recordid="{{$product['id']}}" class="confirmDeletes" title="Xóa CMS" name=""><i class="ti ti-backspace"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection
