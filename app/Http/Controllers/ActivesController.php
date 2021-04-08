<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ActivesController extends Controller
{
    //
    function GetActivePage() {
        return view('active');
    }
    //asdasd[{"id":1,"img_title":"img title","img_url":"images\/SiteImgs\/About.jpg","text":"about text"}]
    function GetAbout() {
        echo 'asdasd';
        $About = DB::table('about_page')->get();
        return view('about', compact('About'));
    }
}
