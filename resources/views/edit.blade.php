@extends('layouts/base')
@section('title, todo - メモ編集')

@section('content')

    <div class="wrapper mt-5">
        <h2>編集</h2>
        <form method="POST" action="{{ route('todos.update', $todo->id) }}">
            @csrf
            @method('PUT')
            <div class="memo mt-4">
                <div>
                    <label class="mt-3">タイトル</label>
                    <input name="title" type="text" value="{{ $todo->title }}">
                </div>
                <div>
                    <label class="mt-3">日付</label>
                    <input name="date" type="date" value="{{ $todo->date }}">
                </div>
                <div>
                    <label class="mt-3">メモ</label>
                    <textarea name='memo' class="form-control">{{ $todo->memo }}</textarea>
                </div>
            </div>
            <button type="submit" class="btn btn-warning mt-3">更新</button>
            <a href="{{ route('todos.index') }}" class="btn btn-secondary mt-3">戻る</a>
        </form>
    </div>

@endsection
