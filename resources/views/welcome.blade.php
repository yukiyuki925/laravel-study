@extends('layouts/base')
@section('title, todo - ようこそ')

@section('content')

    <div class="wrapper mt-5">
        <p>ようこそ{{ Auth::user()->name }}さん</p>
        <a href="{{ route('todos.index') }}" class="btn btn-primary mt-3 mb-3">メモする</a>

        <form action="{{ route('logout') }}" method="post">
            @csrf
            <button class="btn btn-secondary">ログアウト</button>
        </form>
    </div>

@endsection
