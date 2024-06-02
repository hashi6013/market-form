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
    <form action="#">
        @csrf
        <button><span>おすすめ</span></button>
    </form>
    <section>
        @foreach($items as $item)
        <img src="{{ asset('storage/'.$item->image_url)}}" width="240" height="160" alt="出品された商品の画像" decoding="async">
        @endforeach
    </section>
</section>

@endsection