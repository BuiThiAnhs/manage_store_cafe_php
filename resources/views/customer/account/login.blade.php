@extends('customer.account.master')
@section('account')
<div class="col-md-8 col-lg-6 col-xxl-3">
    <div class="card mb-0">
        <div class="card-body">
            @if(session('notification'))
                <div class="alert alert-warning" role="alert">
                    {{session('notification')}}
                </div>
            @endif
            <a  onclick="location.href='/login'" class="text-nowrap logo-img text-center d-block py-3 w-100">
                <img src="{{url('admin/assets/images/logos/dark-logo.svg')}}" width="180" alt="">
            </a>
            <p class="text-center">Đăng Nhập Tại Đây</p>
            @if(session('notification'))
                <div class="alert alert-light-warning " role="alert">
                    {{sesion('notification')}}
                </div>
            @endif

            <form action="{{url('/login')}}" method="post">@csrf
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email">
                </div>
                <div class="mb-4">
                    <label for="pass" class="form-label">Mật Khẩu</label>
                    <input type="password" class="form-control" id="pass" name="pass">
                </div>
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <div class="form-check">
                        <input class="form-check-input primary" type="checkbox" value="" id="save-pass" checked="">
                        <label class="form-check-label text-dark" for="save-pass">
                            Ghi nhớ thiết bị này.
                        </label>
                    </div>
                    <a class="text-primary fw-bold" onclick="location.href='/home'">Quên Mật Khẩu ?</a>
                </div>
                <button type="submit" class="btn btn-dark-light w-100 py-8 fs-4 mb-4 rounded-2">Đăng Nhập</button>
                <div class="d-flex align-items-center justify-content-center">
                    <p class="fs-4 mb-0 fw-bold">Làm mới với StoreCafé ?</p>
                    <a class="text-primary fw-bold ms-2" onclick="location.href='/register'">Tạo Tài Khoản Mới</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
