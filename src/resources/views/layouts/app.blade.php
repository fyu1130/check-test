<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Test</title>

    <link rel="stylesheet" href="{{asset('css/sanitize.css')}}">
    <link rel="stylesheet" href="{{asset('css/common.css')}}">
    @yeild('css')
</head>
<body>
    <header class="header">
        <div class="header__inner">
            <div class="header-utilities">
                <a href="/" class="header__logo">
                    Fashionably Late
                </a>
                <a href="/login" class="header__button">login</a>
            </div>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    
</body>
</html>