<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CityStoreRequest;
use App\Http\Requests\Admin\CityUpdateRequest;
use App\Models\City;
use App\Models\State;
use Illuminate\Http\Request;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $cities = City::all();

        if ($request->has('search')){
            $cities = City::where('name','like', "%{$request->search}%")->get();
        }
        return view('admin.cities.index',compact('cities'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $states = State::all();
        return view('admin.cities.create', compact('states'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CityStoreRequest $request)
    {
        City::create($request->validated());

        return redirect()->route('cities.index')->with('message','City Created Successfully');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(City $city)
    {
        $states = State::all();
        return view('admin.cities.edit',compact('city','states'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CityUpdateRequest $request, City $city)
    {
        $city->update([
            'state_id'  => $request->state_id,
            'name'      => $request->name,
        ]);

        return redirect()->route('cities.index')->with('message','City Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(City $city)
    {
        $city->delete();

        return redirect()->route('cities.index')->with('message','City Deleted Successfully');
    }
}
