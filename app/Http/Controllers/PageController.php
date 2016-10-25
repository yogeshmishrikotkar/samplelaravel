<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PageController extends Controller
{
    
    function controllerCheck(){
          $people = ['Raju ','kaju','Batatasa','Dummy'];
      return view('pages.pass_data',  compact('people'));
    }
}
