@extends('layouts/base')
@section('title, todo - メモ一覧')

@section('content')

    <div class="wrapper mt-5">
        <h2>一覧</h2>
        <a href="{{ route('todos.create') }}" class="btn btn-primary mt-3">新規作成</a>
        <div class="index mt-4">
            @foreach ($todos as $todo)
                <ul>
                    <li><a href="{{ route('todos.show', $todo->id) }}">{{ $todo->title }}</a></li>
                </ul>
            @endforeach
        </div>
    </div>

@endsection
