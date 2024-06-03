@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/user/item.css') }}">
@endsection

@section('content')
<img src="{{ asset('storage/'.$item_detail->image_url) }}" alt="">
<h1>{{ $item_detail->name }}</h1>
<p>ブランド名</p>
<p>&yen;{{ $item_detail->price }}(値段)</p>
<div>
    <span><i class="fa-regular fa-star"></i></span>
    <span><i class="fa-regular fa-comment"></i></span>
</div>
<a href="/purchase/{{$item_detail->id}}">購入する</a>

<h2>商品説明</h2>
<p>{{ $item_detail->description }}</p>

<h2>商品の情報</h2>

<h3>カテゴリー</h3>

<h3>商品の状態</h3>
<div>
    <span>{{ $item_detail->condition->condition }}</span>
</div>
@endsection