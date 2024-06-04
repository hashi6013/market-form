@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/user/index.css') }}">
@endsection

@section('content')
<div class="recommend">
    <section class="recommend__list">
        <form class="recommend__form" action="#">
            @csrf
            <h2 class="recommend__title">
                <button class="recommend__button">
                    <span>おすすめ</span>
                </button>
            </h2>
        </form>
        @foreach($items as $item)
        <ul class="grid">
            <li class="grid__item">
                <a class="recommend-card" href="/item/{{$item->id}}">
                    <figure class="recommend-card__img">
                        <img src="{{ asset('storage/'.$item->image_url) }}" alt="">
                    </figure>
                </a>
            </li>
        </ul>
        @endforeach
    </section>

    <!-- 以下に、マイリスト -->

</div>


@endsection