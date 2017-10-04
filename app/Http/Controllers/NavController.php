<?php

namespace App\Http\Controllers;

use App\Feed;
use Illuminate\Http\Request;

class NavController extends Controller
{
    public function landing()
    {
        $feeds = Feed::all();
        return view('landing', compact('feeds'));
    }
}
