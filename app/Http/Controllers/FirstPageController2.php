<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class FirstPageController2 extends Controller
{
    //
    function getIndex()
    {
        return view('admin.views.dashboard');
    }

    function getProfile($id = null)
    {
        $user = DB::table('users')->where('id','=',$id)->get();
        return view('admin.views.profile.edit',compact('user'));
    }

    function getUsersTable()
    {
        $users = DB::table('users')->paginate(10);
        return view('admin.views.users',compact('users'));
    }

    function getLogin()
    {
        return view('admin.views.auth.login');
    }
    function getPosts()
    {
        $posts = db::table('posts')
            ->join('users', 'users.id', '=', 'posts.user_id')
            ->select(   'posts.title',
                'posts.id',
                'posts.user_id',
                'posts.confirmed',
                'posts.created_at',
                'users.email'
                )->paginate(10);

        return view('admin.views.posts',compact('posts'));
    }

    function getGallery()
    {

        return view('admin.views.gallery');
    }
}
