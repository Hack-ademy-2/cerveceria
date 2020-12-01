<?php

namespace App\Http\Controllers;

use App\Models\Brewery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\BreweriesValidation;

class BreweriesController extends Controller
{
    public function notification(BreweriesValidation $request)
    {   
        $title = $request->input('title');
        $description = $request->input('description');
        
        

        $img = $request->file('img')->store('public/img');
       

        //DB::table('breweries')->insert(
           // ['title' => $title,
           //  'description' => $description,
           //  'img'=> '/img/worstplace.png'
           // ]
        //);

         //return redirect()->route('home');

         $brewerynotify = new Brewery;
         $brewerynotify->title = $title;
         $brewerynotify->description = $description;
         $brewerynotify->img = $img;
         $brewerynotify->save();
         
         return redirect()->route('thankyou');
    }
    public function thankyou()
    {
         return view('thankyou');
    }
}
