@include('includes.head')
  
</body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a href="{{ route('admin') }}" class="p-3 text-white">Welcome {{ Auth::user()->name }}</a>
        <div class="navbar-nav ml-auto">
        @auth
            <form action="{{ route('logout') }}" method="post" class="nav-item nav-link" >
            @csrf
                <button type="submit" class="btn btn-light">Logout</button>
            </form>
        @endauth
        </div>
    </nav>
</body>
