@extends('admin.index')
@section('main-contents')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <form action="{{url('admin/account/update_account')}}" method="post" >
                    @csrf
                    <h5 class="card-title fw-semibold mb-6 ">Thay Đổi Mật Khẩu</h5>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control" id="email" value="{{\Illuminate\Support\Facades\Auth::guard('admin')->user()->email}}" readonly="">
                    </div>
                    <div class="mb-3">
                        <label for="current_password" class="form-label">Mật Khẩu Hiện Tại</label>
                        <input type="password" class="form-control" id="current_password", name="current_password">
                        <span id="verifyCurrentPassword"></span>
                    </div>
                    <div class="mb-3">
                        <label for="new_password" class="form-label">Mật Khẩu Mới</label>
                        <input type="password" class="form-control" id="new_password" name="new_password">
                    </div>
                    <div class="mb-3">
                        <label for="comfirm_password" class="form-label">Nhập Lại Mật Khẩu</label>
                        <input type="password" class="form-control" id="comfirm_password" name="comfirm_password">
                    </div>
                    <button type="submit" class="btn btn-primary">Xác nhận</button>
                </form>
            </div>
        </div>
    </div>
@endsection
