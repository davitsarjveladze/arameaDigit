<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MeetController extends Controller
{
    public function GetView() {
        return view('meet');
    }
    public function GetDetailView() {
        return view('meetDetail');
    }
}
