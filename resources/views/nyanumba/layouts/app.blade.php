<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>
    <title>API CAT 2</title>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
            <a class="navbar-brand" href="#">Students Fees Management</a>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <p class="nav-link">Steve Nyanumba</p>
                </li>
            </ul>

        </nav>

        <main class="py-5">
            @include('nyanumba.layouts.notify')
            @yield('content')
        </main>
    </div>
</body>
</html>
