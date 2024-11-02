<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Writer extends Model
{
    protected $table = "writers";

    protected $guarded = [];

    public function article(){
        return $this->hasMany(Article::class, 'writer_id');
    }
}
