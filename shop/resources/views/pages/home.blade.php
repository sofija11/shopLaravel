@extends("layouts.template")
@section("mainPart")
<div class="parallax4 bg-parallax">
        <div class="overlay"></div>
        <div class="paralax-content">
            <h2>PERFECT GIFT </h2>
</hr>
<h3>FOR YOUR LOVED ONES</h3>
        
            <a href="{{ route ('shop') }}" class="button">SHOP NOW</a>
        </div>
    </div>
    <div class="section-slide">
        <div class="slide-home owl-carousel" data-animatein="fadeIn" data-animateout="fadeOut" data-margin="0" data-items="1" data-nav="true" data-autoplay="true" data-loop="true">
            <div class="item-slide">
                <figure><img src="images/slide/slide5-1.jpg" alt=""></figure>
            </div>
            <div class="item-slide">
                <figure><img src="images/slide/slide5-2.jpg" alt=""></figure>
                <div class="overlay"></div>
                <div class="content-slide">
                    <p class="crimtext caption-small">New trend 2016</p>
                    <h2 class="caption-title-2">SWEATER WITH ZIPS</h2>
                    <div class="ground-button">
                        <a href="#" class="leka-button">SHOP NOW</a>
                    </div>
                </div>
            </div>
            <div class="item-slide">
                <figure><img src="images/slide/slide4.jpg" alt=""></figure>
                <div class="overlay"></div>
                <div class="content-slide">
                    <h2 class="caption-title-3 crimtext">Autumn Winter 2019</h2>
                    <p class="caption-small-3 text-uppercase">fioral, mix & match, boemina</p>
                    <div class="ground-button">
                        <a href="#" class="leka-button">SHOP NOW</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Tabs product -->
    <section class="section-tabslide5">
        <div class="container">
            <div class="title-section text-center">
                <h2 class="title">best selling product</h2>
            </div>
            <div class="tab-slide-category">
             
                <div class="tab-content">
                    <div id="tab-product-1" role="tabpanel" class="tab-pane fade in active">
                        <div class="product-slide owl-carousel"  data-dots="false" data-nav = "true" data-margin = "30" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":4}}'>@

                    

                        </div>
                    </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ./ Tabs product -->
    <!-- Section promo -->
    <div class="section-promo">
        <div class="row">
            <div class="col-md-6">
                <img src="images/b/promo.jpg" alt="" />
            </div>
            <div class="col-md-6">
                <div class="promo-text">
                    <h2>DIAMOND RINGS</h2>
                    <p>It is made with a lot of patience and a lot of love that comes in three colors</p>
                    <a href="{{ route ('shop') }}" class="button">DISCOVER NOW</a>
                </div>

            </div>
        </div>
    </div>
    <!-- ./Section promo -->
    <!-- section paralax -->
   
    <!-- ./Section paralax -->
    <!-- Block products -->

    <!-- ./Block products -->
    <!-- Section shop band 2-->
    <div class="section-shopbrand2">
        <div class="row">
            <div class="col-md-6">
                <div class="shopbrand2">
                    <div class="title-section">
                        <h2 class="title">SHOP ONLINE </h2>
                    </div>
                    <h3><b>Delivery </b>is made to all parts of the world, and arrives at your home within 72h</h3>
                    <div class="list-brand owl-carousel" data-nav="true" data-dots="false" data-margin="130" data-responsive='{"0":{"items":3,"margin":20},"600":{"items":3,"margin":50},"1000":{"items":4}}'>
                        <div class="item-brand">
                            <a href="#">
                                <div class="logo-brand"><img src="images/band5.png" alt=""></div>
                                <div class="logo-brand-color"><img src="images/brand-1-color.png" alt=""></div>
                            </a>
                        </div>
                        <div class="item-brand">
                            <a href="#">
                                <div class="logo-brand"><img src="images/band6.png" alt=""></div>
                                <div class="logo-brand-color"><img src="images/brand-2-color.png" alt=""></div>
                            </a>
                        </div>
                        <div class="item-brand">
                            <a href="#">
                                <div class="logo-brand"><img src="images/band7.png" alt=""></div>
                                <div class="logo-brand-color"><img src="images/brand-3-color.png" alt=""></div>
                            </a>
                        </div>
                        <div class="item-brand">
                            <a href="#">
                                <div class="logo-brand"><img src="images/band8.png" alt=""></div>
                                <div class="logo-brand-color"><img src="images/brand-4-color.png" alt=""></div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <img src="images/b/promo2.jpg" alt="" />
            </div>
        </div>
        <div class="section-blog2">
    	<div class="container">
    		<div class="title-section text-center">
    			<h2 class="title">LATEST PRODUCTS</h2>
    		</div>
    		<div class="row latest">
    			<article class="col-sm-4 blog-item">
    				<div class="post-format"><figure><img src="images/blog-1.png" alt=""></figure></div>
    				<h3><a href="#">A Staturday Journey</a></h3>
    				
    			</article>
    			<article class="col-sm-4 blog-item">
    				<div class="post-format"><figure><img src="images/blog-2.png" alt=""></figure></div>
    				<h3><a href="#">A Staturday Journey</a></h3>
    				
    			</article>
    			<article class="col-sm-4 blog-item">
    				<div class="post-format"><figure><img src="images/blog-3.png" alt=""></figure></div>
    				<h3><a href="#">A Staturday Journey</a></h3>
    			
    			</article>
    		</div>
    	</div>
    </div>
    </div>
  
   
    @endsection
