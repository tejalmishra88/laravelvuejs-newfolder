<?php

namespace App\Http\Controllers;
use App\project1;
use Illuminate\Http\Request;

class Project1Controller extends Controller
{
    //
    public function getnames()   
    {  return project1::all();   } //get
}
