<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    @stack('prepend-style')
    @include('includes.style-watch')
    @stack('addon-style')
</head>
<body>
    <section class="background" style="overflow-y:hidden">
        <!-- Navbar -->
        @include('includes.navbar-app')
        <div class="position" style="margin-top:200px;"></div>
        <!-- End Navbar -->
        <!-- Movie -->
        @yield('movie')
        <!-- End Movie -->
    </section>

</body>