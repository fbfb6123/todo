<?php

namespace App\Http\Controllers;

use App\Folder;
use App\Tasks;
use Illuminate\Http\Request;


class TaskController extends Controller
{
    public function index(int $id)
    {
        $folders = Folder::all();

        $current_folder = Folder::find($id);

        return view('tasks/index', [
            'folders' => $folders,
            'current_folder_id' => $id,
        ]);
    }
}
