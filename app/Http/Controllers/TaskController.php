<?php

namespace App\Http\Controllers;

use App\Folder;
use App\Task;
use Illuminate\Http\Request;
use App\Http\Requests\CreateTask;


class TaskController extends Controller
{
    public function index(int $id)
    {
        //全てのフォルダを取得
        $folders = Folder::all();

        //選択されたフォルダを取得
        $current_folder = Folder::find($id);

        //選択されたタスクを取得する
        //$tasks = Task::where('folder_id', $current_folder->id)->get();で取得していたがモデルにhasManyのリレーション関係を定義することによって下記の記述に省略できるようになる
        $tasks = $current_folder->tasks()->get();

        return view('tasks/index', [
            'folders' => $folders,
            'current_folder_id' => $id,
            'tasks' => $tasks
        ]);
    }

    public function showCreateForm(int $id)
    {
        return view('tasks/create', ['folder_id' => $id]);
    }

    public function create(int $id, CreateTask $request)
    {
        $current_folder = Folder::find($id);

        $task = new Task();
        $task->title = $request->title;
        $task->due_date = $request->due_date;

        $current_folder->tasks()->save($task);

        return redirect()-> route('tasks.index', ['id' => $current_folder->id,]);
    }

}
