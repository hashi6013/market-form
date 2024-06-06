@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/user/item.css') }}">
@endsection

@section('content')
<section class="item-detail">
    <div class="item-detail-container w-container">
        <div class="item-detail__inner">
            <h1 class="title-decoration">{{ $item_detail->name }}</h1>
            <p class="item-brand-decoration">ブランド名</p>
            <p class="item-price-decoration">&yen;{{ $item_detail->price }}(値段)</p>
            <form class="item-form" action="#">
                <span class="item-form__item">
                    <i class="fa-regular fa-star"></i>
                </span>
                <span class="item-form__item item-form__item--favorite">
                    <i class="fa-regular fa-comment"></i>
                </span>
            </form>
            <a class="item-detail-link" href="#">
                購入する
            </a>
            <div class="item-detail__description">
                <h2 class="item-detail__description-title">商品説明</h2>
                <p>{{ $item_detail->description }}</p>
            </div>
            <div class="item-detail__description">
                <h2 class="item-detail__description-title">商品の情報</h2>
                <h3 class="item-detail__description-caption">カテゴリー</h3>
                <div class="item-detail__description-layout">
                    <h3 class="item-detail__description-caption">商品の状態</h3>
                    <p>{{ $item_detail->condition->condition }}</p>
                </div>
            </div>
        </div>
        <figure class="item-detail-img">
            <img class="item-detail-img__item" src="{{ asset('storage/'.$item_detail->image_url) }}" alt="" width="240" height="360">
        </figure>
    </div>
</section>
@endsection