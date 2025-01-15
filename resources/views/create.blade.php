@extends('layouts/base')
@section('title, todo')

@section('content')

    <div class="wrapper mt-5">
        <h2>作成</h2>
        <div class="memo mt-4">
            <label>新規メモ</label>
            <input class="form-control" placeholder="新規で追加するメモ">
        </div>
        <a href="#" class="btn btn-primary mt-3">追加</a>
    </div>

@endsection
