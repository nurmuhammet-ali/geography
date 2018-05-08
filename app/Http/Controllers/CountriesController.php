<?php

namespace App\Http\Controllers;

use Storage;
use App\Country;
use Illuminate\Http\Request;

class CountriesController extends Controller
{
    public function countries()
    {
        $countries = Country::all();
        return view('countries', compact('countries'));
    }

    public function index()
    {
    	$countries = Country::all();
        return view('admin.country.index', compact('countries'));
    }

    public function show(Country $country)
    {
        return view('admin.country', compact('country'));
    }

    public function edit(Country $country)
    {
        Storage::delete($country->flag);
        $country->name = request()->name;
        $country->capital = request()->capital;
        $country->area = request()->area;
        $country->consitutional_form = request()->consitutional_form;
        $country->president = request()->president;
        $country->population = request()->population;
        $country->about = request()->about;
        if (!is_null(request()->file('flag'))) {
            $country->flag = request()->file('flag')->store('public/countries');
        }
        $country->save();

        return back();
    }
}
