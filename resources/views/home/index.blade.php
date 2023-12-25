<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Sologroup</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  @include('home.css')


</head>

<body>

  <!-- ======= Header ======= -->
  @include('home.header')
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  @include('home.hero')
  <!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    @include('home.about')
    <!-- End About Section -->

    <!-- ======= Services Section ======= -->
    
    @include('home.service')

    <!-- End Services Section -->

    <!-- ======= Portfolio Section ======= -->
    @include('home.portifolio')
    <!-- End Portfolio Section -->

    <!-- ======= Testimonials Section ======= -->

    @include('home.remark')

    <!-- End Testimonials Section -->

    <!-- ======= F.A.Q Section ======= -->
    {{-- @include('home.question') --}}
    <!-- End F.A.Q Section -->

    <!-- ======= Team Section ======= -->

    @include('home.team')

    <!-- End Team Section -->

    <!-- ======= Contact Section ======= -->

    @include('home.contact')

    <!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('home.footer')
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  @include('home.js')

</body>

</html>