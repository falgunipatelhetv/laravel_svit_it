<?php

namespace App\Http\Controllers;

//use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
//use App\Assign;
use App\Assign;

class AssignController extends Controller
{
    public function index() {
        $assignments=Assign::latest('age')->get();
        //$assignments=App\Assign::all()->get();
        //$assignments=DB::table('assings')->select('name','age')->get();
        dd($assignments);
        return view('home',compact('assignments'));
        //return view('home',['assignments'=>$assignments]);
        //return view('home',['assignments'=>$slug]);
        //return view('home')->with('assignments', $assignments);
    }
}
