@extends('layouts.app')

@section('content')

        <!-- Page title -->
        <div class="page-title parallax parallax1">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-title-heading">
                            <h1 class="title">{{ $tovars->name_t }}</h1>
                        </div><!-- /.page-title-heading -->
                        <div class="breadcrumbs">
                            <ul>
                                <li><a href="{{route('main')}}">Home</a></li>
                                <li><a href="{{route('shop')}}">Shop</a></li>
                                
                            </ul>
                        </div><!-- /.breadcrumbs -->
                    </div><!-- /.col-md-12 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.page-title -->

        <section class="flat-row main-shop shop-detail style-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="flat-image-box clearfix">
                            <div class="inner padding-top-4">
                                <ul class="product-list-fix-image">
                                        <a>
                                            <img src="../images/shop/sh-3/{{ $tovars->id }}.jpg" alt="image">
                                        </a>

                                   
                                </ul>
                            </div>   
                        </div>                              
                    </div><!-- /.col-md-6 -->

                    <div class="col-md-6">
                        <div class="divider h0"></div>
                        <div class="product-detail">
                            <div class="inner">
                                <div class="content-detail">
                                    <h2 class="product-title">{{ $tovars->name_t }}</h2>
                                    <div class="flat-star style-1">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                        <i class="fa fa-star-half-o"></i>
                                        <span>(1)</span>
                                    </div>
                                    <p>{{ $tovars->description }}</p> 
                                    <div class="price margin-top-24">
                                        <!-- <del><span class="regular">$90.00</span></del> -->
                                        <ins><span class="amount">${{ $tovars->price }}.00</span></ins>
                                    </div>                                
                                    <ul class="product-infor style-1">
                                        <li><span>100% cotton</span></li>
                                        <li><span>6 months warranty</span></li>
                                        <li><span>Free Shipping</span></li>
                                        <li><span>High Quality</span></li>
                                    </ul>
                                    <div class="product-categories margin-top-22">
                                        <span>Categories: </span><a href="#">Men,</a> <a href="#">Shoes</a>
                                    </div>
                                    <div class="product-tags">
                                        <span>Tags: </span><a href="#">Dress,</a> <a href="#">Fashion,</a> <a href="#">Furniture,</a> <a href="#">Lookbok</a>
                                    </div>
                                    <div class="product-quantity margin-top-35">
                                        <div class="quantity">
                                            <input type="text" value="1" name="quantity-number" class="quantity-number">
                                            <span class="inc quantity-button">+</span>
                                            <span class="dec quantity-button">-</span>
                                        </div>
                                        
                                        <div class="add-to-cart text-center">
                                        <!-- <a href="#">ADD TO CART</a> -->

                                        <form action="{{ route('cart') }}" method="POST">

                                            {{ csrf_field() }}
                                            <input type="hidden" name="id" value="{{$tovars->id}}">
                                            <input type="hidden" name="name_t" value="{{$tovars->name_t}}">
                                            <input type="hidden" name="price" value="{{$tovars->price}}">
                                            <div class="add-to-cart text-center" >
                                                <button type="submit">  ADD TO CART </button>
                                            </div>
                                        </form>
                                    </div>
                                        <div class="box-like">
                                            <a href="#" class="like"><i class="fa fa-heart-o"></i></a>
                                        </div>
                                    </div>                                    
                                    <ul class="flat-socials margin-top-46">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- /.product-detail -->
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.flat-row -->




@endsection
