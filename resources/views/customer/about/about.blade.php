@extends('customer.index')
@section('ui-main')
About us
<section class="about" id="about">
    <h1 class="heading"> về chúng tôi <span>tại sao lại lựa chọn Store Café</span></h1>

    <div class="row">
        <div class="image">
            <img src="../customer/assets/image/background_app/about-img.jpg" alt="">
        </div>
        <div class="content">
            <h3 class="title">Sự đặc biệt của Store Café!</h3>
            <p>-Cà phê là thức uống nổi tiếng của Việt Nam . Đặc biệt là cà phê trứng một món thức uống nổi tiếng của Hà Nội. Với mong muốn mang thức uống cà phê này và nhiều loại đồ uống khác đến khách hàng, để phục vụ khách được tốt hơn, chính xác hơn và nhanh chóng hơn thì chủ quán đang từng bước hiện đại hóa..</p>
            <a href="#" class="btn">read more</a>
            <div class="icons-container">
                <div class="icons">
                    <img src="../customer/assets/image/background_app/about-icon-1.png" alt="">
                    <h3>quality coffee</h3>
                </div>
                <div class="icons">
                    <img src="../customer/assets/image/background_app/about-icon-2.png" alt="">
                    <h3>our branches</h3>
                </div>
                <div class="icons">
                    <img src="../customer/assets/image/background_app/about-icon-3.png" alt="">
                    <h3>free delivery</h3>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
