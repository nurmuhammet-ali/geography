<?php

namespace App\Http\Controllers;

use Storage;
use App\Lesson;
use App\Category;
use Illuminate\Http\Request;

class AdminLessonsController extends Controller
{
	public function index(Category $category)
    {
    	$lessons = $category->lessons;
    	return view('admin.lessons.index', compact('lessons'));
    }

    public function create()
    {
    	$categories = Category::all();
    	return view('admin.lessons.create', compact('categories'));
    }

    public function store()
    {
    	$lesson = new Lesson;
    	$lesson->title = request()->title;
    	$lesson->body = request()->body;
    	$lesson->image = request()->file('image')->store('public/images');
    	$lesson->category_id = request()->category;
    	$lesson->save();

    	return redirect('/admin/lessons/' . $lesson->id);
    }

    public function show(Lesson $lesson)
    {
    	$categories = Category::all();
    	return view('admin.lessons.lesson', [
    		'lesson' => $lesson,
    		'categories' => $categories
		]);
    }

    public function edit(Lesson $lesson)
    {
    	$lesson->title = request()->title;
    	$lesson->body = request()->body;
    	$lesson->category_id = request()->category;
    	if (!is_null(request()->file('image'))) {
    		Storage::delete($lesson->image);
    		$lesson->image = request()->file('image')->store('public/images');
    	}
    	$lesson->save();

    	return back();
    }

    public function categories()
    {
    	$categories = Category::all();
    	return view('admin.categories', compact('categories'));
    }
}
