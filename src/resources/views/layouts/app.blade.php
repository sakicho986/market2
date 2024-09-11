<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  <link rel="stylesheet" href="{{ asset('css/common.css') }}">
  @yield('css')
</head>

<body>
  <header class="header">
    <div class="header__inner">
      <div class="header-ttl">
        <a href="/">
          <img src=" images/logo.svg" alt="coachtech">
        </a>
      </div>
      <nav class="header-nav">
        @guest
        <ul class="header-nav-list">
          <li class="header-nav-item">
            <a class="header-nav__link" href="/login">
              ログイン
            </a>
          </li>
          <li class="header-nav-item">
            <a class="header-nav__link" href="/register">
              会員登録
            </a>
          </li>
          <li class="header-nav-item">
            <a class="header-nav__link" href="/sell">
              出品
            </a>
          </li>
        </ul>
        @endguest
        @if (Auth::check())
        <ul class="header-nav-list">
          <li class="header-nav-item">
             <form action="/logout" method="post">
              @csrf
              <button class="header-nav__button">ログアウト</button>
             </form>
          </li>
          <li class="header-nav-item">
            <a class="header-nav__link" href="/mypage">マイページ</a>
          </li>
          <li class="header-nav-item">
            <a class="header-nav__link" href="/sell">
              出品
            </a>
          </li>
        </ul>
        @endif
      </nav>
    </div>
  </header>

  <main>
    @yield('content')
  </main>
</body>

</html>