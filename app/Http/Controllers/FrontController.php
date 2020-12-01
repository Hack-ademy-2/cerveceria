<?php

namespace App\Http\Controllers;

use App\Models\Brewery;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function breweries()
    {   
       

        $breweries = Brewery::all();
        

        return view('breweries',compact('breweries'));
    }

}
