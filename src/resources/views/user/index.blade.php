@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/user/index.css') }}">

@section('nav')
<input type="text" placeholder="何をお探しですか？">
<nav>
    <ul>
        <li>ログイン</li>
        <li>会員登録</li>
        <li><a href="">出品</a></li>
    </ul>
</nav>
@endsection

@section('content')
<section>
    <h2>おすすめ</h2>

</section>

@endsection