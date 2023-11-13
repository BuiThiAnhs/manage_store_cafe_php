@extends('customer.account.master')
@section('account')
<div class="col-md-8 col-lg-6 col-xxl-3">
    <div class="card mb-0">
        <div class="card-body">
            <a onclick="location.href='/login'" class="text-nowrap logo-img text-center d-block py-3 w-100">
                <img src="{{url('/admin/assets/images/logos/dark-logo.svg')}}" width="180" alt="">
            </a>
            <p class="text-center>Đăng ký tại đây "></p>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{url('/register')}}" method="post">@csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                </div>
                <div class="mb-4">
                    <label for="password" class="form-label">Mật Khẩu</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <div class="mb-3">
                    <label for="fullname" class="form-label">Họ Tên</label>
                    <input type="text" class="form-control" id="fullname" aria-describedby="textHelp" name="fullname">
                </div>
                <div class="mb-3">
                    <label for="dayOfbirth" class="form-label">Ngày Sinh</label>
                    <input type="date" class="form-control" id="dayOfbirth" aria-describedby="textHelp" name="dayOfbirth">
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">Địa Chỉ</label>
                    <input type="text" class="form-control" id="address" aria-describedby="textHelp" name="address">
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label"> Số Điện Thoại</label>
                    <input type="text" class="form-control" id="phone" aria-describedby="numberHelp" name="phone">
                </div>

                <button class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">Đăng Ký</button>

                <div class="d-flex align-items-center justify-content-center">
                    <p class="fs-4 mb-0 fw-bold">Bạn đã có tài khoản rồi ư?</p>
                    <a class="text-primary fw-bold ms-2" onclick="location.href='/home'">Đăng Nhập</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
