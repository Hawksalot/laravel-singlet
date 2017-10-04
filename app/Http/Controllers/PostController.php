<?php

namespace App\Http\Controllers;

use App\Feed;
use App\Image;
use App\Post;
use Faker\Provider\Text;
use FFMpeg\Media\Video;
use Illuminate\Http\Request;
use PhpIpfs\Ipfs;

class PostController extends Controller
{

    public function testCreate(Feed $feed/*Request $request*/)
    {
        $post = new Post();
        $post->type = 'image';// $request->type
        $post->feedID = $feed->id;
        //$post->ownerID = $user->id;
        $post->save();

        // this will be an if/else for $post->type
        $image = new Image();
        $image->hash = 'QmV7ydRDWq2jEVHxi4UM86tse2r94y1aK4DdTw2PgZj8kY';// $request->hash
        $image->postID = $post->id;
        $image->save();
        $post->imageID = $image->id;
        $post->save();

        return back()->with('createReturn', 'Post Created');
    }

    public function view(Post $post)
    {
        if($post->type === 'image')
        {
            $content = Image::where('postID', $post->id);
        }
        elseif($post->type === 'text')
        {
            $content = Text::where('postID', $post->id);
        }
        elseif($post->type === 'video')
        {
            $content = Video::where('postID', $post->id);
        }
        else
        {
           return 'This is a temporary error statement: that post has no recognizable type.';
        }

        return view('post', compact('post', 'content'));
    }

    public function picTest()
    {
        return view('picTest', ['hash' => 'QmV7ydRDWq2jEVHxi4UM86tse2r94y1aK4DdTw2PgZj8kY']);
    }

    public function videoTest()
    {
        return view('videoTest');
    }
}
