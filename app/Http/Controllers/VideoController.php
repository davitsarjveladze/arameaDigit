<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\DB;

class VideoController extends Controller
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
    public function storeVideos(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images/VideoPre'), $imageName);

        $file = $request->file('file');
        $filename = time() . '.' . $file->extension();
        $file->move(public_path('videos'), $filename);

        $InsertData = [
            'video_url'     => 'videos/'. $filename,
            'img_url'       => 'images/VideoPre/'. $imageName,
            'tittle'        => $request->input('title'),
            'gallery_name'  => $request->input('galleryName'),
            'category'      => $request->input('category'),
            'status'        => $request->input('NON') ? 1 : 0,
            'created_at'    => date('Y-m-d h:i'),
            'updated_at'    => date('Y-m-d h:i'),
        ];
        DB::table('videos3')->insert($InsertData);
        return redirect()->route('adm.videos');


    }
    function getVideos()
    {
        $Video = DB::table('videos3')
            ->select('*')->paginate(3);
        return view('admin.views.videos', compact('Video'));
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
    function DeleteVideo(Request $request)
    {
        DB::table('videos3')->where('id', '=', $request->input('id'))->delete();
        return redirect()->back();
    }
    function FrontVideos(Request $request) {
        return view('video');
    }
    function CurrentVideoShow(Request $request) {
        return view('currentvideo');
    }
}
