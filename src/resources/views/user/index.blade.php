@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/layout/common.css') }}">
<link rel="stylesheet" href="{{ asset('css/user/index.css') }}">
@endsection

@section('content')

<section class="items">
    <div class="items-container">
        <div class="items-tab">
            <a class="items-tab__link" href="#">
                <span class="items-tab__link-text items-tab__link-text--default">おすすめ</span>
            </a>
            <a class="items-tab__link" href="#">
                <span class="items-tab__link-text">マイリスト</span>
            </a>
        </div>

        <div class="grid-container w-container">
            @foreach($items as $item)
            <figure>
                <a class="item-card" href="/item/{{$item->id}}">
                    <img src="{{ asset('storage/'.$item->image_url) }}" alt="出品された商品の画像" width="150" height="150">
                </a>
            </figure>
            @endforeach
        </div>
    </div>
</section>

    <!-- 以下に、マイリスト -->
@endsection