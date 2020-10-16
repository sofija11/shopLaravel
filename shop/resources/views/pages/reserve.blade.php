
@extends('layouts.admin')
@section('mainPartAdmin')
<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
<div class="row">
<div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex">
                                    <h2 class="card-title"><span class="lstick"></span>Update product</h2>
                                </div>
                                <div class="message-box contact-box">
                                @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                                <form class="form-horizontal form-material" action="" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        
                                @method('PUT')
                                    <div class="form-group">
                                        
                                        <div class="col-md-12">
                                            <input type="text" name="productAdminUpdate" value='{{$product->name}}'placeholder="Enter product name" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                     
                                        <div class="col-md-12">
                                            <input type="file" name="imageAdminUpdate"  value="Choose new image" class="form-control form-control-line" name="example-email">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                     
                                        <div class="col-md-12">
                                            <input type="text" name="priceAdminUpdate" value='{{$product->price}}' placeholder="Enter price" class="form-control form-control-line" name="example-email" >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        
                                        <div class="col-sm-12">
                                            <select name="categoryAdminUpdate" class="form-control form-control-line">
                                            <option value="0" disabled="disabled">{{$product->catname}} - currently</option>
                                                @foreach($categories as $cat)
                                                    <option value="{{ $cat->idCategory }}"> {{ $cat->name }} </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        
                                        <div class="col-sm-12">
                                            <select name="colorAdminUpdate" class="form-control form-control-line">
                                            <option value="0" disabled="disabled">{{$product->color}} - currently</option>
                                                @foreach($colors as $color)
                                                    <option value="{{ $color->idColor }}"> {{ $color->color }} </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                  
                                   
                                    
                                    <div class="form-group">
                                      
                                        <div class="col-md-12">
                                        <input type="submit" class="btn btn-primary" id="sendProductAdmin" name="sendProductUpdate"  value="UPDATE" />
                                            
                                            @if(session('message'))
                                                <h2> {{ session('message') }}</h2>
                                            @endif
                                        </div>
                                    </div>
                                </form>
                                </div>
                            </div>
                        </div>
</div>
</div>
</div>


            
                

@endsection