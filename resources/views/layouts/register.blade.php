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
    <section class="section-register">
        <div className="container">
            <div class="logo-header">
                @include('includes.header')
            </div>
                @yield('form-register')
        </div>
    </section>

    @stack('prepend-script')
    @include('includes.script')
    @stack('addon-script')
</body>
</html>