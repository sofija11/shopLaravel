@extends('layouts.template')
@section('mainPart')
   
    <div class="maincontainer">
        <div class="container">
            <!-- Step Checkout-->
            
            <!-- ./Step Checkout-->
            <!-- Table cart -->
        <form class="form-horizontal" method="POST" action="{{route('posaljiiOrder')}}">
                @csrf
            <table class="shop_table cart">
                <thead>
                <tr>
                    <th class="product-thumbnail">Product</th>
                    <th class="product-name">name</th>
                    <th class="product-quantity">Quantity</th>
                    <th class="product-price">Price</th>
                    <th class="product-subtotal"></th>
                    <th class="product-remove">&nbsp;</th>
                    @if(session()->has('user'))
                    <input type="hidden" id="user" value=" {{ session()->get('user')->idUser }}"/>
                    @endif
                </tr>
                </thead>
                <tbody id="cartBody">
               
               
                </tbody>
            </table>
            <table>
                <tr>
                    <td colspan="6" class="actions">
                       <a href="{{ route('shop') }}"> <button class="button pull-left">CONTINUE SHOPPING</button></a>
                      
                        <button onclick="clearAllFromCart()" class="button">CLEAR SHOPPING CART</button>
                    </td>
                </tr>
                @if(session('message'))
                <h2> {{ session('message') }}</h2>
              @endif
            </table>
            <div class="cart-collaterals">
                <div class="row">
                    <div class="col-sm-12 col-md-8">
                        <div class="cart_totals ">
                            <h2>Cart Totals</h2>
                            <table>
                                <tbody >
                                    <tr class="cart-subtotal">
                                        <th>Buyer</th>
                                        @if(session()->has('user'))
                                        <td><span > {{ session()->get('user')->firstname }}  {{ session()->get('user')->lastname }}</span></td>
                                        @endif
                                    </tr>
                                <tr class="cart-subtotal">
                                    <th>Delivery</th>
                                    <td><span class="amount">50.00</span></td>
                                </tr>
                                <tr class="order-total">
                                    <th>Total</th>
                                    <td  id="total">
                                        <strong><span class="amount">£15.00</span></strong>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <div class="wc-proceed-to-checkout">
                                <input type="submit" value='PROCEED TO CHECKOUT' />
                            </div>
                        </div>
                    </div>
                </form>
                    <div class="col-sm-12 col-md-4">
                       
                    </div>
                </div>
            </div>
            
        </div>
    </div>
@endsection
