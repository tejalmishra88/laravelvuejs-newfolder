<?php

namespace App\Http\Controllers;
use App\docomo;
use Illuminate\Http\Request;

class DocomoController extends Controller
{
    //
    public function getnames()   
    {  return docomo::all();   } //get
}
