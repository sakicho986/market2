@extends('layouts.app')

@section('title',  'トップページ')

@section('css')
<link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
<link rel="stylesheet" href="{{ asset('css/index.css') }}">

@endsection

@section('content')
<div class="app__content">
  <div class="app__container">
    <div class="app__container--recommend">
      おすすめ
    </div>
    <div class="app__container--list">
      マイリスト
    </div>
  </div>
  <div class="app__layout">
    <hr class="app__layout--line" width="100%">
  </div>
  <div class="app__wrapper">
    <div class="app__wrapper--post"></div>
    <div class="app__wrapper--post"></div>
    <div class="app__wrapper--post"></div>
    <div class="app__wrapper--post"></div>
    <div class="app__wrapper--post"></div>
  </div>
  <div class="app__wrapper1">
    <div class="app__wrapper--post1"></div>
    <div class="app__wrapper--post1"></div>
    <div class="app__wrapper--post1"></div>
    <div class="app__wrapper--post1"></div>
    <div class="app__wrapper--post1"></div>
  </div>
</div>
@endsection