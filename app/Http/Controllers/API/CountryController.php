<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function countries()
    {
        $countries = Country::all();

        return response()->json($countries);
    }
}
