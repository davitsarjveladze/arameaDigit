<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class AtiveService extends Controller
{
    //
    public function User(Request $request, User $user)
    {
        return '$user';
    }
}
