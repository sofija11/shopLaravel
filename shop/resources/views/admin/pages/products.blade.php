@extends('layouts.admin')
@section('mainPartAdmin')

<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Sales overview chart -->
                <!-- ============================================================== -->
            
                <!-- ============================================================== -->
                <!-- Projects of the month -->
                <!-- ============================================================== -->
               
                <!-- ============================================================== -->
                <!-- Blog and website visit -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div>
                                        <h2 class="card-title"><span class="lstick"></span>Products</h2>
                                        @if(session('message'))
                                          <h2> {{ session('message') }}</h2>
                                        @endif
                                    </div>
                                </div>
                                <div class="table-responsive m-t-20">
                                    <table class="table vm no-th-brd no-wrap pro-of-month">
                                        <thead>
                                            <tr>
                                                <th>Product</th>
                                                <th>Image</th>
                                                <th>Price</th>
                                              
                                                
                                                <th colspan="2"></th>
                                                
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach( $products as $one )
                                                
                                            <tr>
                                                <td>{{ $one->name}} </td>
                                                <td><img src="images/productsShop/{{ $one->image}}"/></td>
                                                <td>{{ $one->price}} </td>
                                              
                                                <form action ="{{ route('products.destroy',[$one->idProduct])}}" method='POST'>
                                                    @method('DELETE')
                                                    @csrf
                                                    <td>
                                                        <button type="submit" class="btn btn-primary">DELETE</button>
                                                    </td>
                                                </form>
                                                <form action ="{{ route('products.edit',[ $one->idProduct ])}}" method="GET">
                                                    <td>
                                                        <input type="submit" value="UPDATE" class="btn btn-primary"></button>
                                                    </td>
                                                </form>
                                            </tr>
                                        @endforeach
                                            
                                           
                                           
                                            
                                        </tbody>
                                    </table>
                                   <p align='center'> {{ $products->links() }} </p> 
                                  <a href= "{{ url("products/create") }}">  <input type="button" value="INSERT NEW PRODUCT"  class="btn btn-primary"></button> </a>
                                </div>
                            </div>
                        </div> 
                    </div>
                <!-- ============================================================== -->
                <!-- End Page Content -->
                <!-- ============================================================== -->
            </div>
@endsection
product