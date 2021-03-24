<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $lastPosts = db::table('posts')
            ->where('posts.confirmed','=',1)
            ->join('users', 'users.id', '=', 'posts.user_id')
            ->select(   'posts.title',
                'posts.id',
                'posts.img_url',
                'posts.user_id',
                'posts.created_at',
                'users.name',
                'users.user_img')->orderBy('id', 'desc')
            ->take(6)->get();
        return view('home2',compact('lastPosts'));
    }
}
