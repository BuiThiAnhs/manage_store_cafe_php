@extends('admin.index')
@section('main-contents')
<div class="body-wrapper" style="margin-left: initial">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Thống Kê Nguyên Liệu Nhập Kho</h5>
                <div class="table-responsive mb-3">
                    <table class="table text-nowrap mb-0 align-middle">
                        <thead class="text-dark fs-4">
                        <tr>
                            <th class="row-cols-3 border-bottom-0 ">
                                <h6 class="fw-semibold mb-0 m-1">Mã Nguyên Liệu </h6>
                            </th>
                            <th class=" row-cols-3border-bottom-0 m-1 p-3">
                                <h6 class="fw-semibold mb-0">Tên Nguyên Liệu</h6>
                            </th>
                            <th class="row-cols-3 border-bottom-0 m-1">
                                <h6 class="fw-semibold mb-0">Giá Mua </h6>
                            </th>
                            <th class=" row-cols-3 border-bottom-0 m-1">
                                <h6 class="fw-semibold mb-0">Loại nguyên liệu</h6>
                            </th>
                            <th class="row-cols-3 border-bottom-0 m-1">
                                <h6 class="fw-semibold mb-0">Số Lượng </h6>
                            </th>
                            <th class="row-cols-3 border-bottom-0 m-1">
                                <h6 class="fw-semibold mb-0">Đơn Vị </h6>
                            </th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($ingredients as $ingredient)
                            <tr>
                                <td class="border-bottom-0"><h6 class="fw-semibold mb-0">{{$ingredient['id']}}</h6></td>
                                <td class="border-bottom-0">
                                    <h6 class="fw-semibold mb-1">{{$ingredient['name_ingredient']}}</h6>
                                </td>
                                <td class="border-bottom-0">
                                    <h6 class="mb-0 fw-normal">{{$ingredient['price_ingredient']}}</h6>
                                </td>
                                <td class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0 fs-4">{{ $ingredient['type'] }}</h6>
                                </td>
                                <td class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0 fs-4">{{$ingredient['amount']}}</h6>
                                </td>
                                <td class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0 fs-4">{{$ingredient['unit']}}</h6>
                                </td>
                                <td class="border-bottom-0">
                                    &nbsp; &nbsp;
                                    <a href="{{url('admin/storage/add_edit_ingredient/'.$ingredient['id'])}}"><i class="ti ti-edit"></i></a>
                                    &nbsp; &nbsp;
                                    <a href="javacript:void(0)" record="ingredient" recordid="{{$ingredient['id']}}" class="confirmDeletes" title="Xóa nguyên liệu" name=""><i class="ti ti-backspace"></i></a>
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
