@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/user/profile.css') }}">
@endsection

@section('content')
<h1>ユーザー名</h1>
<form action="">
    @csrf
    <dl>
        <dt>ここに画像</dt>
        <dd><input type="file"></dd>
        <dt>ユーザー名</dt>
        <dd><input type="text"></dd>
        <dt>郵便番号</dt>
        <dd><input type="text"></dd>
        <dt>住所</dt>
        <dd><input type="text"></dd>
        <dt>建物名</dt>
        <dd><input type="text"></dd>
    </dl>
    <button>
        更新する
    </button>

</form>
@endsection