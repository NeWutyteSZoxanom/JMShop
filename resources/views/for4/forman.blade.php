@extends('layouts.app')

@section('content')
								
		<!-- <section class="flat-row row-product-project style-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title-section margin-bottom-41">
                            <h2 class="title">Best Sale</h2>
                        </div>
                        
                        <div class="divider h54"></div>
                        <div class="product-content product-fourcolumn clearfix">
                            <ul class="product style2 isotope-product clearfix">

								@foreach($tovars as $tovar)

                           

								
								 <li class="product-item kid woman">
                                    <div class="product-thumb clearfix">
                                        <a href="/shop/{{{ $tovar->id_t }}}">
                                            
                                            <img src="../images/shop/sh-3/{{ $tovar->id_t}}.jpg" alt="image">
                                        </a>
                                    </div>
                                    <div class="product-info clearfix">
                                        <span class="product-title"><a href="/shop/{{{ $tovar->id_t }}}">{{$tovar->name_t}}</a></span>
                                        <div class="price">
                                            <ins>
                                                <span class="amount"><a href="/shop/{{{ $tovar->id_t }}}">${{$tovar->price}}.00</a></span>
                                            </ins>
                                        </div>
                                        <ul class="flat-color-list width-14">
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
                                            <input type="hidden" name="id_t" value="{{$tovar->id_t}}">
                                            <input type="hidden" name="name_t" value="{{$tovar->name_t}}">
                                            <input type="hidden" name="price" value="{{$tovar->price}}">
                                            
                                                <button class="w-100" type="submit">  ADD TO CART </button>
                                            
                                        </form>
                                    </div>
                                    <a href="#" class="like"><i class="fa fa-heart-o"></i></a>
                                </li>
                                @endforeach 
                                	
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
 -->

@endsection