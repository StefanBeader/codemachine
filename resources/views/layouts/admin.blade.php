<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CodeMachine | Admin Panel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/admin/app.css') }}">
</head>
<body>
<div class="wrapper">
    <div class="admin-layout">
        <header class="top"></header>
        <aside class="side-menu">
            <div class="second-menu"></div>
        </aside>
        <main class="main">
            @yield('main')
        </main>
    </div>
</div>
<script src="{{ mix('js/admin/app.js') }}"></script>
</body>
</html>
