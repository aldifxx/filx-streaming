<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    @stack('prepend-style')
    @include('includes.style-main')
    @stack('addon-style')
</head>
<body>
    <!-- Navbar -->
    <section class="background" style="overflow: hidden;">
        @include('includes.navbar-home')
    <!-- End Navbar-->
    <!-- Header-->
    @yield('header')
    <!-- Feature Flix-->
    @yield('feature')
    <!-- End Feature Flix-->
    <!-- Footer -->
    @yield('footer')
    <!-- End Footer-->

</section>
</body>
</html>