<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    @stack('prepend-style')
    @include('includes.style-form')
    @stack('addon-style')
</head>
<body>
    <section class="section-paymentsuccess">
        <div className="container">
        <!-- Navbar -->
        @include('includes.header')
        <!-- End Navbar -->
        <!-- Upcoming -->
        @yield('successpayment')
        <!-- End Upcoming -->
    </div>
    </section>

</body>