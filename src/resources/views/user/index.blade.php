@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/user/index.css') }}">
@endsection

@section('content')
<section>
    <form action="#">
        @csrf
        <h2>
            <button>
                <span>おすすめ</span>
            </button>
        </h2>
    </form>
    @foreach($items as $item)
    <a href="/item/{{$item->id}}">
        <figure>
            <img src="{{ asset('storage/'.$item->image_url) }}" alt="">
        </figure>
    </a>
    @endforeach
</section>
<section>
    <form action="">
        @csrf
        <h2>
            <a href="">
                <button>
                    <span>マイリスト</span>
                </button>
            </a>
        </h2>
    </form>
</section>

@endsection