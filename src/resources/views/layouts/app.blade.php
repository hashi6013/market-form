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
        <input type="text" placeholder="なにをお探しですか?">
        <nav class="nav">
            <ul>
                <li>ログイン</li>
                <li>会員登録</li>
                <li><a href="">出品</a></li>
            </ul>
        </nav>
    </header>
    <main>
        @yield('content')
        <script src="https://kit.fontawesome.com/281a1830c2.js" crossorigin="anonymous"></script>
    </main>
</body>
</html>