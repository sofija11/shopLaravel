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
                                    <h2 class="card-title"><span class="lstick"></span>Messages</h2>
                                </div>
                                <div class="message-box contact-box">
                                    <div class="message-widget contact-widget">
                                        <!-- Message -->
                                        
                                        <table class="table vm no-th-brd no-wrap pro-of-month">
                                            <thead>
                                                <tr>
                                                    <th>Full name</th>
                                                    <th>Email</th>
                                                    <th>Message</th>
                                                </tr>
                                            </thead>
                                                <tbody>
                                                @foreach($messages as $one)
                                                    <tr>
                                                        <td>{{ $one-> firstname }} {{ $one-> lastname }}</td>
                                                        <td>{{  $one-> email }}</td>
                                                        <td>{{ $one->  message }}</td>
                                                      
                                                     
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                        </table> 
                                    </div>
                                </div>
                            </div>
                        </div>
</div>
</div>
</div>


@endsection