@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/user/purchase.css') }}">
@endsection

@section('content')

<h1>{{ $purchase->name }}</h1>
<p>&yen;{{ $purchase->price }}</p>
<figure>
    <img src="{{ asset('storage/'.$purchase->image_url) }}" alt="購入する商品の画像">
</figure>

<form action="">
    <section>
        <h2>支払い方法</h2>
        <a href="">変更する</a>
    </section>
    <section>
        <h2>配送先</h2>
        <a href="/purchase/address/{{$purchase->id}}">変更する</a>
    </section>
    <dl>
        <dt>商品代金</dt>
        <dd>&yen;{{ $purchase->price }}</dd>
        <dt>支払金額</dt>
        <dd>&yen;{{ $purchase->price }}</dd>
        <dt>支払い方法</dt>
        <dd>コンビニ払い</dd>
    </dl>
    <button>
        購入する
    </button>
</form>
@endsection