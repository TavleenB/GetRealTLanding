<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hello Bulma!</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.0/css/bulma.min.css">

    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

  </head>
  <body>
  <section class="section">
    <div class="container" id="app">
        @yield('content')
    </div>
  </section>

  <script src="{{ mix('js/app.js') }}"></script>

  </body>
</html>