<?php

namespace App\Http\Controllers;

use App\Xml;
use App\Matvmeasure;
use Illuminate\Http\Request;
use Orchestra\Parser\Xml\Facade as XmlParser;
use Storage;
use SimpleXMLElement;
use App\Building;



class XMLController extends Controller
{
	
    public function index()
    {
    	$matvmeasures = Matvmeasure::All();

        return view('xml.index',compact('matvmeasures'));
    }

	public function converter()
    {
    	$buildings = Building::All();

    	$xml = XmlParser::extract(Storage::disk('public')->get("upload/tmpfile.xml"));
    	$xmlContent = $xml->getContent();

        return view('xml.converter',compact('xmlContent', 'buildings'));
    }

    public function upload()
	{
        return view('xml.upload');
    }

    public function uploadFileStore(Request $request){
        $request->validate([
            'fileToUpload' => 'required|file|max:4096',
        ]);
        
        $fileName = "tmpfile".'.'.request()->fileToUpload->getClientOriginalExtension();
        $request->fileToUpload->storeAs('upload',$fileName);
      
 		$buildings = Building::All();

        $xml = XmlParser::extract(Storage::disk('public')->get("upload/tmpfile.xml"));
        $xmlContent = $xml->getContent();

       
       return view('xml.converter',compact('xmlContent', 'buildings'))
            ->with('success','You have successfully upload file.');
    }

    public function store(Request $request)
    {
        	foreach ($request->tomada as $key => $tomadavalue) {
        		
					$Matvmeasures = new Matvmeasure();
					$Matvmeasures->building_id = $request->building_id;
					$Matvmeasures->tomada = $tomadavalue;
					$Matvmeasures->freq = $request->freq[$key];
					$Matvmeasures->pwr = $request->pwr[$key];
					$Matvmeasures->mer = $request->mer[$key];
					$Matvmeasures->vber = $request->vber[$key];
					$Matvmeasures->save();
        		}			
        return redirect()->route('xml.index')
                        ->with('success','asdf created successfully.');
    }

}

 