<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('index', [
            'todos' => Todo::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //リクエストデータを取得
        $data = $request->all();

        // モデルを作成し、データをセット
        $Todo = new Todo();
        $Todo->title = $data['title'];
        $Todo->date = $data['date'];
        $Todo->memo = $data['memo'];

        // データを保存
        $Todo->save();

        // 一覧ページにリダイレクト
        return redirect(route('todos.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        return view('show', [
            'todo' => Todo::find($id),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        return view('edit', [
            'todo' => Todo::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //対象データ取得
        $todo = Todo::find($id);

        // リクエストデータ取得
        $data = $request->all();

        // データを更新
        $todo->title = $data['title'];
        $todo->date = $data['date'];
        $todo->memo = $data['memo'];
        $todo->save();

        // リダイレクト
        return redirect(route('todos.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}