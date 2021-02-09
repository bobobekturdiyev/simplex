<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $table = "author";

    public function posts(){
        return $this->hasMany("App\Post", "author_id");
    }
}
