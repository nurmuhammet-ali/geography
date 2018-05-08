<?php

namespace App\Http\Controllers;

use App\Country;
use Illuminate\Http\Request;

class FlagGameController extends Controller
{
    public function index()
    {
        return view('flag-game');
    }

    public function questions()
    {
        $temp_questions = [];
        $questions = Country::inRandomOrder()->limit(20)->select('id', 'name', 'code', 'flag')->get();
        foreach ($questions as $question) {
            $temp_questions[] = $question->id;
            $question['answered'] = false;
            $question['true'] = false;
        }
        $all = Country::whereNotIn('id', $temp_questions)->inRandomOrder()->limit(60)->pluck('name')->toArray();
        $chunk = array_chunk($all, 3, false);
        return response()->json([
            'questions' => $questions,
            'all' => $chunk
        ]);
    }
}
