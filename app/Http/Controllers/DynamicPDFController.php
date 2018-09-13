<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use PDF;
use App\Building;
use App\Measurement;

class DynamicPDFController extends Controller
{
    function index()
    {
     $buildings_data = $this->get_buildings_data();
     $measurements_data = $this->get_measurements_data();
     return view('dynamic_pdf')->with('buildings_data', $buildings_data)->with('measurements_data', $measurements_data);
    }

    function get_buildings_data()
    {
     $buildings_data = DB::table('buildings')
         ->get();
     return $buildings_data;
    }
    function get_measurements_data()
    {
     $measurements_data = DB::table('measurements')
         ->get();
     return $measurements_data;
    }

    function pdf()
    {
     $pdf = \App::make('dompdf.wrapper');
     $pdf->loadHTML($this->convert_customer_data_to_html());
     return $pdf->stream();
    }

    function convert_customer_data_to_html()
    {
     $buildings_data = $this->get_buildings_data();
     $measurements_data = $this->get_measurements_data();

     $output = '
     <h3 align="center">Customer Data</h3>
     <table width="100%" style="border-collapse: collapse; border: 0px;">
      <tr>
    <th style="border: 1px solid; padding:12px;" width="20%">Name</th>
    <th style="border: 1px solid; padding:12px;" width="30%">Address</th>
    <th style="border: 1px solid; padding:12px;" width="15%">Locality</th>
    <th style="border: 1px solid; padding:12px;" width="15%">PostCode</th>
    <th style="border: 1px solid; padding:12px;" width="20%">atiate1310</th>
    <th style="border: 1px solid; padding:12px;" width="30%">atiate1550</th>
    <th style="border: 1px solid; padding:12px;" width="15%">ateati1310</th>
    <th style="border: 1px solid; padding:12px;" width="15%">ateati1550</th>
   </tr>
     ';  
     foreach($buildings_data as $building)
      foreach($measurements_data as $measurement)
     {
      $output .= '
      <tr>
       <td style="border: 1px solid; padding:12px;">'.$building->name.'</td>
       <td style="border: 1px solid; padding:12px;">'.$building->address.'</td>
       <td style="border: 1px solid; padding:12px;">'.$building->locality.'</td>
       <td style="border: 1px solid; padding:12px;">'.$building->postcode.'</td>
       
       <td style="border: 1px solid; padding:12px;">'.$measurement->atiate1310.'</td>
       <td style="border: 1px solid; padding:12px;">'.$measurement->atiate1550.'</td>
       <td style="border: 1px solid; padding:12px;">'.$measurement->ateati1310.'</td>
       <td style="border: 1px solid; padding:12px;">'.$measurement->ateati1550.'</td>
      </tr>
      ';
     }
     $output .= '</table>';


  


     return $output;
    }
}
