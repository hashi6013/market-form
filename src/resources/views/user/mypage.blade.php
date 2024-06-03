@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/user/mypage.css') }}">
@endsection

@section('content')
<h1>ユーザー名</h1>
<figure>
    <img src="" alt="ユーザーのプロフィール画像">
</figure>
<p>
    <a href="">
        プロフィールを編集
    </a>
</p>
<section>
    <h2>出品した商品</h2>
</section>
<section>
    <h2>購入した商品</h2>
</section>


@endsection