<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;

class DefaultController extends Controller
{
    public function index()
    {
        
        $url=Input::get('url');
      //  return response()->json(['veri' => "İsminiz :".$isim]);


       // return view('welcome')->withIsim($isim);


        $file = file_get_contents($url);
        $json = json_decode($file);
        return response()->json(['veri' => $json]);
    }


}
