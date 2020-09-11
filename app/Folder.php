<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Folder extends Model
{
    public function tasks()
    {
      return $this->hasMany('App\Task');
      //省略せずに書いた場合、意味合いは一緒。$this->hasMany('App\Task', 'folder_id', 'id');
    }
}
