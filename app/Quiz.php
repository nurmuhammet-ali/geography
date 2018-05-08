<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{

    protected $table = 'quizes';

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
