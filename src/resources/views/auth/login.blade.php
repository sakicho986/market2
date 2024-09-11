@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('content')
<div class="login-form">
  <h2 class="login-form__heading">ログイン</h2>
  <div class="login-form__inner">
    <form class="form" action="/login" method="post">
    @csrf
    <div class="login-form__group">
      <label class="login-form__label" for="email">メールアドレス</label>
      <input class="login-form__input" type="mail" name="email" id="email">
      <p class="login-form__error-message">
        @error('email')
        {{ $message }}
        @enderror
      </p>
    </div>
    <div class="login-form__group">
      <label class="login-form__label" for="password">パスワード</label>
      <input class="login-form__input" type="password" name="password" id="password">
      <p class="login-form__error-message">
        @error('password')
        {{ $message }}
        @enderror
      </p>
    </div>
    <input class="login-form__btn btn" type="submit" value="ログインする">
    <div class="login-form__login">
      <a href="/register">会員登録はこちら</a></div>
    </form>
  </div>
</div>
</body>
@endsection