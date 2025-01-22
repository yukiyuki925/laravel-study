<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // フォームの値を取得
        $search = $request->input('search');
        // デフォルトは降順で表示
        $query = Todo::orderBy('created_at', 'desc');

        // 検索をかけたらデータを絞る
        if (isset($search)) {
            $query = Todo::where('title', 'LIKE', '%' . $search . '%');
        }

        // リセットを押したら一覧ページにリダイレクト
        if ($request->filled('reset')) {
            return redirect(route('todos.index'));
        }

        // 上記結果をpaginate
        $todos = $query->paginate(30);

        return view('index', compact('todos', 'search'));
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
        //リクエストデータをバリデーション
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'date' => 'required|date',
            'memo' => 'nullable|string|max:100',
        ]);

        // モデルを作成し、データをセット
        $Todo = new Todo();
        $Todo->title = $validatedData['title'];
        $Todo->date = $validatedData['date'];
        $Todo->memo = $validatedData['memo'];

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
        //対象データ取得
        $todo = Todo::find($id);
        // レコード削除
        $todo->delete();

        // リダイレクト
        return redirect(route('todos.index'));
    }
}