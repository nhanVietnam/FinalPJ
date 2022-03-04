@extends('layouts.main')

@section('title','GEARVN - Trang chủ')

@section('content')
    <header>
        <section class="top">
            <!-- Slider main container -->
            <div class="swiper container-fluid">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide" style="background-image: url('https://gstatic.gearvn.com/2021/10/0061fd.png')"></div>
                <div class="swiper-slide" style="background-image: url('https://gstatic.gearvn.com/2021/10/0061fd.png')""></div>
                <div class="swiper-slide" style="background-image: url('https://gstatic.gearvn.com/2021/10/0061fd.png')"></div>
                </div>
            </div>
            <div class="links">
                <i class="fa-solid fa-headset"></i>
                <div class="links-wrapper container">
                    <a href="#">
                        <i class="fa fa-headphones" aria-hidden="true"></i>Tư vấn mua hàng:1800 6975
                    </a>
                    <a href="#">
                        <i class="fa fa-headphones" aria-hidden="true"></i>CSKS:1800 6173
                    </a>
                    <a href="#">
                        <i class="fa fa-newspaper-o" aria-hidden="true"></i>Tin công nghệ
                    </a>
                    <a href="#">
                        <i class="fa fa-users" aria-hidden="true"></i>Tuyển dụng  
                    </a>
                </div>
            </div>
        </section>
        {{-- Middle section start --}}
        <section class="mid">
            <div class="container">
                <div class="logo2">
                    <img src="{{asset('images/Logo-GEARVN_pc-300x70-1-1.png')}}" alt="">
                </div>
                <div class="search">
                    <form action="#">
                        <input type="text" placeholder="Bạn tìm gì..">
                        <button class="search-btn">
                            <i class="fa fa-search"></i>
                            <span>Tìm kiếm</span>
                        </button>
                    </form>
                </div>
                <div class="user">
                    <i></i>
                </div>
                <div class="cart"></div>
            </div>
        </section>
        {{-- Middle Section End --}}
        <section class="bottom">
            <div class="container-md">
                <div class="left">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                    DANH MỤC SẢN PHẨM
                </div>
                <div class="right">
                    <div class="right-item">
                        <i class="fa fa-calendar-minus-o" aria-hidden="true"></i>
                        <a href="">Hướng dẫn thanh toán</a>                        
                    </div>
                    <div class="right-item">
                        <i class="fa fa-money" aria-hidden="true"></i>
                        <a href="">Hướng dẫn trả góp</a>                      
                    </div>
                    <div class="right-item">
                        <i class="fa fa-bus" aria-hidden="true"></i>                       
                        <a href="">Chính sách giao hàng</a> 
                    </div>
                    <div class="right-item">
                        <i class="fa fa-shield" aria-hidden="true"></i>                       
                        <a href="">Chính sách bảo hành</a> 
                    </div>
                    <div class="right-item">
                        <i class="fa fa-tag" aria-hidden="true"></i>                     
                        <a href="">Tổng hợp khuyến mãi</a> 
                    </div>
                </div>
            </div>     
        </section>
    </header>
@endsection