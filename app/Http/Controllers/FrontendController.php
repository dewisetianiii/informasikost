<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        $kos = Kos::get();
        return view ('index', compact('kos'));
    }
}
    
