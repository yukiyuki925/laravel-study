@extends('layouts/base')
@section('title, todo - ようこそ')

@section('content')

    <div class="wrapper mt-5">
        <p>ようこそ{{ Auth::user()->name }}さん</p>
    </div>

@endsection
