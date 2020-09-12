<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

        
    }
}
