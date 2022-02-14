<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet"
          href=
          "https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity=
          "sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z"
          crossorigin="anonymous" />
</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                  LOGO
            </a>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <nav class="navbar navbar-expand-lg ">
                        <div class="container-fluid">

                            <div >
                                <ul class="navbar-nav">
                                    <li >
                                        <a class="nav-link active" aria-current="page" href="/">HOME"</a>
                                    </li>
                                    <li >
                                        <a class="nav-link" href="/services">Services</a>
                                    </li>
                                    <li >
                                        <a class="nav-link" href="/aboutUs">About</a>
                                    </li>
                                    <li >
                                        <a class="nav-link" href="/contact">Contact</a>
                                    </li>
                                    <li >
                                        <a class="nav-link" href="/faq">FAQ</a>
                                    </li>
                                    <li  >
                                        <a class="nav-link" href="/signUp">SIGN UP</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </ul>
            </div>
        </div>
    </nav>

    <main class="py-4">
        @yield('content')
    </main>
</div>
</body>
</html>
