
<!DOCTYPE html>
<html lang="es">

<head>

    <base href="/">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Store Café</title>
    <link rel="shortcut icon" type="image/png" href="{{url('/admin/assets/images/logos/logo.png')}}"/>

    <!-- SWIPER -->
    <link rel="stylesheet" href="{url('https://unpkg.com/swiper@7/swiper-bundle.min.css')}}" />

    <!-- Font Awesome CDN Link  -->
    <link rel="stylesheet" href="{url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css')}}">

    <!-- Custom CSS File Link  -->
    <link rel="stylesheet" href="{{url('customer/assets/css/style.css')}}">
{{--    detail product--}}
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;900&family=Ubuntu:ital@0;1&display=swap" rel="stylesheet">

    <script src="{url('')}}https://kit.fontawesome.com/cc5e355fff.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="{{url('https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css')}}" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="{{url('https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js')}}" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="{{url('https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js')}}" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{url('/customer/assets/detailproduct/css/styles.css')}}">
    <script src="{{url('customer/assets/detailproduct/cart.js')}}" async></script>

</head>

<body>

<!-- HEADER -->
<header class="header">
    <div id="menu-btn" class="fas fa-bars"></div>

    <a href="#" class="logo">Store Café <i class="fas fa-mug-hot"></i></a>

    <nav class="navbar">
        <a onclick="location.href='/home'">Trang Chủ</a>
        <a onclick="location.href='/menu'">Thực Đơn</a>
        <a onclick="location.href='/about'">Liên Hệ</a>
    </nav>

    @if(\Illuminate\Support\Facades\Auth::guard('customer')->check())
        <a class="btn" onclick="location.href='/cart'"><i class="fa-solid fa-cart-shopping"></i> Giỏ hàng</a>
        <a onclick="location.href='/logout'" class="btn"> Đăng Xuất</a>
    @else
        <a onclick="location.href='/login'" class="btn"> Đăng Nhập</a>
    @endif

</header>

<!-- HOME -->

{{--MAIN--}}
@yield('ui-main')
<!-- FOOTER -->
<section class=" footer">
    <div class="box-container">
        <div class="box">
            <h3>quick links</h3>
            <a onclick="location.href='/home'"><i class="fas fa-arrow-right"></i> home</a>
            <a onclick="location.href='/about'"><i class="fas fa-arrow-right"></i> about</a>
            <a onclick="location.href='/menu'"><i class="fas fa-arrow-right"></i> menu</a>
        </div>

        <div class="box">
            <h3>liên hệ</h3>
            <a href="#"><i class="fas fa-phone"></i> +123-456-7890</a>
            <a href="#"><i class="fas fa-envelope"></i> storecafes@gmail.com</a>
            <a href="#"><i class="fas fa-location"></i> So 3, Cau Giay</a>
        </div>

        <div class="box">
            <h3>liên hệ</h3>
            <a href="#"><i class="fab fa-facebook-f"></i> facebook</a>
            <a href="#"><i class="fab fa-instagram"></i> instagram</a>
            <a href="#"><i class="fab fa-twitter"></i> twitter</a>
        </div>
    </div>

    <div class="credit">Sản phẩm của <span>Nhóm 1</span> | Store Café</div>
</section>














<!-- SWIPER -->
<script src="{{url('https://unpkg.com/swiper@7/swiper-bundle.min.js')}}"></script>

<!-- Custom JS File Link  -->
<script src="{{url('customer/assets/js/script.js')}}"></script>

</body>

</html>
