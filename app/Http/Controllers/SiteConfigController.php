<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiteConfigController extends Controller
{
    //
    public function GetSiteConfigsView(){
        return view('admin.views.config');
    }
    public function StoreAbout(Request $request) {
        $updateObject = [];
        if ($request->input('image_title')) {
            $updateObject['img_title'] = $request->input('image_title');
        }
        if ($request->input('aboutText')) {
            $updateObject['text'] = $request->input('aboutText');
        }
        if ($request->image) {

            $imageName = time().'.'.$request->image->extension();

            $request->image->move(public_path('images/siteConfig'), $imageName);

            /* Store $imageName name in DATABASE fromქქ HERE */
            $updateObject['img_url'] = 'images/siteConfig/' . $imageName;
        }
        if (count($updateObject) !== 0) {
            DB::table('about_page')->where('id', '=' ,1)->update($updateObject);
            return redirect()->route('aboutPage');
        }
        return  back();

    }
}
