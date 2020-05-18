@extends('layouts.app')

@section('content')

    	<div class="page-title parallax parallax1">
    		<div class="container">
    			<div class="row">
    				<div class="col-md-12">
    					<div class="page-title-heading">
    						<h1 class="title">Shop</h1>
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


                <section class="flat-row main-shop" >
            <div class="container" >
                <div class="row">
                    <div class="col-md-12">
                        <div class="filter-shop clearfix">
                           
                            @if($kol >= 6)
                            
                                <h2 >
                                    Showing 6 of {{ $kol}} Products
                                </h2>
                            
                            @else
                            
                               <h2 >
                                    Showing  {{ $kol}} Products
                                </h2> 
                            
                            @endif
                            <ul class="flat-filter-search">
                                <li>
                                    <a href="#" class="show-filter">Filters</a>
                                </li>
                                <li class="search-product"><a href="#">Search</a></li>
                            </ul>
                        </div><!-- /.filte-shop -->
                        <div class="box-filter slidebar-shop" style="padding-top: 50px;">
                            <div class="btn-close"><a href="#"><i class="fa fa-times"></i></a></div>
                            <div class="widget widget-sort-by">
                                <h5 class="widget-title">
                                    Sort By
                                </h5>
                                    <ul>
                                         
                                        @foreach($categories as $category)
                                            <li ><a href="{{ route('shop', ['category'=>$category->slug])}}" class="{{ request()->category == $category->slug ? 'active' : '' }}"  >{{ $category->name }}</a></li>

                                        @endforeach                
                                    </ul>
                            </div><!-- /.widget-sort-by -->
                            <div class="widget widget-sort-by">
                                <h5 class="widget-title">
                                    Sort By
                                </h5>
                                <ul>
                                    
                                    <li><a href="{{ route('shop', ['category'=>request()->category, 'sort'=>'hi_low'])}}" class="{{ request()->sort == 'hi_low' ? 'active' : '' }}">Popularity</a></li>
                                    <li><a href="{{ route('shop', ['category'=>request()->category, 'sort'=>'newness'])}}" class="{{ request()->sort == 'newness' ? 'active' : '' }}">Newness</a></li>
                                    <li><a href="{{ route('shop', ['category'=>request()->category, 'sort'=>'low_hi'])}}" class="{{ request()->sort == 'low_hi' ? 'active' : '' }}" >Price: low to high</a></li>
                                    <li><a href="{{ route('shop', ['category'=>request()->category, 'sort'=>'hi_low'])}}" class="{{ request()->sort == 'hi_low' ? 'active' : '' }}" >Price: high to low</a></li>
                                </ul>
                            </div><!-- /.widget-sort-by -->
                            <div class="widget widget-price">
                                <h5 class="widget-title">Price</h5>
                                <ul>
                                    <li><a href="#" class="active">$0.00 - $50.00</a></li>
                                    <li><a href="#">$50.00 - $100.00</a></li>
                                    <li><a href="#">$100.00 - $200.00</a></li>
                                    <li><a href="#">$200.00 - 250.00</a></li>
                                    <li><a href="#">250.00+</a></li>
                                </ul>
                            </div><!-- /.widget -->
                           <!--  <div class="widget widget-color">
                                <h5 class="widget-title">
                                   Colors
                                </h5>
                                <ul class="flat-color-list icon-left">
                                    <li><a href="#" class="yellow"></a><span>Yellow</span></li>
                                    <li><a href="#" class="pink"> </a><span>White</span></li>
                                    <li><a href="#" class="red active"></a><span>Red</span> </li>
                                    <li><a href="#" class="black"></a><span>Black</span></li>
                                    <li><a href="#" class="blue"></a><span>Green</span></li>
                                    <li><a href="#" class="khaki"></a><span>Orange</span></li>
                                </ul>
                            </div> --><!-- /.widget-color -->
                            <!-- <div class="widget widget-size">
                                <h5 class="widget-title">Size</h5>
                                <ul>
                                    <li><a href="#">L</a></li>
                                    <li><a href="#">M</a></li>
                                    <li><a href="#">S</a></li>
                                    <li><a href="#">XL</a></li>
                                    <li><a href="#">XXL</a></li>
                                    <li><a href="#">Over Size</a></li>
                                </ul>
                            </div>/.widget --> 
                            <div class="widget widget_tag">
                                <h5 class="widget-title">
                                    Tags
                                </h5>
                                <div class="tag-list">
                                    <a href="#" class="active">All products</a>
                                    <a href="#" >Bags</a>
                                    <a href="#">Chair</a>
                                    <a href="#">Decoration</a>
                                    <a href="#">Fashion</a> 
                                    <a href="#">Tie</a>
                                    <a href="#">Furniture</a>
                                    <a href="#">Accesories</a> 
                                </div>
                            </div><!-- /.widget -->
                        </div><!-- /.box-filter -->

                         <div class="widget widget-color">
                                <h5 class="widget-title">
                                   Colors
                                </h5>
                                <ul class="flat-color-list icon-left">
                                    <li><a href="#" class="yellow"></a><span>Yellow</span></li>
                                    <li><a href="#" class="pink"> </a><span>White</span></li>
                                    <li><a href="#" class="red active"></a><span>Red</span> </li>
                                    <li><a href="#" class="black"></a><span>Black</span></li>
                                    <li><a href="#" class="blue"></a><span>Green</span></li>
                                    <li><a href="#" class="khaki"></a><span>Orange</span></li>
                                </ul>
                            </div>
                        <div class="shop-search clearfix">            
                            <form role="search" method="get" class="search-form" action="#">
                                <label>                                    
                                    <input type="search" class="search-field" placeholder="Searching …" value="" name="s">
                                </label>
                            </form>       
                        </div><!-- /.top-serach -->

                      <div class="title-section margin-bottom-52">
                            <h2 class="title">
                                {{ $catName }}
                            </h2>
                        </div>


                        <div class="product-content product-threecolumn clearfix">
                            
                            <ul class="product">
                                @forelse($tovars as $tovar)
                                <li class="product-item">
                                    <div class="product-thumb clearfix">
                                        <a href="/shop/{{{ $tovar->id }}}">
                                            <img src="images/shop/sh-3/{{ $tovar->id }}.jpg" alt="image">
                                        </a>
                                    </div>
                                    <div class="product-info clearfix">
                                   
                                             <span class="product-title">
                                             <h3> <a href="/shop/{{{ $tovar->id }}}"> {{$tovar->name_t}} </a></h3></span>
                                        
                                        <div class="price">
                                            <ins>
                                                <span class="amount"><a href="/shop/{{{ $tovar->id }}}">${{$tovar->price}}.00</a></span>
                                            </ins>
                                        </div>
                                        <ul class="flat-color-list">
                                            <li>
                                                <a href="#" class="red"></a>
                                            </li>
                                            <li>
                                                <a href="#" class="blue"></a>
                                            </li>
                                            <li>
                                                <a href="#" class="black"></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="add-to-cart text-center">
                                       

                                        <form action="{{ route('cart') }}" method="POST">

                                            {{ csrf_field() }}
                                            <input type="hidden" name="id" value="{{$tovar->id}}">
                                            <input type="hidden" name="name_t" value="{{$tovar->name_t}}">
                                            <input type="hidden" name="price" value="{{$tovar->price}}">
                                            <input type="hidden" name="description" value="{{$tovar->description}}">
                                            <button class="w-100" type="submit">  ADD TO CART </button>
                                            
                                        </form>
                                    </div>
                                    <a href="#" class="like"><i class="fa fa-heart-o"></i></a>
                                </li>
                                @empty
                                <h3>No items</h3>
                              @endforelse  
                            </ul><!-- /.product -->
                             
                        </div><!-- /.product-content -->

                       <div style="padding-top:50px; ">{{ $tovars->appends(request()->input())->links() }}</div>

                            
                        
                      


                    </div><!-- /.col-md-12 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.flat-row -->



@endsection
