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
                    <div class="user--icon">
                        <i class="fa fa-user-o" aria-hidden="true"></i>
                    </div>
                    <div class="user--label">
                        <span>Đăng nhập / Đăng ký</span>
                        <p>Tài khoản <i class="fa fa-caret-down" aria-hidden="true"></i></p>
                    </div>
                </div>
                <div class="cart">
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                    <p>Giỏ hàng</p>
                </div>
            </div>
        </section>
        {{-- Middle Section End --}}
        <section class="bottom">
            <div class="container">
                <div class="left">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                    DANH MỤC SẢN PHẨM
                    <ul class="left-items">
                        <li class="left-item">
                            <a href="#">
                                <i class="fa fa-laptop" aria-hidden="true"></i>
                                Laptop Gaming
                            </a>
                        </li>
                        <li class="left-item">
                            <a href="#">
                                <i class="fa fa-laptop" aria-hidden="true"></i>
                                Laptop văn phòng
                            </a>
                        </li>
                        <li class="left-item">
                            <a href="#">
                                <i class="fa fa-laptop" aria-hidden="true"></i>
                                Apple
                            </a>
                        </li>
                        <li class="left-item">
                            <a href="#">
                                <i class="fa fa-laptop" aria-hidden="true"></i>
                                PC Gaming
                            </a>
                        </li>
                        <li class="left-item">
                            <a href="#">
                                <i class="fa fa-laptop" aria-hidden="true"></i>
                                PC - Máy bộ GEARVN
                            </a>
                        </li>
                        <li class="left-item">
                            <a href="#">
                                <i class="fa fa-laptop" aria-hidden="true"></i>
                                Màn hình
                            </a>
                        </li>
                        <li class="left-item">
                            <a href="#">
                                <i class="fa fa-laptop" aria-hidden="true"></i>
                                Main - CPU - VGA
                            </a>
                        </li>
                        <li class="left-item">
                            <a href="#">
                                <i class="fa fa-laptop" aria-hidden="true"></i>
                                Case - Tản - Nguồn
                            </a>
                        </li>
                        <li class="left-item">
                            <a href="#">
                                <i class="fa fa-laptop" aria-hidden="true"></i>
                               Màn hình
                            </a>
                        </li>
                        <li class="left-item">
                            <a href="#">
                                <i class="fa fa-laptop" aria-hidden="true"></i>
                                Bàn phím
                            </a>
                        </li>
                        <li class="left-item">
                            <a href="#">
                                <i class="fa fa-laptop" aria-hidden="true"></i>
                                Chuột
                            </a>
                        </li>
                    </ul>
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