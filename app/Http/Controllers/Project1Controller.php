<?php

namespace App\Http\Controllers;
use App\project1;
use Illuminate\Http\Request;

class Project1Controller extends Controller
{
    //
    public function getnames()   
    {  return project1::all();   } //get
    public function savenames(Request $request)             //add
    { // return $request;
        
       $project1= new project1();
       $project1->name=$request->name;
       $project1->age=$request->age;
       $project1->save();  
       return project1::all();
      //   $todo3 = project1::create($request->all());
       // if($todo3) { return project1::all();   }
    }
    public function delete(Request $request)  //delete
    {  $y=$request->input('x');
       $task1= todo::where('id','=',$y)->delete();
       if($task1)    { return todo::all();   
    }

}
