<?php

namespace App\Http\Controllers;

use App\Dyndns_host;
use Illuminate\Http\Request;
use App\Client;

class Dyndns_hostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dyndns_hosts = Dyndns_host::latest()->paginate(15);


        return view('dyndns_hosts.index',compact('dyndns_hosts'))
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
         return view('dyndns_hosts.create', compact('clients'));
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
            'host' => 'required',
        ]);


        Dyndns_host::create($request->all());

        return redirect()->route('dyndns_hosts.index')
                        ->with('success','Host created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Dyndns_host  $dyndns_host
     * @return \Illuminate\Http\Response
     */
    public function show(Dyndns_host $dyndns_host)
    {
        return view('dyndns_hosts.show',compact('dyndns_host'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Dyndns_host  $dyndns_host
     * @return \Illuminate\Http\Response
     */
    public function edit(Dyndns_host $dyndns_host)
    {
        $clients = Client::all();
        return view('dyndns_hosts.edit',compact('dyndns_host', 'clients'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Dyndns_host  $dyndns_host
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dyndns_host $dyndns_host)
    {
        request()->validate([
            'host' => 'required',
        ]);


        $dyndns_host->update($request->all());


        return redirect()->route('dyndns_hosts.index')
                        ->with('success','host updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Dyndns_host  $dyndns_host
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dyndns_host $dyndns_host)
    {
         $dyndns_host->delete();


        return redirect()->route('dyndns_hosts.index')
                        ->with('success','host deleted successfully');
    }
}
