@extends('layouts/base')
@section('title, todo - ユーザー作成')

@section('content')
    <div class="w-100 mt-5">
        <h3>ユーザー登録画面</h3>
        <form method="POST">
            @csrf
            <div>
                <label for="name">名前</label>
                <input type="text" name="name">
            </div>
            <div>
                <label for="email">メールアドレス</label>
                <input type="email" name="email">
            </div>
            <div>
                <label for="password">パスワード</label>
                <input type="password" name="password">
            </div>
            <div class="mt-3">
                <button class="btn btn-primary" type="submit">登録</button>
            </div>
            <a href="{{ route('login') }}" class="btn btn-secondary mt-3">ログイン画面へ</a>
        </form>
    </div>
@endsection
