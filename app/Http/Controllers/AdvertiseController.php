<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdvertiseController extends Controller
{
    //
    public function GetAdvertiseUserPage() {
        return view('advertise');
    }
    public function getAdminAddIndex(){
        return view('admin.views.advertise');
    }
}
