<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

    <meta charset="utf-8">
    <title>Layout</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>

  </head>
  <body>

       @include('components.header')

       <div class="container">
          @yield('content')
       </div>

       @include('components.footer')

  </body>
</html>
