<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CarouselController extends Controller
{
    public function GetView() {
        $Carousels = DB::table('carousel')
            ->orderBy('id', 'desc')->paginate(10);
        return view('admin.views.carousel', compact('Carousels'));
    }

    public function StoreSlide(Request $request) {
        $insertObject = [];
        $insertObject['title']          = $request->input('title');
        $insertObject['date']           = $request->input('date');
        $insertObject['place_name']     = $request->input('place_name');
        $insertObject['reservation']    = $request->input('reservation');
        $insertObject['start_date']     = $request->input('start_date');
        $insertObject['end_date']       = $request->input('end_date');
        $insertObject['created_at']    =  date("Y-m-d H:i:s");
        $insertObject['updated_at']    =  date("Y-m-d H:i:s");

        if ($request->image) {
            echo 'asdasd';
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images/Carousel'), $imageName);
            /* Store $imageName name in DATABASE fromქქ HERE */
            $insertObject['img_url'] = 'images/Carousel/' . $imageName;
        }
        DB::table('carousel')->insert($insertObject);
        return back();
    }
}
