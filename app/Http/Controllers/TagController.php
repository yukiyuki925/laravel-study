<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TagController extends Controller
{
    public function tagIndex(Request $request)
    {
        return view('tag');
    }
}
