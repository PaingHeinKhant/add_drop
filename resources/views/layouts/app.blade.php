<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app" class="min-vh-100">

    <main >
        @auth
            @include('layouts.nav')
{{--            <h6 class="small text-center py-2 bg-danger bg-opacity-75  text-light">Music is the language of the spirit. It opens the secret of life bringing peace, abolishing strife</h6>--}}
            <div class="container-fluid  ">
                <div class="row d-flex justify-content-between">
                    <div class=" col-3 col-md-3 col-lg-2  sidebar p-0">
                        @include('layouts.sidebar')
                    </div>
                    <div class="p-0 col-9 col-md-9 col-lg-10">
                        <div class="m-5 p-0 ">
                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>
        @endauth

        @guest
                @include('layouts.nav')
            @yield('content')
        @endguest
    </main>
    </div>
</body>

<script src="../../js/app.js"></script>


</html>
