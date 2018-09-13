<?php

namespace App\Http\Controllers;

use App\Fraction;
use Illuminate\Http\Request;
use App\Building;
use App\Floor;
use App\Measurement;

class FractionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buildings = Building::All();
        $floors = Floor::All();
        $fractions = Fraction::All();   
 
        return view('fractions.index',compact('buildings', 'floors', 'fractions'));
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
    public function store(Request $request)
    {
        request()->validate([
            'atiate1310' => 'required',
        ]);


        Fraction::create($request->all());

        return redirect()->route('fractions.index')
                        ->with('success','fraccao created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Fraction  $fraction
     * @return \Illuminate\Http\Response
     */
    public function show(Fraction $fraction)
    {
        $measurements = Measurement::All();

        return view('fractions.show',compact('fraction', 'measurements'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Fraction  $fraction
     * @return \Illuminate\Http\Response
     */
    public function edit(Fraction $fraction, Measurement $measurement)
    {
        $measurement = Measurement::All();
        return view('measurement.edit',compact('fraction', 'measurement'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Fraction  $fraction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fraction $fraction, Measurement $Measurement)
    {
       
        request()->validate([
            'fibra' => 'required'
        ]);

        $Measurement->update($request->all());


        return redirect()->route('fractions.index')
                        ->with('success','medida updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Fraction  $fraction
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fraction $fraction)
    {
        //
    }

    public function measurements(Request $request, Fraction $fraction, Measurement $measurement)
    { 
        $measurements = Measurement::where('fraction_id', $fraction->id)->get();
        $fractions = fraction::where('id', $fraction->id)->get();
        $floor = Floor::find($fraction->floor_id);
        $building = Building::find($floor->building_id);
        return view('fractions.measurements',compact('measurements', 'fractions', 'floor', 'building'));
    }
    public function addmeasurements(Request $request, Fraction $fraction)
    { 


        $floor = Floor::find($fraction->floor_id);
        $building = Building::find($floor->building_id);
        $fractions = fraction::where('id', $fraction->id)->get();
        return view('fractions.addmeasurements',compact('fractions', 'floor', 'building'));
    }
}
