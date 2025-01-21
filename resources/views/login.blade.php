@extends('layouts/base')
@section('title, todo - ユーザー作成')

@section('content')
    <div class="w-100 mt-5">
        <h3>ログイン画面</h3>
        <form action="" method="POST">
            @csrf
            <div>
                <label for="email">メールアドレス</label>
                <input type="email" name="email">
            </div>
            <div>
                <label for="password">パスワード</label>
                <input type="password" name="password">
            </div>
            <div class="mt-3">
                <button class="btn btn-primary" type="submit">ログイン</button>
            </div>
            <a href="{{ route('register') }}" class="btn btn-secondary mt-3">新規登録画面へ</a>
        </form>
    </div>
@endsection
