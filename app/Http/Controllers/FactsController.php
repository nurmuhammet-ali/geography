<?php

namespace App\Http\Controllers;

use App\Fact;
use Illuminate\Http\Request;

class FactsController extends Controller
{
    public function index()
    {
    	$facts = Fact::all();
        return view('facts', compact('facts'));
    }

    public function create()
    {
        $facts = Fact::all();
    	return view('admin.facts.create', compact('facts'));
    }

    public function store()
    {
        $this->validate(request(), [
            'body' => 'required|max:255'
        ]);

    	$fact = new Fact;
        $fact->body = request()->body;
        $fact->image = request()->file('image')->store('public/facts');
        $fact->save();

        return back();
    }

    public function delete(Fact $fact)
    {
        $fact->delete();

        return back();
    }
}
