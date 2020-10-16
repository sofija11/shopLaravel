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
                                    <h2 class="card-title"><span class="lstick"></span>Insert user</h2>
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
                                <form class="form-horizontal form-material" action="{{ route('users.store') }}" method="POST">
                                        @csrf
                                    <div class="form-group">
                                        
                                        <div class="col-md-12">
                                            <input type="text" name="firstnameAdmin" placeholder="Enter firstname" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                     
                                        <div class="col-md-12">
                                            <input type="text" name="lastnameAdmin" placeholder="Enter lastname" class="form-control form-control-line" name="example-email" id="example-email">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        
                                        <div class="col-sm-12">
                                            <select name="roleAdmin" class="form-control form-control-line">
                                            <option value="0" disabled="disabled">Select Role</option>
                                                @foreach($categories as $cat)
                                                    <option value="{{ $cat->idRole }}"> {{ $cat->role }} </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                     
                                        <div class="col-md-12">
                                            <input type="text" name="usernameAdmin" placeholder="Enter username" class="form-control form-control-line" name="example-email" id="example-email">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        
                                        <div class="col-md-12">
                                            <input type="email" name="emailAdmin" placeholder="Enter email" class="form-control form-control-line" name="example-email" id="example-email">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                      
                                        <div class="col-md-12">
                                            <input type="text" name="passwordAdmin" placeholder="Enter password" class="form-control form-control-line">
                                        </div>
                                    </div>
                                  
                                    <div class="form-group">
                                      
                                        <div class="col-md-12">
                                        <input type="submit" class="btn btn-primary" id="sendIdAdmin" name="sendUserAdmin"  value="ADD" />
                                            
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