<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>CodeMachine | Admin Panel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/admin/app.css') }}">
</head>
<body>
<div class="wrapper">
    <div class="admin-layout">
        <header class="top">
            @include('admin.components.header')
        </header>
        <aside class="side-menu">
            {{--@include('admin.components.sidenav')--}}
            <div class="second-menu">
                <ul class="second-level"></ul>
            </div>
        </aside>
        <main class="main">
            @yield('main')
        </main>
    </div>
</div>
<script src="{{ mix('js/admin/app.js') }}"></script>
</body>
</html>
