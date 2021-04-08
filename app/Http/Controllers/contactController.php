<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class contactController extends Controller
{
    public function getContactView() {
        return view('FrontContact');
    }
    public function StoreContact(Request $request) {
        $user = Auth::user();
        $insertObject = [
            'subject'   => $request->input('subject'),
            'email'     => $user->email,
            'text'      => $request->input('text'),
            'name'      => $user->name . ' ' . $user->lastname,
            'user_id'   => $user->id,
            'created_at'=> date('Y/m/d H:i:s'),
            'updated_at' => date('Y/m/d H:i:s')
        ];
        DB::table('contact')->insert($insertObject);
        return back();
    }
    public function getAdminContactView() {
        $contacts = DB::table('contact')->orderBy('id','desc')->paginate(10);
        return view('admin.views.contact', compact('contacts'));
    }
    public function getDetailAdminContactView($id) {
        $contact = DB::table('contact')->where('id' , '=' , $id)->get();
        return view('admin.views.contactDetail', compact('contact'));
    }
}
