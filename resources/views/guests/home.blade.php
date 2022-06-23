<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Boolpress-Home</title>

    <!-- Scripts js di front-->
    <script src="{{ asset('js/front.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles css di app-->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>

    <section class="guestHome">
        <nav class="navbar shadow navbar-expand-lg bg-light bg_grey">
            <div class="container">
                <a class="navbar-brand" href="/">Boolstrap</a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{route('admin.home')}}">Homepage</a>
                        </li>
                        <!-- /homepage -->
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                        <!-- /about -->
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contacts</a>
                        </li>
                        <!-- /contacts -->
                        <li class="nav-item">
                            <a class="nav-link" href="#">Shop</a>
                        </li>
                        <!-- /shop -->
                    </ul>
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                {{ Auth::user()->name }}
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="{{ route('admin.home') }}">Admin</a></li>
                                <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a></li>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </ul>
                        </li>
                        @endguest
                    </ul>
                    <!-- /Authentication Links -->
                </div>
            </div>
        </nav>
    </section>
    <!-- /.guestHome -->

    <div id="root"></div>
    <!-- /#root JS-->
</body>

</html>