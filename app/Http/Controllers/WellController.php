<?php

namespace App\Http\Controllers;

use App\Well;
use App\Resource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Faker;

class WellController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wells = Well::all();

        return view('wells.index', compact('wells'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Faker\Generator $faker)
    {
        $well = Well::create([
            'name' => $faker->city,
            'used' => 0
        ]);

        $resource = Resource::create([
            'name' => "Ogeum",
            'amount' => 100,
            'well_id' => $well->id
        ]);

        Session::flash('message', 'Well created');
        return redirect('/wells');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Well  $well
     * @return \Illuminate\Http\Response
     */
    public function show(Well $well)
    {
        $resource = Resource::where('well_id', $well->id)->first();

        return view('wells.show', compact('well', 'resource'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Well  $well
     * @return \Illuminate\Http\Response
     */
    public function edit(Well $well)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Well  $well
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Well $well)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Well  $well
     * @return \Illuminate\Http\Response
     */
    public function destroy(Well $well)
    {
        //
    }
}
