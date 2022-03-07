@extends('layouts.main')

@section('title', 'GEARVN - Trang chủ')

@section('content')
    <header>
        <section class="top">
            <!-- Slider main container -->
            <div class="s1 container-fluid">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide"
                        style="background-image: url('https://gstatic.gearvn.com/2021/10/0061fd.png')"></div>
                    <div class="swiper-slide"
                        style="background-image: url('https://gstatic.gearvn.com/2021/10/0061fd.png')"></div>
                    <div class="swiper-slide"
                        style="background-image: url('https://gstatic.gearvn.com/2021/10/0061fd.png')"></div>
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
                    <img src="{{ asset('images/Logo-GEARVN_pc-300x70-1-1.png') }}" alt="">
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
        {{-- Bottom Section Start --}}
        <section class="bottom">
            <div class="container">
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
        {{-- Bottom Section End --}}
    </header>
    <main class="container">
        <section class="banner">    
            <ul class="banner-menu">
                <li class="banner-menu-item">
                    <a href="#">
                        <i class="fa fa-laptop" aria-hidden="true"></i>
                        Laptop Gaming
                        <i class="fa fa-chevron-right" aria-hidden="true"></i>
                    </a>
                </li>
                <li class="banner-menu-item">
                    <a href="#">
                        <i class="fa fa-laptop" aria-hidden="true"></i>
                        Laptop văn phòng
                        <i class="fa fa-chevron-right" aria-hidden="true"></i>
                    </a>
                </li>
                <li class="banner-menu-item">
                    <a href="#">
                        <i class="fa fa-laptop" aria-hidden="true"></i>
                        Apple
                        <i class="fa fa-chevron-right" aria-hidden="true"></i>
                    </a>
                </li>
                <li class="banner-menu-item">
                    <a href="#">
                        <i class="fa fa-laptop" aria-hidden="true"></i>
                        PC Gaming
                        <i class="fa fa-chevron-right" aria-hidden="true"></i>
                    </a>
                </li>
                <li class="banner-menu-item">
                    <a href="#">
                        <i class="fa fa-laptop" aria-hidden="true"></i>
                        PC - Máy bộ GEARVN
                        <i class="fa fa-chevron-right" aria-hidden="true"></i>
                    </a>
                </li>
                <li class="banner-menu-item">
                    <a href="#">
                        <i class="fa fa-laptop" aria-hidden="true"></i>
                        Màn hình
                        <i class="fa fa-chevron-right" aria-hidden="true"></i>
                    </a>
                </li>
                <li class="banner-menu-item">
                    <a href="#">
                        <i class="fa fa-laptop" aria-hidden="true"></i>
                        Main - CPU - VGA
                        <i class="fa fa-chevron-right" aria-hidden="true"></i>
                    </a>
                </li>
                <li class="banner-menu-item">
                    <a href="#">
                        <i class="fa fa-laptop" aria-hidden="true"></i>
                        Case - Tản - Nguồn
                        <i class="fa fa-chevron-right" aria-hidden="true"></i>
                    </a>
                </li>
                <li class="banner-menu-item">
                    <a href="#">
                        <i class="fa fa-laptop" aria-hidden="true"></i>
                        Màn hình
                        <i class="fa fa-chevron-right" aria-hidden="true"></i>
                    </a>
                </li>
                <li class="banner-menu-item">
                    <a href="#">
                        <i class="fa fa-laptop" aria-hidden="true"></i>
                        Bàn phím
                        <i class="fa fa-chevron-right" aria-hidden="true"></i>
                    </a>
                </li>
                <li class="banner-menu-item">
                    <a href="#">
                        <i class="fa fa-laptop" aria-hidden="true"></i>
                        Chuột
                        <i class="fa fa-chevron-right" aria-hidden="true"></i>
                    </a>
                </li>
            </ul>
            <div class="items">
                <div class="item">
                    <div class="s2">
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            <a href="#" class="swiper-slide" >
                                <img src="./images/banners/banner-1.jpg" alt=""
                                >
                            </a>
                            <a href="#" class="swiper-slide" >
                                <img src="./images/banners/banner-2.jpg" alt=""
                                >
                            </a>
                            <a href="#" class="swiper-slide" >
                                <img src="./images/banners/banner-3.jpg" alt=""
                                >
                            </a>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
                <a href="item">
                    <img src="./images/banners/subbaner-1.png" alt="">
                </a>
                <a href="item">
                    <img src="./images/banners/subbaner-2.png" alt="">
                </a>
                <a href="item">
                    <img src="./images/banners/subbaner-3.png" alt="">
                </a>
                <a href="item">
                    <img src="./images/banners/subbaner-4.png" alt="">
                </a>
                <a href="item">
                    <img src="./images/banners/subbaner-5.png" alt="">
                </a>
            </div>
            <div class="subbanner">
                <a href="#">
                    <img src="./images/banners/subbanner--1.png" alt="">
                </a>
                <a href="#">
                    <img src="./images/banners/subbanner--2.png" alt="">
                </a>
                <a href="#">
                    <img src="./images/banners/subbanner--1.png" alt="">
                </a>
                <a href="#">
                    <img src="./images/banners/subbanner--2.png" alt="">
                </a>
            </div>
        </section> 
        <section class="brands">
            <div class="brands-header">
                <h2>Thương hiệu sản phẩm</h2>
                <a href="#">Xem tất cả</a>
            </div>
            <div class="brands-items">
                <a href="#" class="item"><img src="./images/brands/brand-1.png" alt=""></a>
                <a href="#" class="item"><img src="./images/brands/brand-2.jpg" alt=""></a>
                <a href="#" class="item"><img src="./images/brands/brand-3.png" alt=""></a>
                <a href="#" class="item"><img src="./images/brands/brand-4.png" alt=""></a>
                <a href="#" class="item"><img src="./images/brands/brand-5.png" alt=""></a>
                <a href="#" class="item"><img src="./images/brands/brand-6.png" alt=""></a>
                <a href="#" class="item"><img src="./images/brands/brand-7.png" alt=""></a>
                <a href="#" class="item"><img src="./images/brands/brand-8.png" alt=""></a>
                <a href="#" class="item"><img src="./images/brands/brand-9.png" alt=""></a>
                <a href="#" class="item"><img src="./images/brands/brand-10.png" alt=""></a>
                <a href="#" class="item"><img src="./images/brands/brand-11.png" alt=""></a>
                <a href="#" class="item"><img src="./images/brands/brand-12.png" alt=""></a>
                <a href="#" class="item"><img src="./images/brands/brand-13.png" alt=""></a>
                <a href="#" class="item"><img src="./images/brands/brand-14.png" alt=""></a>
                <a href="#" class="item"><img src="./images/brands/brand-15.png" alt=""></a>
                <a href="#" class="item"><img src="./images/brands/brand-16.png" alt=""></a>
            </div>
        </section>
        <section class="flash-sale">
            <div class="flash-sale-header">
                
            </div>
            <div class="flash-sale-items s3">
                <div class="swiper-wrapper">
                    <div class="swiper-slide flash-sale-item">
                        <a href="#">
                            <div class="flash-sale-thumbnail">
                                <img src="./images/flashsale/flash-sale-1.jpg" alt="">
                            </div>
                            <h4>Lorem ipsum dolor sit amet consectetur adipisicing eli.</h4> 
                        </a>
                        <p>20.000.000<span>₫</span></p>
                    </div>
                    <div class="swiper-slide flash-sale-item">
                        <a href="#">
                            <div class="flash-sale-thumbnail">
                                <img src="./images/flashsale/flash-sale-2.jpg" alt="">
                            </div>
                            <h4>Lorem ipsum dolor sit amet consectetur adipisicing eli.</h4> 
                        </a>
                        <p>20.000.000<span>₫</span></p>
                    </div>
                    <div class="swiper-slide flash-sale-item">
                        <a href="#">
                            <div class="flash-sale-thumbnail">
                                <img src="./images/flashsale/flash-sale-3.jpg" alt="">
                            </div>
                            <h4>Lorem ipsum dolor sit amet consectetur adipisicing eli.</h4> 
                        </a>
                        <p>20.000.000<span>₫</span></p>
                    </div>
                    <div class="swiper-slide flash-sale-item">
                        <a href="#">
                            <div class="flash-sale-thumbnail">
                                <img src="./images/flashsale/flash-sale-4.jpg" alt="">
                            </div>
                            <h4>Lorem ipsum dolor sit amet consectetur adipisicing eli.</h4> 
                        </a>
                        <p>20.000.000<span>₫</span></p>
                    </div>
                    <div class="swiper-slide flash-sale-item">
                        <a href="#">    
                            <div class="flash-sale-thumbnail">
                                <img src="./images/flashsale/flash-sale-5.jpg" alt="">
                            </div>
                            <h4>Lorem ipsum dolor sit amet consectetur adipisicing eli.</h4> 
                        </a>
                        <p>20.000.000<span>₫</span></p>
                    </div>
                    <div class="swiper-slide flash-sale-item">
                        <a href="#">    
                            <div class="flash-sale-thumbnail">
                                <img src="./images/flashsale/flash-sale-6.jpg" alt="">
                            </div>
                            <h4>Lorem ipsum dolor sit amet consectetur adipisicing eli.</h4> 
                        </a>
                        <p>20.000.000<span>₫</span></p>
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </section>
        <section class="pc-sale">
            <div class="pc-sale-header">
                <h2>Top PC bán chạy</h2>
                <div class="pc-sale-links">
                    <a href="#" class="pc-sale-link">PC Intel NUC</a>
                    <a href="#" class="pc-sale-link">PC Gaming cao cấp</a>
                    <a href="#">iMac</a>
                </div>
            </div>
            <div class="pc-sale-body s4">
                <div class="swiper-wrapper">
                    <div class="swiper-slide pc-sale-product">
                        <a href="#">
                            <img src="./images/pcsale/pc-sale-1.jpg" alt="">
                            <h4>Lorem ipsum dolor sit amet consectetur, adipisicing</h4>
                        </a>
                        <p>6.950.000<span>₫</span></p>
                    </div>
                    <div class="swiper-slide pc-sale-product">
                        <a href="#">
                            <img src="./images/pcsale/pc-sale-1.jpg" alt="">
                            <h4>Lorem ipsum dolor sit amet consectetur, adipisicing</h4>
                        </a>
                        <p>6.950.000<span>₫</span></p>
                    </div>
                    <div class="swiper-slide pc-sale-product">
                        <a href="#">
                            <img src="./images/pcsale/pc-sale-1.jpg" alt="">
                            <h4>Lorem ipsum dolor sit amet consectetur, adipisicing</h4>
                        </a>
                        <p>6.950.000<span>₫</span></p>
                    </div>
                    <div class="swiper-slide pc-sale-product">
                        <a href="#">
                            <img src="./images/pcsale/pc-sale-1.jpg" alt="">
                            <h4>Lorem ipsum dolor sit amet consectetur, adipisicing</h4>
                        </a>
                        <p>6.950.000<span>₫</span></p>
                    </div>
                    <div class="swiper-slide pc-sale-product">
                        <a href="#">
                            <img src="./images/pcsale/pc-sale-1.jpg" alt="">
                            <h4>Lorem ipsum dolor sit amet consectetur, adipisicing</h4>
                        </a>
                        <p>6.950.000<span>₫</span></p>
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </section>
    </main>
    {{-- code footer ở dưới, có thể ẩn Header cho dễ nhìn, nhưng push lên để hiện lại giúp anh --}}
    <footer>
        <div class="container">
            <div class="footer-top">
                <div class="left">
                    <h4>Đăng ký nhận bảng tin GEARVN</h4>
                    <span>Nhận ngay thông tin về các chương trình khuyến mãi</span>
                </div>
                <form action="" class="right">
                    <input type="email" placeholder="Email của bạn...">
                    <button class="btn btn-danger">Đăng ký</button>
                </form>
            </div>
            <div class="footer-mid">
                <div class="footer-item">
                    <h4 class="title">VỀ GEARVN</h4>
                    <a href="#">Giới thiệu về GEARVN</a>
                    <a href="#">Tuyển dụng khôi Văn Phòng</a>
                    <a href="#">Tuyển dụng khối Showroom</a>
                    <a href="#">Chính sách bảo mật</a>
                    <a href="#">Điều khoản sử dụng</a>
                </div>
                <div class="footer-item">
                    <h4 class="title">HỆ THỐNG TỔNG ĐÀI MIỄN PHÍ<p>(Làm việc từ 8:00 - 20:00)</p>
                    </h4>
                    <a href="">Tổng đài mua hàng: <b>18006975</b></a>
                    <a href="">Tổng đài hỗ trợ khách hàng: <b>18006173</b></a>
                </div>
                <div class="footer-item">
                    <h4 class="title">THÔNG TIN</h4>
                    <a href="#">Theo dõi đơn hàng</a>
                    <a href="#">Mua & giao nhận hàng</a>
                    <a href="#">Quy định & hình thức thanh toán</a>
                    <a href="#">Bảo hành & bảo trì</a>
                    <a href="#">Đổi trả & hoàn tiền</a>
                </div>
                <div class="footer-item">
                    <div class="item">
                        <h4 class="title">ĐƠN VỊ VẬN CHUYỂN</h4>
                        <div class="image">
                            <img src="{{ asset('images/footer/giao-hang-nhanh.png') }}" alt="">
                            <img src="{{ asset('images/footer/giao-hang-ems.png') }}" alt="">
                            <img src="{{ asset('images/footer/giao-hang-chanh-xe.png') }}" alt="">
                            <img src="{{ asset('images/footer/giao-hang-gearvn.png') }}" alt="">
                        </div>
                    </div>
                    <div class="item">
                        <h4 class="title">CÁCH THỨC THANH TOÁN</h4>
                        <div class="image">
                            <img src="{{ asset('images/footer/internet.png') }}" alt="">
                            <img src="{{ asset('images/footer/jcb.png') }}" alt="">
                            <img src="{{ asset('images/footer/Mastercard.png') }}" alt="">
                            <img src="{{ asset('images/footer/money-face.png') }}" alt="">
                            <img src="{{ asset('images/footer/tra-gop.png') }}" alt="">
                            <img src="{{ asset('images/footer/VISA.png') }}" alt="">
                            <img src="{{ asset('images/footer/zalopay@3x.png') }}" alt="">
                            <img src="{{ asset('images/footer/momooo.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="footer-item">
                    <a href="#">
                        <img src="{{ asset('images/Logo-GEARVN_pc-300x70-1-1.png') }}" alt="">
                    </a>
                    <h3>CÔNG TY TNHH THƯƠNG MẠI GEARVN</h3>
                    <span>Gearvn là doanh nghiệp chuyên cung cấp thiết bị, giải pháp về máy tính, thiết bị chơi game, thiết
                        bị
                        cao cấp hàng đầu Việt Nam.</span>
                    <a href="">
                        <img src="{{ asset('images/footer/dathongbao.png') }}" alt="">
                    </a>
                </div>
                <div class="footer-item">
                    <h4 class="title">HỆ THỐNG SHOWROOM
                        <p>SHOWROOM HCM (Làm việc từ 8:00 - 20:00)</p>
                    </h4>
                    <li>Địa chỉ 1: 78-80-82 Hoàng Hoa Thám, Phường 12, Quận Tân Bình.</li>
                    <li>Địa chỉ 2: 905 Kha Vạn Cân, Phường Linh Tây, Thành phố Thủ Đức.</li>
                    <h4 class="title">SHOWROOM HN <p>Làm việc từ 9:00 - 19:00</p>
                    </h4>
                    <li>Địa chỉ : 37 Ngõ 121 Thái Hà, Phường Trung Liệt, Quận Đống Đa.</li>
                </div>
                <div class="footer-item">
                    <h4>TIN TỨC CÔNG NGHỆ</h4>
                    <a href=""><img src="{{ asset('images/footer/GVN360-04.png') }}" alt=""></a>
                    <h4 class="title">KẾT NỐI VỚI CHÚNG TÔI</h4>
                    <div class="image">
                        <a href=""><img src="{{ asset('images/footer/facebook.png') }}" alt=""></a>
                        <a href=""><img src="{{ asset('images/footer/group.png') }}" alt=""></a>
                        <a href=""><img src="{{ asset('images/footer/youtube.png') }}" alt=""></a>
                    </div>
                </div>
            </div>
    </footer>
@endsection