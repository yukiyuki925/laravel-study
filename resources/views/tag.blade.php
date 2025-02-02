@extends('layouts/base')
@section('title, todo - タグ')

@section('content')
    <div class="w-100 mt-5">
        <h3>タグ一覧</h3>
        <a href="{{ route('todos.index') }}" class="btn btn-secondary mt-3">戻る</a>
    </div>
@endsection
