<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActivesController extends Controller
{
    //
    function GetActivePage() {
        return view('active');
    }
    function GetAbout() {
        return view('about');
    }
}
