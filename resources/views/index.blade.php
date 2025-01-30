@extends('layouts/base')
@section('title, todo - メモ一覧')

@section('content')

    <div class="wrapper mt-4">
        <h2>一覧</h2>
        <div class="d-flex align-items-center mt-5 mb-4">
            <a href="{{ route('todos.create') }}" class="btn btn-primary mr-4">新規作成</a>
            <form method="GET" action="{{ route('todos.index') }}">
                <div class="d-flex">
                    <input name="search" class="form-control w-50" placeholder="タイトル" value="{{ $search }}">
                    <div class="d-flex">
                        <input class="ml-1" type="submit" value="検索">
                        <input name="reset" class="ml-1" type="submit" value="リセット">
                    </div>
                </div>
            </form>
            <div>
                <a href="{{ route('tagIndex') }}" class="btn btn-secondary mt-3">タグ一覧へ</a>
            </div>
        </div>
        <div class="index mt-4">
            @foreach ($todos as $todo)
                <ul>
                    <div class="d-flex align-items-center">
                        <div class="mr-3">
                            <form action="{{ route('todos.toggle', $todo->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <input type="checkbox" onchange="this.form.submit()"
                                    {{ $todo->is_completed ? 'checked' : '' }}>
                            </form>
                        </div>
                        <div class="d-flex align-items-center">
                            <li style="list-style: none">
                                <a style="{{ $todo->is_completed ? 'text-decoration: line-through;' : '' }}"
                                    href="{{ route('todos.show', $todo->id) }}">{{ $todo->title }}</a>
                            </li>
                            <form method="POST" action="{{ route('todos.destroy', $todo->id) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm ml-3"
                                    onclick="return confirm('削除しますか？')">削除</button>
                            </form>
                        </div>
                    </div>
                </ul>
            @endforeach
        </div>
    </div>

@endsection
