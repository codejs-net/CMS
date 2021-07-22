<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Code-JS</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <!-- Bootstrap -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  <link href="{{ asset('assets/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/venobox/venobox.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/theme/orange.css') }}" rel="stylesheet">


</head>

<body>
<!-- ======= Top Bar ====== -->
@include('web.partials.topbar') 
<!-- ======= Header ======= -->
@include('web.partials.header')
<!-- ==== Hero Section ==== -->
{{-- @include('web.partials.hero') --}}

<!-- ==== slider Section ==== -->
@include('web.partials.slider')

<main id="main">

    <!--== Description Section == -->
    @include('web.partials.description')

     <!-- ====== Team Section ========== -->
    @include('web.partials.team')

    <!-- ======= About Section ======= -->
    @include('web.partials.about')

    <!-- ======= Values Section ======= -->
    @include('web.partials.value')
    
    <!-- ======= Counts Section ======= -->
    @include('web.partials.count')
   
    <!-- ====== Clients Section ======= -->
    {{-- @include('web.partials.client') --}}

    <!-- ===== Services Section ======= -->
    @include('web.partials.service')

    <!-- ===== Downloads Section ======= -->
    @include('web.partials.download')
    
    <!-- === Testimonials Section ===== -->
    @include('web.partials.testimonial')
   
    <!-- ==== Recent Work Section ===== -->
    @include('web.partials.recent')

    <!-- ====== Contact Section ======= -->
    @include('web.partials.contact')

</main>

<!-- ======= Footer ======= -->
@include('web.partials.footer')

<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
  <!-- jQuery -->
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
 <!-- Bootstrap 4 -->
<script src="{{ asset('js/app.js') }}" defer></script>

<script src="{{ asset('assets/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
<script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
<script src="{{ asset('assets/vendor/jquery-sticky/jquery.sticky.js') }}"></script>
<script src="{{ asset('assets/vendor/waypoints/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('assets/vendor/counterup/counterup.min.js') }}"></script>
<script src="{{ asset('assets/vendor/venobox/venobox.min.js') }}"></script>
<script src="{{ asset('assets/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
<!-- Template Main JS File -->
<script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>