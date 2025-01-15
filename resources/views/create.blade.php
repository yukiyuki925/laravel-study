@extends('layouts/base')
@section('title, todo - メモ作成')

@section('content')

    <div class="wrapper mt-5">
        <h2>作成</h2>
        <div class="memo mt-4">
            <div class="mt-2">
                <label>タイトル</label>
                <input class="form-control" placeholder="タイトル">
            </div>
            <div class="mt-2">
                <label>日付</label>
                <input type="date" class="form-control" placeholder="日付">
            </div>
            <div class="mt-2">
                <label>新規メモ</label>
                <textarea class="form-control" placeholder="新規で追加するメモ"></textarea>
            </div>
        </div>
        <div class="d-flex">
            <a href="#" class="btn btn-primary mt-3 mr-2">追加</a>
            <a href="{{ route('todos.index') }}" class="btn btn-secondary mt-3">戻る</a>
        </div>
    </div>

@endsection
