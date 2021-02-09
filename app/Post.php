<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = "post";

    public function author(){
        return $this->belongsTo("App\Author", "author_id");
    }
}
