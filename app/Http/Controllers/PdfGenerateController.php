<?php

namespace App\Http\Controllers;

use App\PdfGenerate;
use Illuminate\Http\Request;
use App\Measurement;
use PDF;
use DB;
use App\Building;
use App\Floor;
use App\Fraction;
use App\Installer;
use App\Technician;
use App\Owner;
use App\Designer;

class PdfGenerateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function pdfview(Request $request)
    {
        //dd($building);
        //$floors = Floor::where('id',$id)->first();
        //dd($floors);
        //$buildings = Building::All();
        //dd($buildings->id)
        $measurements = Measurement::All();
        //$installer = Installer::find($building->installer_id);
        //dd($installer);
        //$technician = Technician::find($building->technician_id);
        //$owner = Owner::find($building->owner_id);
        //$designer = Owner::find($building->designer_id);

        //return view('pdfview',compact('floors', 'buildings', 'building', 'measurements', 'installer', 'technician', 'owner', 'designer'));

        //view()->share('floors',$floors, 'buildings',$buildings, 'building',$building, 'measurements',$measurements, 'installer',$installer, 'technician',$technician, 'owner',$owner, 'designer',$designer);

view()->share('measurements',$measurements);

        //$buildings = DB::table("measurements")->get();
        //view()->share('measurements',$measurements);

       

        if($request->has('download')){
            // Set extra option
            PDF::setOptions(['dpi' => 150, 'defaultFont' => 'sans-serif']);
            // pass view file
            $pdf = PDF::loadView('pdfview');
            // download pdf
            return $pdf->download('pdfview.pdf');
        }
        return view('pdfview');


    }
}
