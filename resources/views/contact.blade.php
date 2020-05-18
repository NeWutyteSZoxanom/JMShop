    	@extends('layouts.app')

		@section('content')


    	<div class="page-title parallax parallax1">
    		<div class="container">
    			<div class="row">
    				<div class="col-md-12">
    					<div class="page-title-heading">
    						<h1 class="title">Contacts</h1>
    					</div><!-- /.page-title-heading -->
    					<div class="breadcrumbs">
    						<ul>
    							<li><a href="{{route('main')}}">Home</a></li>
    							<li><a href="{{route('contact')}}">Contact</a></li>
    						</ul>
    					</div><!-- /.breadcrumbs -->
    				</div><!-- /.col-md-12 -->
    			</div><!-- /.row -->
    		</div><!-- /.container -->
    	</div><!-- /.page-title -->

    	<section class="flat-row flat-iconbox">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title-section">
                            <h2 class="title">
                                Get In Touch
                            </h2>
                        </div><!-- /.title-section -->
                    </div><!-- /.col-md-12 -->
                </div><!-- /.row -->
                <div class="row">
                    <div class="col-md-4">
                        <div class="iconbox text-center">
                            <div class="box-header nomargin">
                                <div class="icon">
                                    <i class="fa fa-map-marker"></i>
                                </div>
                            </div><!-- /.box-header -->
                            <div class="box-content">
                                <p>203, Envato Labs, Behind Alis Steet</p>
                            </div><!-- /.box-content -->
                        </div><!-- /.iconbox -->
                    </div><!-- /.col-md-4 -->
                    <div class="col-md-4">
                        <div class="divider h0"></div>
                        <div class="iconbox text-center">
                            <div class="box-header">
                                <div class="icon">
                                    <i class="fa fa-phone"></i>
                                </div>
                            </div><!-- /.box-header -->
                            <div class="box-content">
                                <p>+12 345 678 910 / +23 122 345 678</p>
                            </div><!-- /.box-content -->
                        </div><!-- /.iconbox -->
                    </div><!-- /.col-md-4 -->
                    <div class="col-md-4">
                        <div class="divider h0"></div>
                        <div class="iconbox text-center">
                            <div class="box-header">
                                <div class="icon">
                                    <i class="fa fa-envelope"></i>
                                </div>
                            </div><!-- /.box-header -->
                            <div class="box-content">
                                <p>Infor.deercreative@gmail.com</p>
                            </div><!-- /.box-content -->
                        </div><!-- /.iconbox -->
                    </div><!-- /.col-md-4 -->
                </div><!-- /.row -->
                <div class="divider h43"></div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="flat-map"></div>
                    </div><!-- /.col-md-12 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.flat-row -->

        <section class="flat-row flat-contact">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title-section margin_bottom_17">
                            <h2 class="title">
                                Send Us Email
                            </h2>
                        </div><!-- /.title-section -->
                    </div><!-- /.col-md-12 -->
                </div><!-- /.row -->
                <div class="row">
                    <div class="wrap-contact">
                        <form novalidate="" class="contact-form" id="contactform" method="post" action="#">
                            <div class="form-text-wrap clearfix">
                                <div class="contact-name clearfix">
                                    <label>Name</label>                                  
                                    <input type="text"  aria-required="true" size="30" value="" name="author" id="author">
                                </div>
                                <div class="contact-email"> 
                                    <label>Email</label>                                       
                                    <input type="email" size="30" value="" name="email" id="email">
                                </div>
                                <div class="contact-subject">
                                    <label>Subject</label>                                    
                                    <input type="text"  aria-required="true" size="30" value="" name="subject" id="subject">
                                </div>
                            </div>
                                
                            <div class="contact-message clearfix margin-top-40">
                                <label>Message</label> 
                                <textarea class="" tabindex="4" name="message" required></textarea>                                      
                            </div>                                                     
                            <div class="form-submit margin-top-32 ">                 
                                <button class="contact-submit">SEND</button>
                            </div>
                        </form>
                    </div><!-- /.wrap-contact -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.flat-row -->


@endsection