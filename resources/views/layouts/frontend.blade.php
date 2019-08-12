<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CodeMachine | Creating unique software solution for your company</title>
    <meta name="description" content="We are software development agency,
    aimed at creating unique and powerful tools for your business & everyday life.">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
<div class="wrapper">
    @include('frontend.components.navigation')
    <main>
        @yield('page')
    </main>
    @include('frontend.components.footer')
    @include('frontend.components.scrollToTop')
</div>
<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
