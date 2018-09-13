<?php

namespace App\Http\Controllers;

use App\Building;
use Illuminate\Http\Request;
use App\Floor;
use App\Fraction;
use App\Measurement;
use App\installer;
use App\technician;
use App\owner;

class BuildingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($buildings = Null)
    {
        
        //$buildings = Building::find(3);
        $buildings = Building::All();
        //$floors = Floor::find();
        //$fractions = Fraction::All();
        //$floors = Floor::where('building_id', 1);
        //dd($buildings->floors);
        //$floors = $buildings->floors;
        //$fractions = $buildings->fractions;
        //$fractions = Building::find(1); 
        //dd($buildings->fractions);
        //$fractions = Fraction::where('Building_id', 1)->first();
//dd($buildings);

        return view('buildings.index',compact('buildings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('buildings.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $building = new building();
        $building->name = $request->input("name");
        $building->save();

        $myCheckboxes = $request->input('my_checkbox');
        $frCheckboxes = $request->input('fr_checkbox');

            foreach ($myCheckboxes as $myCheckbox) {
                 $floor = new floor();
                 $floor->building_id = $building->id;
                 $floor->piso = $myCheckbox;
                 $floor->save();

                    foreach ($frCheckboxes as $frCheckbox) {
                        $fraction = new fraction();
                         $fraction->floor_id = $floor->id;
                         $fraction->fraccao = $frCheckbox;
                         $fraction->save();
                        }
            }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Building  $building
     * @return \Illuminate\Http\Response
     */
    public function show(Building $building)
    {   
        
        return view('buildings.show',compact('building'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Building  $building
     * @return \Illuminate\Http\Response
     */
    public function edit(Building $building)
    {
        $installers = Installer::all();
        $technicians = Technician::all();
        $owners = Owner::all();
        return view('buildings.edit',compact('building', 'installers', 'technicians', 'owners'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Building  $building
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Building $building)
    {
         request()->validate([
            'name' => 'required',
        ]);


        $building->update($request->all());

dd($building);
        return redirect()->route('buildings.index')
                        ->with('success','buildings updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Building  $building
     * @return \Illuminate\Http\Response
     */
    public function destroy(Building $building)
    {
        //
    }

    public function fractions(Building $building, Fraction $fraction)
    {
        $buildings = Building::find($building->id);
        $floors = Building::find($building->id)->floors;

        //dd($buildings->fractions);
       

        return view('buildings.fractions',compact('buildings', 'floors'));
    }

    public function floors(Building $building)
    {
        $floors = Building::find($building->id)->floors;
        $buildings = Building::find($building->id); 

        return view('buildings.floors',compact('floors', 'buildings', 'building'));
    }

    public function showmeasurements(Building $building)
    {
        $floors = Building::find($building->id)->floors;
        $buildings = Building::find($building->id);
        $measurements = Measurement::all();
        $installer = Installer::find($building->installer_id);
        $technician = Technician::find($building->technician_id);
        $owner = Owner::find($building->owner_id);
        $designer = Owner::find($building->designer_id);

        return view('buildings.showmeasurements',compact('floors', 'buildings', 'building', 'measurements', 'installer', 'technician', 'owner', 'designer'));


    }
    
}
