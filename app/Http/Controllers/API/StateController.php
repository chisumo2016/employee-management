<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Country;
use Illuminate\Http\Request;

class StateController extends Controller
{
    public  function  states(Country $country)
    {
        return response()->json($country->states);
    }
}
