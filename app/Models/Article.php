<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = "articles";

    protected $guarded = [];

    public function writer(){
        return $this->belongsTo(Writer::class);
    }
}
