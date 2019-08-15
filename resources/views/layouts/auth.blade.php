<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CodeMachine | @yield('page_title')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/auth/app.css') }}">
</head>
<body>
<div class="wrapper">
    <div class="auth-layout">
        <main class="main">
            @yield('main')
        </main>
    </div>
</div>
<script src="{{ mix('js/auth/app.js') }}"></script>
</body>
</html>
