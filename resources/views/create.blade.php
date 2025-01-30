@extends('layouts/base')
@section('title, todo - メモ作成')

@section('content')

    <div class="wrapper mt-5">
        <h2>作成</h2>
        <form method="POST" action="{{ route('todos.store') }}">
            @csrf
            <div class="memo mt-4">
                <div class="mt-2">
                    <label>タイトル</label>
                    <input name='title' class="form-control" placeholder="タイトル">
                </div>
                <div class="mt-2">
                    <label>タグ</label>
                    <input name='tags' class="form-control" placeholder="タグ">
                </div>
                <div class="mt-2">
                    <label>日付</label>
                    <input name='date' type="date" class="form-control" placeholder="日付">
                </div>
                <div class="mt-2">
                    <label>新規メモ</label>
                    <textarea name='memo' class="form-control" placeholder="新規で追加するメモ"></textarea>
                </div>
            </div>
            <div class="d-flex">
                <button type="submit" class="btn btn-primary mt-3 mr-2">追加</button>
                <a href="{{ route('todos.index') }}" class="btn btn-secondary mt-3">戻る</a>
            </div>
        </form>
    </div>

@endsection
