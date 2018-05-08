<?php

namespace App\Http\Controllers;

use App\Category;
use App\Lesson;
use Illuminate\Http\Request;

class LessonsController extends Controller
{
    public function index(Category $category)
    {
    	$lessons = $category->lessons;
        return view('lessons', [
        	'category' => $category,
        	'lessons' => $lessons
    	]);
    }

    public function read(Lesson $lesson)
    {
    	return view('read', compact('lesson'));
    }
}
