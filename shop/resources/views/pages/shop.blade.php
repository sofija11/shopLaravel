@extends("layouts.template")
@section("mainPart")
   
    <div class="maincontainer left-sidebar">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-md-9 main-content">
                    <!-- Sortbar -->
                    <div class="sortBar">
                    <!-- <form id="search" action="/search" method="POST" role="search">
                        @csrf -->
                        <form method="GET" action="{{  route('shop_page') }}">
                     <!-- @csrf -->
                        <div class="col-lg-6 main-content">
                        <input class='btn-btn-primary' name='bttn' type="submit" />
                       </div>  
                      
                       <div class="col-lg-6 main-content">
                       <input  class='col-lg-3' name='search' placeholder="Search here" type="text"/> 
                       </div>          
                     </div>
                    <!-- ./ SortBar -->
                    <!-- List products -->
                 
                    <ul id= "proizvodi" class="products row">
                      @foreach($products as $product)
                        @component("components.product",[
                            "product"=> $product
                        ])
                        @endcomponent
                      @endforeach
                       
                    </ul>
                    
                    <div class="pagination">
                  
                    
                 
                        {{ $products->appends($_GET)->links() }}
   
  
</div>



                    
                    <!-- ./ List Products -->
                </div>
                <!-- Sliderbar -->
               
                <div class="col-sm-4 col-md-3 sidebar">
                    <!-- Product category -->
                    <div class="widget widget_product_categories">
                       <br/>

                        <select class="form-control ddlCategory" name="categoryLista">
                        <option value="0" >Select category </option>
                        @foreach($categories as $category)

                            <option value="{{ $category->idCategory }}">{{ $category->name }}</option>
                        @endforeach
                       
                        {{-- <ul class="product-categories" name='cattt'>
                            <li name='cat' class="cat-parent current-cat-parent">
                                
                                <ul class="children" name='cat' id="caat">
                                @foreach($categories as $category)
                                    @component("components.category",[
                                        "cat"=> $category
                                    ])
                                    @endcomponent
                                @endforeach
                       
                                </ul>
                            </li>
                        </ul> --}}

                    
                    </select>
                    </div>
                </form>
                    <!-- ./Product category -->

                    <!-- Filter color -->
                    <!-- <div class="widget widget_layered_nav" >
                        <h2 class="widget-title">BY COLORS</h2>
                        <ul class="product-categories">
                            <li class="cat-parent current-cat-parent">
                                    
                                <ul class="children" id="cool">
                                    {{-- @foreach($colors as $color)
                                        @component("components.color",[
                                            "color"=> $color
                                        ])
                                        @endcomponent
                                    @endforeach --}}
                                   
                                </ul>
                            </li>
                        </ul>
                    </div> -->
                    {{-- <!-- ./Filter color -->
                       <!-- Filter price -->
                       <div class="widget widget_price_filter">
                        <h2 class="widget-title">BY PRICES</h2>
                        <div class="price_slider_wrapper">
                            <div class="amount-range-price">  <span id="price" > 50 $ </span> - 1000 $</div>
                            <input type="range"  min="1" max="1000" id='ran'>
                            
                            <button type="submit" name='bttn' class="button" id="filter">Find </button>
                            <!-- <button class="button">Filter</button> -->
                        </div>
                    </div> --}}
                    <!-- ./Filter price -->
                  </div>
                  
                <!-- ./Sidebar -->
            </div>


        </div>
    </div>
    @endsection
