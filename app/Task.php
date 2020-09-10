<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{

   /**
    * 状態定義
    */
    const STATUS = [
      1 => ['label' => '未着手'],
      2 => ['label' => '着手中'],
      3 => ['label' => '完了'],
    ]
   /**
    * 状態のラベル
    */

}
