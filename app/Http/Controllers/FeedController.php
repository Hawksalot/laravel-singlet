<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use App\Feed;

class FeedController extends Controller
{
    public function create(Request $request)
    {
        $feed = new Feed();
        $feed->name = $request->name;
        if($request->privacy == '1')
        {
            $feed->privacy = true;
        }
        elseif($request->privacy == '0')
        {
            $feed->privacy = false;
        }
        else
        {
            return 'This is a temporary error statement: Not a recognized feed type.';
        }
        //$feed->ownerID = $user->id;
        $feed->save();

        return self::view($feed);//back()->with('createReturn', 'Feed Created');
    }

    public function view(Feed $feed)
    {
        $posts = Post::where('feedID', $feed->id);
        return view('feed', compact('feed','posts'));
    }
}
