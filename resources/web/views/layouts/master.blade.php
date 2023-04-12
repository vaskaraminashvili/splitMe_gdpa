<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel</title>



  {{-- @vite(['resources/web/scss/app.scss', 'resources/web/scripts/app.js']) --}}
  <link rel="stylesheet" href="{{ asset('build/assets/app-4c41e8b9.css') }}">
</head>

<body class="antialiased">
  {{ $slot }}
</body>

</html>
