<?php

namespace App\Http\Controllers;

use App\Device;
use Illuminate\Http\Request;
use App\Client;
use App\Devices_type;


class DeviceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $devices = Device::latest()->paginate(15);


        return view('devices.index',compact('devices'))
            ->with('i', (request()->input('page', 1) - 1) * 15);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clients = Client::all();
        $types = Devices_type::all();
        return view('devices.create', compact('clients', 'types'));

        //return view('devices.create');
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
            'name' => 'required',
        ]);


        Device::create($request->all());

        return redirect()->route('devices.index')
                        ->with('success','device created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Device  $device
     * @return \Illuminate\Http\Response
     */
    public function show(Device $device)
    {
        return view('devices.show',compact('device'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Device  $device
     * @return \Illuminate\Http\Response
     */
    public function edit(Device $device, Client $client, Devices_type $devices_type)
    {
        $types = Devices_type::all();
        return view('devices.edit',compact('device', 'client', 'types'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Device  $device
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Device $device)
    {
        request()->validate([
            'name' => 'required',
        ]);


        $device->update($request->all());


        return redirect()->route('devices.index')
                        ->with('success','device updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Device  $device
     * @return \Illuminate\Http\Response
     */
    public function destroy(Device $device)
    {
        $device->delete();


        return redirect()->route('devices.index')
                        ->with('success','device deleted successfully');
    }

    public function display(Device $device, Client $client)
    {
        
        $devices = $device->where("client_id", "=", $client->id)->get();
        return view('devices.display' , compact('devices', 'client'));
    }

}
