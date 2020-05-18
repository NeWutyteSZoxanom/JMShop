@extends('layouts.app')

@section('content')

<div class="page-title parallax parallax1">
    		<div class="container">
    			<div class="row">
    				<div class="col-md-12">
    					<div class="page-title-heading">
    						<h1 class="title">Cart</h1>
    					</div><!-- /.page-title-heading -->
    					<div class="breadcrumbs">
    						<ul>
    							<li><a href="{{route('main')}}">Home</a></li>
    							<li><a href="{{route('cart')}}">Cart</a></li>
                               
    						</ul>
    					</div><!-- /.breadcrumbs -->
    				</div><!-- /.col-md-12 -->
    			</div><!-- /.row -->
    		</div><!-- /.container -->
    	</div><!-- /.page-title -->
                        
		<section class="flat-row main-shop">
             <div class="title-section margin-bottom-52">
                            <h2 class="title">
                                Your Cart
                            </h2>
                        </div>
			<div class="container">
                                <div style="padding-bottom: 20px;">
                                    <form action="{{route('shop')}}" >
                                        
                                        <button type="submit" >
                                            <a >Continue to Shop</a>
                                        </button>

                                    </form>
                                </div>
				@if(Cart::count()>0)
                <div style="padding-bottom: 20px;">
				<h2 >{{ Cart::count() }} item(s) in your Cart</h2>
                </div>
				

                                   

                
				@foreach(Cart::content() as $tovars)
				<section class="flat-row main-shop shop-detail style-1">
            
                <div class="row">
                    <div class="col-md-6">
                        <div class="flat-image-box clearfix">
                            <div class="inner padding-top-4">
                                <ul class="product-list-fix-image">
                                        <a>
                                            <img src="../images/shop/sh-3/{{ $tovars->id}}.jpg" alt="image">
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
                                    <h2 class="product-title">{{$tovars->name}}
                                        {{$tovars->id}}</h2>
                                    <div class="flat-star style-1">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                        <i class="fa fa-star-half-o"></i>
                                        <span>(1)</span>
                                    </div>
                                    <p>{{ $tovars->weight }}</p> 
                                    <p>{{ $tovars->description }}</p> 
                                                                  
                                   
                                    <div class="product-categories margin-top-22">
                                        <span>Categories: </span><a href="#">Men,</a> <a href="#">Shoes</a>
                                    </div>
                                    <div class="price margin-top-24">
                                        <!-- <del><span class="regular">$90.00</span></del> -->
                                        <ins><span class="amount">${{ $tovars->price }}.00</span></ins>
                                    </div> 
                                    
                                    <div class="product-quantity margin-top-35">
                                        <div class="quantity">
                                            <input type="text" value="1" name="quantity-number" class="quantity-number">
                                            <span class="inc quantity-button">+</span>
                                            <span class="dec quantity-button">-</span>
                                        </div>
                                        
                                    </div>  
                                    <form action="{{ route('cart.destroy', $tovars->rowId) }}" method="POST"style="padding-top: 20px;">
                                    	{{ csrf_field() }}
                                    	{{ method_field('DELETE') }}
                                    	<button type="submit" >
                                            <a >Remove</a>
                                        </button>
                                    </form> 

                                    <form action="{{ route('cart.destroy', $tovars->rowId) }}" method="POST" style="padding-top: 20px;">
                                        {{ csrf_field() }}
                                            
                                        <button type="submit" >
                                            <a >BUY NOW</a>
                                        </button>
                                    </form>                                   
                                   
                                </div>
                            </div>
                        </div><!-- /.product-detail -->
                    </div>
                </div><!-- /.row -->
            	</section>
              <div class="footer-bottom">
              </div>




             
                @endforeach

                @else
                <div style="padding-bottom: 20px;">
                <h3>No Items in Shopping Cart</h3>
                </div>
                @endif
            </div><!-- /.container -->

        

	
@endsection