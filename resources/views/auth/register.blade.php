<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title','Register')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">                                      <!-- Bootstrap style -->
    <link rel="stylesheet" href="{{asset('assets/css/templatemo-style.css')}}">
    <!-- Scripts -->

    <!-- Scripts -->
</head>

<body>

    @include('components.header')

    <main>
<div class="container">


<div  class="form-container">

    <h3>Register </h3>

    <div class="mt-4">
    @include('alerts.error')
    </div>

  <form action="{{ route('register') }}" method="POST">

    @csrf

    <label for="username">Your username</label>

    <input type="text" name="username" placeholder="Enter your username">

    <label for="phone_number">Your phone number</label>

    <input type="text" name="phone_number" placeholder="Enter your phonenumber">

    <label for="password">Password</label>

    <input type="password" name="password" placeholder="Password">

    <label for="password_confirmation">Confirm password</label>

    <input type="password" name="password_confirmation" placeholder="Password">

    <input type="submit" value="Submit">

    <div class="form-footer">

        <a href="{{ route('login') }}">Have an account? Login</a>

    </div>

  </form>
</div>

</div>
    </main>

    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
