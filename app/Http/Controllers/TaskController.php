<?php

namespace App\Http\Controllers;

use App\Folder;
use App\Task;
use Illuminate\Http\Request;


class TaskController extends Controller
{
    public function index(int $id)
    {
        //全てのフォルダを取得
        $folders = Folder::all();

        //選択されたフォルダを取得
        $current_folder = Folder::find($id);

        //選択されたタスクを取得する
        $tasks = Task::where('folder_id', $current_folder->id)->get();

        return view('tasks/index', [
            'folders' => $folders,
            'current_folder_id' => $id,
            'tasks' => $tasks
        ]);
    }
}
