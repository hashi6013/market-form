<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COACHTECH</title>
    <link rel="stylesheet" href="{{ asset('css/layout/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/layout/sanitize.css') }}">
    @yield('css')
</head>
<body>
    <header class="header">
        <div class="logo">
            <a class="logo__link" href="/">
                <img class="logo__link-item" src="{{ asset('img/logo.svg') }}" alt="COACHTECH" decoding="async">
            </a>
        </div>
        @yield('nav')
    </header>
    <main>
        @yield('content')
    </main>
</body>
</html>