<!-- navbar-->
<header class="header bg-white">
    <div class="container px-0 px-lg-3">
        <nav class="navbar navbar-expand-lg navbar-light py-3 px-lg-0">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item haver_back">
                        <!-- Link--><a class="nav-link active" href="{{ Route('home') }}">Home</a>
                    </li>



                    @if (Route::currentRouteName() == 'login' || Route::currentRouteName() == 'register')
                    @else
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" id="pagesDropdown"
                                href="#" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">Categories</a>
                            <div class="dropdown-menu mt-3" aria-labelledby="pagesDropdown">
                                @foreach ($categories as $cat)
                                    <a class="dropdown-item border-0 transition-link"
                                        href="{{ Route('category', $cat->id) }}">{{ $cat->name }}</a>
                                @endforeach
                            </div>
                        </li>
                    @endif

                    @auth
                        <li class="nav-item haver_back">
                            <!-- Link--><a class="nav-link " href="{{ Route('cart.all') }}">Cart</a>
                        </li>
                    @endauth


                </ul>




            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>



            <ul class="navbar-nav ml-auto">

                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" id="pagesDropdown" href="#"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}</a>
                        <div class="dropdown-menu mt-3" aria-labelledby="pagesDropdown">
                            @if (Auth::user()->role == '1')
                                <a class="dropdown-item" href="{{Route('dashboard')}}">
                                    Admin Panel
                                </a>
                            @endif

                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>



                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        @endguest

                    </div>
                </li>
            </ul>

            <a class="navbar-brand" href="{{ route('home') }}"><span
                    class="font-weight-bold text-uppercase text-dark">Boutique</span>
            </a>
        </nav>
    </div>
</header>
