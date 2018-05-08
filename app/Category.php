<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function lessons()
    {
    	return $this->hasMany(Lesson::class);
    }

    public function quizes()
    {
        return $this->hasMany(Quiz::class);
    }
}
