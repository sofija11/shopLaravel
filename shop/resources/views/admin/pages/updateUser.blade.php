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
                                    <h2 class="card-title"><span class="lstick"></span>Update user</h2>
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
                                <form class="form-horizontal form-material"  action="{{ route('users.update', [$user->idUser]) }}" method="POST">
                                @csrf
                                @method('PUT')
                                    <div class="form-group">
                                        
                                        <div class="col-md-12">
                                            <input type="text" name="firstnameAdminUpdate"  value="{{ $user->firstname }}" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                     
                                        <div class="col-md-12">
                                            <input type="text" name="lastnameAdminUpdate"  value="{{ $user->lastname }}" class="form-control form-control-line" name="example-email" id="example-email">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        
                                        <div class="col-sm-12">
                                            <select name="roleAdminUpdate" class="form-control form-control-line">
                                               <option value="0" disabled="disabled" >{{$user->role}} - currently</option>
                                               <option value="1"  >Admin</option>
                                               <option value="2"  >User</option>

                                             
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                     
                                        <div class="col-md-12">
                                            <input type="text" name="usernameAdminUpdate" value="{{ $user->username }}" class="form-control form-control-line" name="example-email" id="example-email">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        
                                        <div class="col-md-12">
                                            <input type="email" name="emailAdminUpdate" value="{{ $user->email }}" class="form-control form-control-line" name="example-email" id="example-email">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                   
                                   
                                                  
                                                    
                                        <div class="col-md-12">
                                            <input type="text" name="passwordAdminUpdate"  class="form-control form-control-line">
                                        </div>
                                   
                                    </div>
                                    <div class="form-group">
                                      
                                        <div class="col-md-12">
                                            <input type="submit" value="UPDATE" name="sendUserAdminUpdate" class="btn btn-primary"></button>
                                        </div>
                                    </div>
                                    @if(session('message'))
                                                <h2> {{ session('message') }}</h2>
                                    @endif
                                </form>
                                </div>
                            </div>
                        </div>
</div>
</div>
</div>


            
                
@endsection