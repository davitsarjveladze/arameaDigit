<?php

namespace App;
use Illuminate\Support\Facades\DB;



class helpers
{
    static function getManu() {
        return 'asdasd';
    }
    static function GetCarrouselItems() {
        return DB::table('carousel')->where('start_date','<',date("Y-m-d"))
            ->where('end_date' ,'>',date('Y-m-d'))->get();
    }
    static function GetNewUsers() {
        $dt = date("Y-m-d");

        return DB::table('users')->where('created_at', '>',date( "Y-m-d", strtotime( "$dt +1 day" )));
    }
}