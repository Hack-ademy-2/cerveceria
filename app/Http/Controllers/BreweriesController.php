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
         $brewerynotify->img = '/img/worstplace.png';
         $brewerynotify->save();
         
         return redirect()->route('thankyou');
    }
    public function thankyou()
    {
         return view('thankyou');
    }
        
    protected function getredirect()
    {    
        $url = $this->redirect->getredirect();
        return $url->previous();
    }


}
