<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ToDoItem extends Model
{
    public function owner() {
        return $this->hasOne('App\User', 'id');
    }
}
