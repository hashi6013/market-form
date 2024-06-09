@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/user/item.css') }}">
<link rel="stylesheet" href="{{ asset('css/user/comment.css') }}">
@endsection

@section('content')
<section class="comment item-detail">
    <div class="comment__inner item-detail__inner w__inner">
        <div class="item-detail-about">
            <h1 class="item-detail-about__title">{{ $comment->name }}</h1>
            <p class="item-detail-about__brand">ブランド名</p>
            <p class="item-detail-about__price">&yen;{{ $comment->price }}(値段)</p>
            <form class="item-detail-form" action="#">
                @csrf
                <div class="item-detail-form__content">
                    <span class="item-detail-form__content-item">
                        <i class="fa-regular fa-star"></i>
                    </span>
                    <span class="item-detail-form__content-item item-form__item--favorite">
                        <i class="fa-regular fa-comment"></i>
                    </span>
                </div>
            </form>
            <form class="comment-form" action="#">
                @csrf
                <p class="comment-form__content">
                    <label class="comment-form__content-label" for="name1">名前</label>
                    <input class="comment-form__content-input" type="text" id="name1">
                </p>
                <p class="comment-form__content">
                    <label class="comment-form__content-label" for="name2">名前</label>
                    <input class="comment-form__content-input" type="text" id="name2">
                </p>
                <p class="comment-form__content">
                    <label class="comment-form__content-label--reverse" for="name3">名前</label>
                    <input class="comment-form__content-input--reverse" type="text" id="name3">
                </p>
                <p class="comment-form__content">
                    <label class="comment-form__content-label--textarea" for="name4">商品へのコメント</label>
                    <textarea class="comment-form__content-input--textarea" name="" id="name4"></textarea>
                </p>
                <button>コメントを送信する</button>
            </form>
        </div>
        <div class="item-detail-img">
            <figure class="item-detail-img__content">
                <img class="item-detail-img__item" src="{{ asset('storage/'.$comment->image_url) }}" alt="" width="240" height="360">
            </figure>
            <div class="item-detail-img-layout">
                <a class="item-detail-img__link item-detail-about__link" href="#">コメントする</a>
            </div>
        </div>
    </div>
</section>

@endsection