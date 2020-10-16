@extends("layouts.template")
@section("mainPart")
    <section class="banner banner-contact bg-parallax">
        <div class="overlay"></div>

    </section>
    <div class="maincontainer page-contact">
        <div class="container">
            <div class="row">
                <div class="col-sm-2">

                </div>
                <div class="col-sm-8">
                    <div class="section-contact-info">
                        <h1 align ='center' >LOG IN</h1>
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
                            <form action="{{ url("/doLogin") }}" method="POST" >
                                @csrf
                                <div class="row">



                                    <p>

                                        <input type="text"  name="usernameL" id="userL" placeholder="Your username">
                                    <p id='uG'></p>
                                    </p>

                                    <p>
                                        <input type="password"  name="passwordL" id="passL" placeholder="Enter password">
                                    <p id='pG'></p>
                                    </p>

                                    <div class="buttonC">
                                        <input type="submit" id="sendLogin"  name="sendL"  class="btn btn-primary" value="login">
                                    </div>
                                </div>
                        </div>


                    </div>
                    </form>
                            @if(session('message'))
                                <h2> {{ session('message') }}</h2>
                            @endif
                </div>
                <div class="col-sm-2">

                </div>
            </div>
        </div>
        <div>

        </div>
    </div>
    @endsection
