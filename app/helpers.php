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
}