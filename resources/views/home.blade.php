@extends('layouts.main')

@section('title','GEARVN - Trang chủ')

@section('content')
    <header>
        <section class="top">
            <div class="slide">
            </div>
            <div class="list">
                
            </div>
        </section>
        {{-- Middle section start --}}
        <section class="mid">
            <div class="container-md">
                <div class="logo">
                    <img src="{{asset('images/Logo-GEARVN_pc-300x70-1-1.png')}}" alt="">
                </div>
                <div class="search">
                    <form action="#">
                        <input type="text" placeholder="Bạn tìm gì..">
                        <button>
                            <i class="fas fa-search"></i>
                            <span>Tìm kiếm</span>
                        </button>
                    </form>
                </div>
                <div class="user"></div>
                <div class="cart"></div>
            </div>
        </section>
        {{-- Middle Section End --}}
        <section class="bottom">

        </section>
    </header>
@endsection