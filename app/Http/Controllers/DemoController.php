<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function index()
    {
        //return 'index';
        $process = array("place 1","place 2","place 3","place 4","place 5","place 6");
    	return view('index',compact('process'));
        
    }
    public function about()
    {
        return view('about');
    }
    public function contact()
    {
        return view('contact');
    }
    public function menu()
    {
        return view('menu');
    }
}
