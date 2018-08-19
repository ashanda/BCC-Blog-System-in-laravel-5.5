<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OBController extends Controller
{
     public function index()
    {
        return view('OB');
                
                
    }

    
    //public function gallery()
   // {
       // return view('pages.gallery')
         //       ->with('galleries', Gallery::all());
   // }

     




    public function tag($id)
    {
        $tag = Tag::find($id);

        return view('tag')->with('tag', $tag)
                          ->with('title', $tag->tag)
                          ->with('settings', Setting::first())
                          ->with('categories', Category::take(5)->get());
    }

    

}
