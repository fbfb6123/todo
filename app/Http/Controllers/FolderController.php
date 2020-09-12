<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Folder;

class FolderController extends Controller
{
    public function showCreateForm()
    {
        return view('folder/create');
    }

    public function create()
    {
        //フォルダモデルのインスタンスを作成する
        $folder = new Folder();
    
        //タイトルに入力値を代入する
        $folder->title = $request->title;

        //インスタンスの状態をデータベースに保存する
        $folder->save();

        return redirect()->route('tasks.index',['id' => $folder->id,]);
    }
}
