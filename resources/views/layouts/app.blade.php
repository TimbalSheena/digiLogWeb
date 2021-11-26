@include('includes.head')

<body>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#191851">
    <a href="{{ route('home') }}" class="navbar-brand ">USTP Digital Logbook</a>
        <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                @auth
                    @php
                        $id = (string)auth()->user()->id;
                        $check = substr($id, -5);
                        $int_check = (int)$check;
                        print($int_check);
                    @endphp
                @if ($int_check < 5000) //->user_type == "administrator"
                    <a href="{{ route('register') }}"class="nav-item nav-link" >Register User</a>
                @endif
                </li>
                <li class="nav-item">
                    <a href="" class="nav-item nav-link" >{{ Auth::user()->adminName }}</a>
                </li>
            </ul>
            
            <form action="{{ route('logout') }}" method="post" class="nav-item nav-link" >
                @csrf
                <button type="submit" class="btn" style="background-color:#191851">Logout</button>
            </form>
                @endauth

                @guest
                    <a href="{{ route('login') }}" class="p-3 text-white">Login</a>
                    <a href="{{ route('register') }}" class="p-3 text-white">Register</a>
                @endguest  
                </div>
            </div>
        </nav>
        @yield('content')
    </body>
</html>