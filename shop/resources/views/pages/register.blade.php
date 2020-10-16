@extends('layouts.template')
@section('mainPart')
    <section class="banner banner-contact bg-parallax">
        <div class="overlay"></div>
        <div class="container">
            <div class="banner-content text-center">
                <h2 class="page-title">Join our members</h2>
                <div class="breadcrumbs">
                    <a href="index.html">Home</a>

                </div>
            </div>
        </div>
    </section>
    <div class="maincontainer page-contact">
        <div class="container">
            <div class="row">
                <div class="col-sm-2">

                </div>
                <div class="col-sm-8">
                    <div class="section-contact-info">
                        <h1 align='center' >REGISTRATION</h1>
                        <div class="form-contact">
                            <div id="message-box-conact"></div>
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            

                            <form action="{{ url("/doRegister") }}" method="POST">
                            @csrf
                                <div class="row">


                                    <p>

                                        <input type="text" name="firstname" id="fname" placeholder="Enter firstname">
                                    </p>
                                    <p>
                                        <input type="text" name="lastname" id="lname" placeholder="Enter lastname">
                                   </p>
                                    <p>
                                        <input type="text"  name="username" id="uname" placeholder="Enter username">
                                   </p>
                                    <p>
                                        <input type="email"  name="email" id="mail" placeholder="Enter email address">
                                  </p>
                                    <p>
                                        <input type="password"  name="password" id="pass" placeholder="Enter password">
                                   </p>
                                    <p>
                                        <input type="password" name="confirmPassword" id="cpass" placeholder="Confirm password">
                                    </p>
                                        @if(session('message'))
                                          <h2> {{ session('message') }}</h2>
                                        @endif
                                    <div class="buttonC">
                                    <input type="submit"  id="sendId" name="sendRegistration" value="Singup" />
                                   </div>
                                </div>
                        </div>


                    </div>
                    </form>
                           
                </div>
                <div class="col-sm-2">

                </div>
            </div>
        </div>
        <div>

        </div>
    </div>
    @endsection
