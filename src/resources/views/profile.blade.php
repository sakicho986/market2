@extends('layouts.app')

@section('title',  'プロフィール編集')

@section('css')
<link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
<link rel="stylesheet" href="{{ asset('css/profile.css') }}">
@endsection

@section('content')
<div class="profile__content">
    <div class="profile__user">
        <h1 class="profile__user--name">プロフィール設定</h1>
    </div>
    <form class="update-form" action="/mypage/profile" method="POST">
        @method('PATCH')
        @csrf
        <div class="update-form__item">
            <input type="file" name="top_image" accept="image/png, image/jpeg" value="{{ $user->avatar_file_name }}">
            <div class="rprofile-form__group">
                <label class="profile-form__label" for="name">ユーザー名</label>
                <input class="profile-form__input" type="text" name="name" value="{{ $user->name }}">
            </div>
            <div class="profile-form__group">
                <label class="profile-form__label" for="post">郵便番号</label>
                <input class="profile-form__input" type="text" name="post" value="{{ $user->post }}" >
            </div>
            <div class="profile-form__group">
                <label class="profile-form__label" for="address">住所</label>
                <input class="profile-form__input" type="text" name="address" value="{{ $user->address }}">
            </div>
            <div class="profile-form__group">
                <label class="profile-form__label" for="building">建物名</label>
                <input class="profile-form__input" type="text" name="building" value="{{ $user->building }}">
            </div>
            <input type="hidden" name="id" value="{{ $user->id }}">
            <input type="submit" name="submit" value="更新する" />
        </div>
    </form>
</div>
@endsection