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
        <v-app class="content-wrap flex-center position-ref full-height" id="app" dark>
            <main class="content">
                <h1 class="title">OOP Donuts</h1>

                <div class="links">
                  <v-tabs></v-tabs>
                  <example-component></example-component>
                  {{ $donutBox->getDonutCount() }}<br/>
                  <span>$ {{ $donutBox->calcDonutCost() }}</span>
                </div>
              </main>

            <img class="bg-image" src="http://local.oopla.com/media/images/compressed/bg-donut-box.jpg" alt="" />
            </v-app>

        <script src="{{ asset('js/app.js') }}"></script>

    </body>
</html>
