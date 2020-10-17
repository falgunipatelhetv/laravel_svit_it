<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Firstassign;

class FirstassignController extends Controller
{
    //
    public function index() {
        $firstassign=Firstassign::latest('age')->get();
        //$assignments=App\Assign::all()->get();
        //$assignments=DB::table('assings')->select('name','age')->get();
        //dd($firstassign);
        return view('home',compact('firstassign'));
    }
}
