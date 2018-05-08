<?php

namespace App\Http\Controllers;

use App\Quiz;
use App\Category;
use Illuminate\Http\Request;

class QuizesController extends Controller
{
    public function index()
    {
    	$categories = Category::all();
    	return view('quizes', compact('categories'));
    }

    public function show($category)
    {
        $questions = Quiz::where('category_id', $category)->inRandomOrder()->limit(20)->get();

        if (count($questions) == 0) return 'Hiç hili sorag ýok';

    	return view('quizes.index', [
            'questions' => $questions
        ]);
    }

    public function all()
    {
        $categories = Category::all();
        return view('admin.quizes.index', compact('categories'));
    }

    public function add(Category $category)
    {
        $quizes = $category->quizes;

        return view('admin.quizes.add', [
            'quizes' => $quizes,
            'category' => $category
        ]);
    }

    public function create(Category $category)
    {
        $this->validate(request(), [
            'question' => 'required',
            'answer' => 'required',
            'falsy_answer1' => 'required',
            'falsy_answer2' => 'required',
            'falsy_answer3' => 'required',
            'image' => 'required',
        ]);

        $quiz = new Quiz;
        $quiz->question = request()->question;
        $quiz->answer = request()->answer;
        $quiz->falsy_answer1 = request()->falsy_answer1;
        $quiz->falsy_answer2 = request()->falsy_answer2;
        $quiz->falsy_answer3 = request()->falsy_answer3;
        $quiz->image = request()->file('image')->store('public/quiz/images');
        $quiz->category_id = $category->id;
        $quiz->save();

        return back();
    }

    public function delete(Quiz $quiz)
    {
        $quiz->delete();

        return back();
    }
}
