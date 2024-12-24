<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Frost;

class ForestControlles extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $forests = Frost::all();
        return view('list',compact('forests'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request -> only([
            'farm_name',
            'plain_forest_area_hectares',
            'public_forest_area_hectares',
            'self_funded_forest_area_hectares',
            'eco_forest_park_area_hectares',
            'total_area_hectares',
        ]);
        $forest = Frost::create($data);
        return redirect('/forest');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $forest = Frost::findOrFail($id);
        return view('show')->with('forest',$forest);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $forest = Frost::findOrFail($id);
        return view('edit')->with('forest',$forest);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $forest = Frost::findOrFail($id);
        $data = $request -> only([
            'farm_name',
            'plain_forest_area_hectares',
            'public_forest_area_hectares',
            'self_funded_forest_area_hectares',
            'eco_forest_park_area_hectares',
            'total_area_hectares',
        ]);
        $forest ->fill($data);
        $forest ->save();
    return redirect('/forest');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $forest = Frost::findOrFail($id);
        $forest ->delete();
        return redirect('/forest');
    }
}
