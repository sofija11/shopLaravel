

<div class="main-header">
    <div class="container main-header-inner">
        <div id="form-search" class="form-search">
            <form>
                <input type="text" placeholder="YOU CAN SEARCH HERE..." />
                <button class="btn-search"><i class="fa fa-search"></i></button>
            </form>
        </div>
        <div class="row">
            <div  class="col-sm-12 col-md-12 col-lg-3">
                <div class="logo">
                    <a href="{{ url('/home')}}"><h1> <i class="fa fa-diamond" aria-hidden="true"></i>  Sofiiis </h1>
               </a>
                </div>
            </div>
            <div class="col-sm-10 col-md-10 col-lg-7 main-menu-wapper">
                <a href="#" class="mobile-navigation"><i class="fa fa-bars"></i></a>
                <nav id="main-menu" class="main-menu">
                    <ul class="navigation">
                    <!-- @isset($navigacije)
                    @foreach($navigacije as $link)
                            @component("components.nav", [
    "link" => $link
])
                                @endcomponent
                        @endforeach
                        @endisset
                        -->
                        <li class="">
                            <a href="{{ url("/home") }}">Home</a>

                        </li>
                        <li class="">
                            <a href="{{ url("/shop") }}">Shop</a>

                        </li>
                        <li class="">
                            <a href="{{ url("/about") }}">About us</a>

                        </li>
                        @if(session('admin'))
                        <li class="">
                            <a href="{{ url("/users") }}">Admin</a>

                        </li>
                       
                        @endif
                        @if(session('user'))
                        <li class="">
                            <a href="{{ url("/contact") }}">Contact</a>

                        </li>
                        <li class="">
                        <a href="{{route('cart')}}" <i class="fa fa-shopping-cart" aria-hidden="true" ></i> </a>
                        </li>
                        @endif
                     
                        
                        
                      
                       
                      <!--  <li class="menu-item-has-children item-mega-menu">
                            <a href="#">Category</a>
                            <div class="sub-menu mega-menu style2">
                                <div class="row">
                                    <div class="col-sm-1"></div>
                                    <div class="col-sm-6">
                                        <div class="widget">

                                            <ul>
                                                <li><a href="#">MEN'S</a></li>
                                                <li><a href="#">WOMAN</a></li>
                                                <li><a href="#">KID'S</a></li>
                                                <li><a href="#">BAG & SHOES</a></li>
                                                <li><a href="#">LOOKBOOK</a></li>
                                                <li><a href="#">ACCESORIES</a></li>
                                            </ul>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </li> -->



                    </ul>
                </nav>
            </div>
            <div class="col-sm-2 col-md-2">
                
            </div>
        </div>
    </div>
</div>
</header>
