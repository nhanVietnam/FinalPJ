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
            <div class="links container">
                <a href="#">
                    Tư vấn mua hàng:1800 6975
                </a>
                <a href="#">
                    CSKS:1800 6173
                </a>
                <a href="#">
                    Tin công nghệ
                </a>
                <a href="#">
                    Tuyển dụng  
                </a>
            </div>
        </section>
        <section class="mid">
            
        </section>
        <section class="bottom">
            
        </section>
    </header>
@endsection