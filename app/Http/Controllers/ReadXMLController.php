<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Orchestra\Parser\Xml\Facade as XmlParser;
use Storage;
use SimpleXMLElement;



class ReadXMLController extends Controller
{

	public function readxml()
    {
    	$xml = XmlParser::extract(Storage::disk('public')->get("upload/file1535560424.xml"));
    	$xmlContent = $xml->getContent();

        return view('readxml',compact('xmlContent'));
    }

}

 