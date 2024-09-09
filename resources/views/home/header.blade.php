<header class="header_section">
    <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container pt-3">
            <a class="navbar-brand" href="#">
                <span>
                    TripBiz
                </span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="d-flex ml-auto flex-column flex-lg-row align-items-center navbar-effect">
                    <ul class="navbar-nav  ">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home
                                <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#bookTrip">
                                Book Trip
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#package">
                                Packages
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#service">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#blog">Blog</a>
                        </li>
                    </ul>
                    {{-- <form class="form-inline my-2 my-lg-0 ml-0 ml-lg-4 mb-3 mb-lg-0">
                        <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
                    </form> --}}
                    <ul class="navbar-nav  ">
                        @if (Route::has('login'))
                            @auth
                            <li class="nav-item">
                                <x-app-layout>

                                </x-app-layout>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('my_post') }}">My Post</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('create_post')}}">Create Post</a>
                            </li>

                            @else
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">Register</a>
                                </li>

                            @endauth
                        @endif
                    </ul>

                </div>

            </div>
        </nav>
    </div>
</header>
