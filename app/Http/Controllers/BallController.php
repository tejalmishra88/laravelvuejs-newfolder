<?php

namespace App\Http\Controllers;
use App\ball;
use Illuminate\Http\Request;

class BallController extends Controller
{
    //
    public function getnames()   
    {  return ball::all();   } //get
    public function savenames(Request $request)             //add
    {   $todo3 = ball::create($request->all());
        if($todo3) { return ball::all();   }
    }
}
