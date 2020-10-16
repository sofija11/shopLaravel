@extends("layouts.template")
@section("mainPart")
    <section class="banner banner-contact bg-parallax">
        <div class="overlay"></div>
        <div class="container">
            <div class="banner-content text-center">
                <h2 class="page-title">CONTACT US</h2>
                <div class="breadcrumbs">
                    <a href="#">Home</a>
                    <span>CONTACT US</span>
                </div>
            </div>
        </div>
    </section>
    <div class="maincontainer page-contact">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="section-contact-info">
                        <h3 class="block-title">CONTACT INFOMATION</h3>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia.</p>
                        <div class="block-info-contact">
                            <div class="social-network">
                                <span>CONNECT WITH US</span>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                            <div class="infomation">
                                <span>
                                    <span class="icon"><i class="fa fa-anchor"></i></span>
                                    1234 Heaven Stress, Beverly United State
                                </span>
                                <span>
                                    <span class="icon"><i class="fa fa-phone"></i></span>
                                    PHONE: (95) 943 994 870
                                </span>
                                <span>
                                    <span class="icon"><i class="fa fa-life-ring"></i></span>
                                    SUPPORT@LEKASTUDIO.COM
                                </span>
                                <span>
                                    <span class="icon"><i class="fa fa-clock-o"></i></span>
                                    OPEN TIME: 9AM - 6PM</span>
                            </div>
                        </div>
                    </div>
                </div>
                <form action="{{ url("/insertMessage") }}" method="POST" >
                @csrf
                <div class="col-sm-6">
                    <div class="section-contact-info">
                        <h3 class="block-title">LEAVE MESSAGE</h3>
                        <div class="form-contact">
                            <div id="message-box-conact"></div>
                          
                            <p>
                                <label>Caption</label>
                                <input id="captionId" name="caption" type="text" />
                            </p>

                            <p>
                                <label>Your message</label>
                                <textarea id="content" name="message" rows="5"></textarea>
                            </p>
                            @if(session('message'))
                                <h2> {{ session('message') }}</h2>
                            @endif
                            <input type="submit" id="contactId"  name="sendMessage"  class="btn btn-primary" value="SEND">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            @if(session()->has("success"))
                                    <h1>{{ session("success") }}</h1>
                            @endif
                           
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
        <div>

        </div>
    </div>

@endsection
