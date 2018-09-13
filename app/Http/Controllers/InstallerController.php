<?php

namespace App\Http\Controllers;

use App\Installer;
use Illuminate\Http\Request;

class InstallerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $installers = Installer::latest()->paginate(15);


        return view('installers.index',compact('installers'))
            ->with('i', (request()->input('page', 1) - 1) * 15);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('installers.create');
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


        Installer::create($request->all());

        return redirect()->route('installers.index')
                        ->with('success','Instalador created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Installer  $installer
     * @return \Illuminate\Http\Response
     */
    public function show(Installer $installer)
    {
        return view('installers.show',compact('installer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Installer  $installer
     * @return \Illuminate\Http\Response
     */
    public function edit(Installer $installer)
    {
        return view('installers.edit',compact('installer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Installer  $installer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Installer $installer)
    {
        request()->validate([
            'name' => 'required',
        ]);


        $installer->update($request->all());


        return redirect()->route('installers.index')
                        ->with('success','Instalador updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Installer  $installer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Installer $installer)
    {
        $installer->delete();


        return redirect()->route('installers.index')
                        ->with('success','Instalador deleted successfully');
    }
}
