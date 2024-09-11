@extends('layouts.app')

@section('title',  'マイページ')

@section('css')
<link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
<link rel="stylesheet" href="{{ asset('css/mypage.css') }}">
@endsection

@section('content')
<div class="mypage__content">
  <div class="mypage__user">
      <p class="mypage__user--name">ユーザー名</P>
      <form action="/my_page2" method="post" enctype='multipart/form-data'></form>
    {{ csrf_field() }}
    <!-- 画像内容 -->
  </div>
  <div>
      <input type="file" name="top_image">
  </div>
  <div class="mypage__user">
      <a href="/mypage/profile">
        プロフィールを編集
      </a>
  </div>
</div>
  <div class="mypage__container">
    <div class="mypage__container--recommend">
      出品した商品
    </div>
    <div class="mypage__container--list">
      購入した商品
    </div>
  </div>
  <div class="mypage__layout">
    <hr class="mypage__layout--line" width="100%">
  </div>
  <div class="mypage__wrapper">
    <div class="mypage__wrapper--post"></div>
    <div class="mypage__wrapper--post"></div>
    <div class="mypage__wrapper--post"></div>
    <div class="mypage__wrapper--post"></div>
    <div class="mypage__wrapper--post"></div>
  </div>
  <div class="mypage__wrapper1">
    <div class="mypage__wrapper--post1"></div>
    <div class="mypage__wrapper--post1"></div>
    <div class="mypage__wrapper--post1"></div>
    <div class="mypage__wrapper--post1"></div>
    <div class="mypage__wrapper--post1"></div>
  </div>
</div>
@endsection