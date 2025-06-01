<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    protected $fillable = ['FIO', 'Description', 'Active', 'AGE', ];
      public function selected_game(){
       return $this->hasOne(Game::class, 'id');
    }
}
