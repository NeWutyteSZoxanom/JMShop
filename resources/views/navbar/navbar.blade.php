<div id="loading-overlay">
        <div class="loader"></div>
    </div>

    <!-- Boxed -->
    <div class="boxed">
        <div id="site-header-wrap">
            <!-- Header -->
            <header id="header" class="header header-container clearfix">
                <div class="container clearfix" id="site-header-inner">
                    <div  class="logo float-left">
                        <a href="{{route('main')}}" title="logo">
                            <h1>JM<span style="color:#7f8285;">Shop</span></h1>
                        </a>
                    </div><!-- /.logo -->
                    <div class="mobile-button"><span></span></div>
                    <ul class="menu-extra">
                        <li class="box-search">
                            <a class="icon_search header-search-icon" href="#"></a>
                            <form role="search" method="get" class="header-search-form" action="#">
                                <input type="text" value="" name="s" class="header-search-field" placeholder="Search...">
                                <button type="submit" class="header-search-submit" title="Search">Search</button>
                            </form>
                        </li>

                        <li class="box-login nav-top-cart-wrapper">
                            <a class="icon_login nav-cart-trigger " href="#"></a>
                            <div class="nav-shop-cart">
                                <div class="widget_shopping_cart_content">
                                    <div class="woocommerce-min-cart-wrap">
                                        <ul class="woocommerce-mini-cart cart_list product_list_widget ">
                                            @guest

                                            <li>
                                                <a style="padding-left: 15px; text-align: left; border-radius: 3px;display: block; width: 100%;"href="{{route('login')}}">Login</a>
                                            </li>
                                            <li >
                                                <a style="padding-left: 15px; text-align: left; border-radius: 3px;display: block; width: 100%;"href="{{route('register')}}">Signup</a>
                                            </li>
                                            <li >
                                                <a style="padding-left: 15px; text-align: left; border-radius: 3px;display: block; width: 100%;"href="#">My purchases</a>
                                            </li>
                                            @else
                                            <li >
                                                <a style="padding-left: 15px; text-align: left; border-radius: 3px;display: block; width: 100%;"href="#">My purchases</a>
                                            </li>
                                            <li >
                                                <a style="padding-left: 15px; text-align: left; border-radius: 3px;display: block; width: 100%;"href="{{route('logout')}}" onclick="event.preventDefault();
                                                document.getElementById('logout_form').submit();">Logout</a>


                                                <form id="logout_form" action="{{route('logout')}}" method="POST" >{{ csrf_field() }}
                                                </form>
                                            </li>
                            
                                            @endguest
                                        </ul>
                                    </div><!-- /.widget_shopping_cart_content -->
                                </div>
                            </div><!-- /.nav-shop-cart -->
                        </li>


                        <li class="box-cart nav-top-cart-wrapper">
                            @if(Cart::count()>0)
                                <a href="{{route('cart')}}" class="icon_cart nav-cart-trigger active " href="#">
                                    
                                        <span>{{ Cart::count()}}</span>
                                    
                                </a>  
                                @else
                                 <a href="{{route('cart')}}" class="icon_cart nav-cart-trigger " href="#">
                                    
                                       
                                    
                                </a> 
                            @endif
                            <div class="nav-shop-cart">
                                <div class="widget_shopping_cart_content">
                                    <div class="woocommerce-min-cart-wrap">
                                        
                                            <ul class="woocommerce-mini-cart cart_list product_list_widget ">
                                                <li class="woocommerce-mini-cart-item mini_cart_item">
                                                    @if(Cart::count()==0)
                                                    <span>No Items in Shopping Cart</span>
                                                  
                                                </li>
                                            </ul>
                                          @else
                                            <ul class="woocommerce-mini-cart cart_list product_list_widget ">
                                               
                                                <li class="woocommerce-mini-cart-item mini_cart_item">
                                                    <span>{{ Cart::count() }} item(s) in your Cart</span>
                                                </li>
                                                
                                            </ul>
                                        @endif
                                    </div><!-- /.widget_shopping_cart_content -->
                                </div>
                            </div><!-- /.nav-shop-cart -->
                        </li>
                    </ul><!-- /.menu-extra -->
                    <div class="nav-wrap">
                        <nav id="mainnav" class="mainnav">
                            <ul class="menu">
                              <li>
                                    <a href="{{route('main')}} " style="font-weight: bold;">HOME</a>
                                </li>

                                <li>
                                    <a href="{{route('shop')}}" style="font-weight: bold;">SHOP</a>
                                    
                                </li>
                                
                 
                                <li>
                                    <a href="{{route('contact')}}" style="font-weight: bold;">CONTACT</a>
                    
                                </li>
                            </ul>
                        </nav><!-- /.mainnav -->
                    </div><!-- /.nav-wrap -->
                </div><!-- /.container-fluid -->
            </header><!-- /header -->
        </div><!-- /#site-header-wrap -->







    <!-- Footer -->


  <!-- Javascript -->
   
