<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\DB;

class AlbumsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function imageUpload()
    {
        return view('imageUpload');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function StoreGallery(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time().'.'.$request->image->extension();

        $request->image->move(public_path('images/Gallery'), $imageName);

        /*Store $imageName name in DATABASE from HERE
            NON - now or not
         */
        $InsertData = [
            'img_url'       => 'images/Gallery'. $imageName,
            'tittle'        => $request->input('title'),
            'category'      => $request->input('category'),
            'status'        => $request->input('NON') ? 1 : 0,
            'created_at'    => date('Y-m-d h:i'),
            'updated_at'    => date('Y-m-d h:i'),
        ];
        DB::table('gallery')->insert($InsertData);
        return redirect()->route('adm.gallery');

        return back()
            ->with('success', 'You have successfully upload image.')
            ->with('image', $imageName);
    }
    function getGallery()
    {
        $Gallery = DB::table('gallery')
            ->leftJoin('gallery_photo', 'gallery.id', '=', 'gallery_photo.gallery_id')
            ->groupBy('gallery_photo.id','gallery.id','gallery.tittle','gallery.img_url','gallery.status'
            ,'gallery.created_at','gallery.updated_at','category'
            )
            ->select('gallery.*',DB::raw('count(gallery_photo.id) as count'))->paginate(3);
        return view('admin.views.gallery', compact('Gallery'));
    }
    function GetGalleryDetail($id)
    {
        $photos = DB::table('gallery_photo')->select("*")
            ->where('gallery_id', '=', $id)
            ->orderBy('id', 'desc')->paginate(10);
        return view('admin.views.galleryDetail', compact('photos'));
    }
    function GetUserGallery()
    {
        $Gallery = DB::table('gallery')->select("*")
            ->where('status', '=', 1)
            ->orderBy('id', 'desc')->paginate(3);
        return view('gallery', compact('Gallery'));
    }
    function GetUserGalleryPhoto($id)
    {
        $photos = DB::table('gallery_photo')->select("*")
            ->where('gallery_id', '=', $id)
            ->orderBy('id', 'desc')->paginate(10);
        return view('galleryShow',compact('photos'));
    }
    function StorePhotoInGallery(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time().'.'.$request->image->extension();

        $request->image->move(public_path('images/Gallery/GalleryPhoto/'), $imageName);

        /*Store $imageName name in DATABASE from HERE
            NON - now or not
         */
        $InsertData = [
            'img_url'       => 'images/Gallery/GalleryPhoto/'. $imageName,
            'author'        => $request->input('title'),
            'gallery_id'      => $request->input('gallery_id'),
            'created_at'    => date('Y-m-d h:i'),
            'updated_at'    => date('Y-m-d h:i'),
        ];
        DB::table('gallery_photo')->insert($InsertData);
        return redirect()->back();
    }
    function DeletePhoto(Request $request)
    {
        DB::table('gallery_photo')->where('id', '=', $request->input('id'))->delete();
        return redirect()->back();
    }
}
