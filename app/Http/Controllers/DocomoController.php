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
    public function delete(Request $request)  //delete
    {  $y=$request->input('x');
       $task1= docomo::where('id','=',$y)->delete();
       if($task1)    { return docomo::all();   
    }
     }
     public function getrecordbyid(Request $request)  
    {  $y=$request->input('x');
   return docomo::where('id','=',$y)->get();
    }
        public function edit(Request $request)  
        {   
             $id=$request->input('x'); 
            $record =  docomo::findOrFail($id); 
             $record->name = $request->input('y');
             $record->age = $request->input('z');
             $record->height = $request->input('a');
                $record->save();  
                return docomo::all();
              
                
               
           
        }   
}
