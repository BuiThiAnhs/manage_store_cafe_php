@extends('admin.index')
@section('main-contents')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                        <form name="importForm" id="importForm"  action="{{url('/admin/storage/import_items')}}" method="post">@csrf
                            <h5 class="card-title fw-semibold mb-6 ">Phiếu nhập kho</h5>
                           <a type="button" class="btn btn-light" style="float: right; display: inline-block" href="{{url('/admin/storage/add_edit_ingredient')}}">Thêm nguyên liệu</a>
                            <div class="mb-3">
                                <label for="id_items" class="form-label">Mã phiếu nhập</label>
                                <input type="text" class="form-control" id="id" name="id">
                            </div>
                            <div class="mb-3">
                                <label for="date_items" class="form-label">Thời gian nhập</label>
                                <input type="date" class="form-control" id="date_import" name="date_import">
                            </div>
                            <div class="card" id="formContainer"> </div>
                            <div class="mb-3">
                                <label for="total_items" class="form-label">Thanh toán </label>
                                <input type="text" class="form-control" id="total_price" name="total_price">
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Xác nhận </label>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
@endsection
