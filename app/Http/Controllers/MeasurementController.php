<?php

namespace App\Http\Controllers;

use App\Measurement;
use Illuminate\Http\Request;
use App\Building;
use App\Floor;
use App\Fraction;

class MeasurementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $measurements = Measurement::all();
        
        return view('measurements.index', compact('measurements'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $buildings = Building::all();
       
        return view('measurements.create', compact('buildings'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Measurement $measurement)
    {
        request()->validate([
            'fraction_id' => 'required',
            'fibra' => 'required',
        ]);

        Measurement::create($request->all());

        return redirect()->route('fractions.measurements',$request->fraction_id)
                        ->with('success','medida created successfully.');

                    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Measurement  $measurement
     * @return \Illuminate\Http\Response
     */
    public function show(Measurement $measurement)
    {
        return view('measurements.show',compact('measurement'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Measurement  $measurement
     * @return \Illuminate\Http\Response
     */
    public function edit(Measurement $measurement, Fraction $fraction)
    {
        
        return view('measurements.edit',compact('measurement'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Measurement  $measurement
     * @return \Illuminate\Http\Response
     */
   public function update(Request $request, Measurement $measurement)
    {
        request()->validate([
            'fraction_id' => 'required',
        ]);
        
        $measurement->update($request->all());

        return redirect()->route('measurements.edit', compact('measurement'))
                            ->with('success','Medida updated successfully');
 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Measurement  $measurement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Measurement $measurement)
    {
        //
    }
}
