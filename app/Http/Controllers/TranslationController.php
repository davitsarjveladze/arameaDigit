<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TranslationController extends Controller
{
    public function index($id)
    {
        return view('translation.index', ['id' => $id]);
    }
}
