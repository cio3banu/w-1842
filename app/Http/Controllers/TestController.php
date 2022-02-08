<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function about() { 
        $grupe=['W-1841','W-1842','P-1841','P-1842','P-1843','R-1841'];
        $specialitate="Web";
        return view('about',['grupe'=>$grupe, 'specialitate'=>$specialitate]);
    }
    public function home() { 
        return view('welcome');
    }
    public function contacts() { 
        return view('contacte');
    }
    public function projects() { 
        return view('project');
    }
    public function ceva() {
        return 'Hello, World!';
    }
    public function showuserid($id) {
        return 'User '.$id;
    }
}
