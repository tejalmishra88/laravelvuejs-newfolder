<?php

namespace App\Http\Controllers;
use App\docomo;
use Illuminate\Http\Request;

class DocomoController extends Controller
{
    //
    public function getnames()   
    {  return docomo::all();   } //get
    public function savenames(Request $request)             //add
    { // return $request;
        
       $docomo= new docomo();
       $docomo->name=$request->name;
       $docomo->age=$request->age;
       $docomo->height=$request->height;
       $docomo->save();  
       return docomo::all();
      //   $todo3 = project1::create($request->all());
       // if($todo3) { return project1::all();   }
    }
}
