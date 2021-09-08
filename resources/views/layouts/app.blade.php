<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Coding Challenge" />
  <link rel="shortcut icon" href="./images/logo-ico.ico" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@500&display=swap" rel="stylesheet" />
  <link href="{{ mix('css/app.css') }}" rel="stylesheet">
  <title>Coding challenge</title>
</head>
<body>

  @include('layouts.partials.header')

  @yield('main')


  @include('layouts.partials.scripts')

</body>
</html>
