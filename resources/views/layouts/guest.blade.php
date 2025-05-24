<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>@yield('title') - {{ config('app.name') }}</title>
  <meta name="description" content="Website SD NEGERI 1 KLAPASAWIT">
  <meta name="keywords" content="sd negeri 2 klapasawit">

  <link href="{{ asset('guest/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('guest/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <link href="{{ asset('guest/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('guest/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('guest/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('guest/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('guest/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <link href="{{ asset('guest/css/main.css') }}" rel="stylesheet">
</head>

<body class="index-page">

  @include('layouts.guest-navbar')

  <main class="main">
    @yield('content')
  </main>

  @include('layouts.guest-footer')

  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <script src="{{ asset('guest/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('guest/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('guest/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('guest/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('guest/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('guest/vendor/swiper/swiper-bundle.min.js') }}"></script>

  <script src="{{ asset('guest/js/main.js') }}"></script>

</body>

</html>
