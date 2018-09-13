<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;
use App\Device;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
      return view('dashboard.index');
            
    }

  
}
