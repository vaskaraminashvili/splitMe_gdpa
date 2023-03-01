<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
          <!-- Favicon -->
    <link rel="icon" href="assets/images/favicon/favicon.png">
    <!-- bootstrap -->
    <link rel="stylesheet" href="{{asset('web_assets/css/bootstrap.min.css')}}">
    <!-- fontawesome -->
    <link rel="stylesheet" href="{{asset('web_assets/css/fontawesome-all.min.css')}}">
    <!-- line-awesome -->
    <link rel="stylesheet" href="{{asset('web_assets/css/line-awesome.min.css')}}">
    <!-- slick -->
    <link rel="stylesheet" href="{{asset('web_assets/css/slick.css')}}">
     <!-- magnific popup css -->
    <link rel="stylesheet" href="{{asset('web_assets/css/magnific-popup.css')}}">
    <!--Odometer css -->
   <link rel="stylesheet" href="{{asset('web_assets/css/odometer.css')}}">
    <!-- main css -->
    <link rel="stylesheet" href="{{asset('web_assets/css/style.css')}}">
     @vite(['resources/web/scss/app.scss', 'resources/web/scripts/app.js'])
    @inertiaHead
  </head>
  <body>
    @inertia
  </body>
</html>
