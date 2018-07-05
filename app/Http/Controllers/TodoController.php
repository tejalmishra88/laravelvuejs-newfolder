<?php

namespace App\Http\Controllers;

use App\todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{   public function getnames()   
    {  return todo::all();   } //get
    public function savenames(Request $request)             //add
    {   $todo3 = todo::create($request->all());
        if($todo3) { return todo::all();   }
    }
    public function delete(Request $request)  //delete
    {  $y=$request->input('x');
       $task1= todo::where('id','=',$y)->delete();
       if($task1)    { return todo::all();   }
    }
    public function getrecordbyid(Request $request)  
    {  $y=$request->input('x');
       return todo::where('id','=',$y)->get();
    }
    public function edit(Request $request)  
    {   
      $id=$request->input('x'); 
        $record =  todo::findOrFail($id); 
         $record->name = $request->input('y');
        $record->save();  
        return todo::all();
    }

  
}
