<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use App\Feed;

class FeedController extends Controller
{
    public function testCreate(/*Request $request*/)
    {
        $feed = new Feed();
        $feed->name = 'test'; //$request->name;
        //$feed->privacy = false; //$request->privacy;
        //$feed->ownerID = 1;
        $feed->save();

        return back()->with('createReturn', 'Feed Created');
    }

    public function view(Feed $feed)
    {
        $posts = Post::where('feedID', $feed->id);
        return view('feed', compact('feed','posts'));
    }
}
