@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/user/address.css') }}">
@endsection

@section('content')
<form action="">
    @csrf
    <!-- ここにパッチ -->
    
</form>

@foreach($edits as $edit)
{{$edit->user->id}}
@endforeach

@endsection