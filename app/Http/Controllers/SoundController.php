<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SoundController extends Controller
{
    //
    public function GetIndex()
    {
        return view('sound');
    }
    public function GetAudios($album)
    {
        return view('soundDetail');
    }
}
