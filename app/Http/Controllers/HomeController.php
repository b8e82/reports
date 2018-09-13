<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Orchestra\Parser\Xml\Facade as XmlParser;
use App\Building;

use SimpleXMLElement;
use App\Xml;
use App\Matvmeasure;

 

class HomeController extends Controller
{

	public function uploadFile()
	{
        return view('upload.uploadfile');
    }

	public function uploadFile(Request $request){
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

}