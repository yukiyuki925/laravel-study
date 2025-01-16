@extends('layouts/base')
@section('title, todo - メモ一覧')

@section('content')

    <div class="wrapper mt-5">
        <h2>一覧</h2>
        <a href="{{ route('todos.create') }}" class="btn btn-primary mt-3">新規作成</a>
        <div class="index mt-4">
            @foreach ($todos as $todo)
                <ul>
                    <div class="d-flex align-items-center">
                        <li><a href="{{ route('todos.show', $todo->id) }}">{{ $todo->title }}</a></li>
                        <form method="POST" action="{{ route('todos.destroy', $todo->id) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm ml-3"
                                onclick="return confirm('削除しますか？')">削除</button>
                        </form>
                    </div>
                </ul>
            @endforeach
        </div>
    </div>

@endsection
