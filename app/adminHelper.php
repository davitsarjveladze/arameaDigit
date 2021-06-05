<?php

namespace App;
use Illuminate\Support\Facades\DB;



class adminHelper
{

    static function GetNewUsers() {
        $dt = date("Y-m-d");
        $teble = DB::table('users')->where('created_at', '>',date( "Y-m-d", strtotime( "$dt -10 day" )))->get();
        return count($teble);
    }

    static function GetTrafic() {
        return count(glob('../storage/framework/sessions' . '/*'));
        return count(Session::all());

    }
}