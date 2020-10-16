<body class="home">
<header class="header header-style2">
    <div class="top-header">
        <div class="container">
            <div class="top-header-menu">
                <a href="#"><i class="fa fa-phone"></i> 0629068520</a>
                <a href="#"><i class="fa fa-envelope-o"></i> vitorovicsofija610@gmail.com</a>
                
               
            </div>
            <div class="top-header-right">
                <ul>
                        @if(!session('user'))
                    <li><a href="{{ url("/login") }}"><i class="fa fa-key"></i> LOGIN</a></li>
                    <li><a href="{{ url("/register") }}"><i class="fa fa-user"></i> REGISTER</a></li>
                        @endif
                        @if(session('user'))
                            <li><a href="{{ url("/logoutU") }}"><i class="fa fa-user"></i> LOGOUT {{ session()->get('user')->firstname }} </a></li>
                        @endif
                </ul>
            </div>
        </div>
    </div>
