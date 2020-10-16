@extends("layouts.template")
@section("mainPart")

    <div class="maincontainer">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="single-images">
                       <img src="../images/productsShop/{{ $product->image }}"/>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="summary entry-summary">
                        <h1 class="product_title entry-title">{{ $product->name }}</h1>
                        
                       
                        <!-- <span class="in-stock"><i class="fa fa-check-circle-o"></i> In stock</span> -->
                        
                        <p class="price">
                            <ins><span class="amount">${{ $product->price }}</span></ins>
                            <!-- <del><span class="amount">$128.90</span></del>  -->
                        </p>
                        <form class="variations_form ">
                            <table class="variations">
                    			<tbody>
    								<tr>
                						
                					</tr>
                    		        <tr>
                                       
                   					</tr>
       		        			</tbody>
                    		</table>
                            <div class="single_variation_wrap">
                              
                                <button type="submit" class="single_add_to_cart_button ">Add to cart</button>
                               
                            
                            </div>
                        </form>
                        <div class="sigle-product-services">
                            <div class="services-item">
                                <div class="icon"><i class="fa fa-plane"></i></div>
                                <h5 class="service-name">FREE SHIPPING WORLD WIDE</h5>
                            </div>
                            <div class="services-item">
                                <div class="icon"><i class="fa fa-whatsapp"></i></div>
                                <h5 class="service-name">24/24 ONLINE SUPPORT CUSTOME</h5>
                            </div>
                            <div class="services-item">
                                <div class="icon"><i class="fa fa-usd"></i></div>
                                <h5 class="service-name">30 Days money back</h5>
                            </div>
                        </div>
                      
                    </div>
                </div>
            </div>
        
           
        </div>
    </div>
    
@endsection
