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
    public function delete(Request $request)  //delete
    {  $y=$request->input('x');
       $task1= ball::where('id','=',$y)->delete();
       if($task1)    { return ball::all();   }
    }
    public function getrecordbyid(Request $request)  
    {  $y=$request->input('x');
       return ball::where('id','=',$y)->get();
    }
    public function edit(Request $request)  
    {   
      $id=$request->input('x'); 
        $record =  ball::findOrFail($id); 
         $record->name = $request->input('y');
        $record->save();  
        return ball::all();
    }
}
