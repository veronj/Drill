<?php

namespace App\Http\Controllers;

use App\Drill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class DrillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function mine()
    {
        $drills = Drill::first();
        //dd($drills->user->inventory);
        $resource = $drills->well->resource;
        $amount_mined = round((0.1 * $resource->amount) >= 100 ? 100 : (0.1 * $resource->amount));
        $resource->amount -= $amount_mined;
        $resource->save();

        $inventory = $drills->user->inventory;
        $inventory->ogeum += 10;
        $inventory->save();


        Session::flash('message', 'Drill mined ' . $amount_mined . ' units');
        return redirect('/wells');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($id)
    {

        $drill = Drill::create([
            'user_id' => auth()->id(),
            'well_id' => $id,
            'active' => 1
        ]);

        Session::flash('message', 'Drill installed');
        return redirect('/wells');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Drill  $drill
     * @return \Illuminate\Http\Response
     */
    public function show(Drill $drill)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Drill  $drill
     * @return \Illuminate\Http\Response
     */
    public function edit(Drill $drill)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Drill  $drill
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Drill $drill)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Drill  $drill
     * @return \Illuminate\Http\Response
     */
    public function destroy(Drill $drill)
    {
        //
    }
}
