<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    <link rel="icon" type="image/png" href="images/favicon.png"><!-- fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i"><!-- css -->
    <link rel="stylesheet" href="{{asset('./assets/vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('./assets/vendor/owl-carousel/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('./assets/vendor/photoswipe/photoswipe.css')}}">
    <link rel="stylesheet" href="{{asset('./assets/vendor/photoswipe/default-skin/default-skin.css')}}">
    <link rel="stylesheet" href="{{asset('./assets/vendor/select2/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('./assets/css/style.css')}}"><!-- font - fontawesome -->
    <link rel="stylesheet" href="{{asset('./assets/vendor/fontawesome/css/all.min.css')}}"><!-- font - stroyka -->
    <link rel="stylesheet" href="{{asset('./assets/fonts/stroyka/stroyka.css')}}">
</head>

<body>

{{ $slot }}

<script src="{{asset('./assets/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('./assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('./assets/vendor/owl-carousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('./assets/vendor/nouislider/nouislider.min.js')}}"></script>
<script src="{{asset('./assets/vendor/photoswipe/photoswipe.min.js')}}"></script>
<script src="{{asset('./assets/vendor/photoswipe/photoswipe-ui-default.min.js')}}"></script>
<script src="{{asset('./assets/vendor/select2/js/select2.min.js')}}"></script>
<script src="{{asset('./assets/js/number.js')}}"></script>
<script src="{{asset('./assets/js/main.js')}}"></script>
<script src="{{asset('./assets/js/header.js')}}"></script>
</body>

</html>
