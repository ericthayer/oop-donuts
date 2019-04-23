<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <meta name="csrf-token" content="<?php echo csrf_token(); ?>">
      <title>OOP Donuts :: </title>


      <!-- Styles -->
      <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        <div class="content-wrap flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <main class="content">
                <h1 class="title">OOP Donuts</h1>

                <div class="links">
                  <a href="https://laravel.com/docs">Docs</a>
                  <a href="https://laracasts.com">Laracasts</a>
                  <a href="https://laravel-news.com">News</a>
                  <a href="https://blog.laravel.com">Blog</a>
                  <a href="https://nova.laravel.com">Nova</a>
                  <a href="https://forge.laravel.com">Forge</a>
                  <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
              </main>

            <div class="image-wrap"></div>
        </div>

        {{-- <script src="{{ asset('js/app.js') }}"></script> --}}

    </body>
</html>
