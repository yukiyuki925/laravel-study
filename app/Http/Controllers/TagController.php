<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag;

class TagController extends Controller
{
    public function tagIndex(Request $request)
    {
        $tags = Tag::all();
        return view('tag', compact('tags'));
    }
}
