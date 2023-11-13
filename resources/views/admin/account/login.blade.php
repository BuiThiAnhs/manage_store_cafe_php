@extends('customer.account.master')
@section('account')
<div class="col-md-8 col-lg-6 col-xxl-3">
    <div class="card mb-0">
        <div class="card-body">
            <a  onclick="location.href='/account'" class="text-nowrap logo-img text-center d-block py-3 w-100">
                <img src="{{url('admin/assets/images/logos/dark-logo.svg')}}" width="180" alt="">
            </a>
            <p class="text-center">Đăng Nhập Tại Đây</p>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{url('/admin/login')}}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email"   @if(isset($_COOKIE["email"])) value="{{ $_COOKIE["email"]}}" @endif required="">
                </div>
                <div class="mb-4">
                    <label for="password" class="form-label">Mật Khẩu</label>
                    <input type="password" class="form-control" id="password" name="password"  @if(isset($_COOKIE["password"])) value="{{ $_COOKIE["password"]}}" @endif required="" >
                </div>
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <div class="form-check">
                        <input class="form-check-input primary" type="checkbox" value="" id="save-pass"   @if(isset($_COOKIE["email"])) checked="" @endif required="" name="remember">
                        <label class="form-check-label text-dark" for="save-pass">
                            Ghi nhớ thiết bị này.
                        </label>
                    </div>
                </div>
                <button type="submit" class="btn btn-dark-light w-100 py-8 fs-4 mb-4 rounded-2">Đăng Nhập</button>
            </form>
        </div>
    </div>
</div>
@endsection
