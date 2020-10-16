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
                                        <h2 class="card-title"><span class="lstick"></span>Users</h2>
                                        @if(session('message'))
                                          <h2> {{ session('message') }}</h2>
                                        @endif
                                    </div>
                                </div>
                                <div class="table-responsive m-t-20">
                                    <table class="table vm no-th-brd no-wrap pro-of-month">
                                        <thead>
                                            <tr>
                                                <th>Firstname</th>
                                                <th>Lastname</th>
                                                <th>Username</th>
                                                <th>Role</th>
                                                
                                                <th colspan="2"></th>
                                                
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($users as $user )
                                                
                                            <tr>
                                                <td>{{ $user->firstname}} </td>
                                                <td>{{ $user->lastname}}</td>
                                                <td>{{ $user->username}}</td>
                                                <td>{{ $user->role}}</td>
                                                <form action ="{{ route('users.destroy',[$user->idUser])}}" method='POST'>
                                                    @method('DELETE')
                                                    @csrf
                                                    <td>
                                                        <button type="submit" class="btn btn-primary">DELETE</button>
                                                    </td>
                                                </form>
                                                <form action ="{{ route('users.edit',[ $user->idUser ])}}" method="GET">
                                                    <td>
                                                        <input type="submit" value="UPDATE" class="btn btn-primary"></button>
                                                    </td>
                                                </form>
                                            </tr>
                                        @endforeach
                                            
                                           
                                           
                                            
                                        </tbody>
                                    </table>
                                  <a href= "{{ url("users/create") }}">  <input type="button" value="INSERT NEW USER"  class="btn btn-primary"></button> </a>
                                </div>
                            </div>
                        </div> 
                    </div>
                <!-- ============================================================== -->
                <!-- End Page Content -->
                <!-- ============================================================== -->
            </div>
@endsection