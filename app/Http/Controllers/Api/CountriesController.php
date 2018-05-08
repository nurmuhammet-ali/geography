<?php

namespace App\Http\Controllers\Api;

use App\Country;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CountriesController extends Controller
{
    public function get($country)
    {
        $country = Country::where('code', $country)->first();

        if (is_null($country)) {
            return response()->json([
                'success' => false
            ]);
        }

        return response()->json([
            'success' => true,
            'info' => $country
        ]);
    }
}
