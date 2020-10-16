 <li  class="product col-sm-6 col-md-4">
                            <div class="product-thumb">
                                <a href="">
                                    <img src="images/productsShop/{{ $product->image }}" alt="">
                                </a>
                              
                            </div>
                            <div class="product-info">
                                <h3><a  href="#" >{{ $product->name }}</a></h3>
                                <span class="product-price">{{ $product->price }}  $ </span>
                                @if(session()->has('user'))
                                <a href=""  data-idprod="{{ $product->idProduct  }}"  class="add-to-cart">ADD TO CART</a>
                               <!-- <input type='submit' id='moj'  value="RESERVE" name='show' ></a> -->
                               @endif
                            </div>
</li>

