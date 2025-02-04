@extends('layouts/base')
@section('title, todo - メモ詳細')

@section('content')

    <div class="wrapper mt-5">
        <h2>詳細</h2>
        <div class="memo mt-4">
            <label class="mt-3">タイトル</label>
            <h4>{{ $todo->title }}</h4>
            <label class="mt-3">日付</label>
            <h4>{{ $todo->date }}</h4>
            @foreach ($todo->tags as $tag)
                @if ($tag)
                    <label class="mt-3">タグ</label>
                    <ul>
                        <li>{{ $tag->name }}</li>
                    </ul>
                @endif
            @endforeach
            <label class="mt-3">メモ</label>
            <h4>{{ $todo->memo }}</h4>
        </div>
        <div class="d-flex">
            <a href="{{ route('todos.edit', $todo->id) }}" class="btn btn-success mt-3 mr-2">編集</a>
            <a href="{{ route('todos.index') }}" class="btn btn-secondary mt-3">戻る</a>
        </div>
    </div>

@endsection
