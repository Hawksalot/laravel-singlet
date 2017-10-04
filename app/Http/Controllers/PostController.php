<?php

namespace App\Http\Controllers;

use App\Feed;
use App\Image;
use App\Post;
use App\Text;
use App\Video;
use Illuminate\Http\Request;
use PhpIpfs\Ipfs;

class PostController extends Controller
{
    public function create(Feed $feed, Request $request)
    {
//        if($request->type !== 'image' || 'text' || 'video')
//        {
//            return 'This is a temporary error statement: that post has no recognizable type';
//        }
        $post = new Post();
        $post->type = $request->type;
        $post->feedID = $feed->id;
        //$post->ownerID = $user->id;
        $post->save();

        if($request->type === "image")
        {
            $image = new Image();
            $image->hash = $request->hash;
            $image->postID = $post->id;
            $image->save();
        }
        elseif($request->type === "text")
        {
            $text = new Text();
            $text->hash = $request->hash;
            $text->postID = $post->id;
            $text->save();
        }
        elseif($request->type === "video")
        {
            $video = new Video();
            $video->hash = $request->hash;
            $video->postID = $post->id;
            $video->save();
        }

        return self::view($post);
    }

    public function view(Post $post)
    {
        if($post->type === 'image')
        {
            $content = Image::where('postID', $post->id)->first();
        }
        elseif($post->type === 'text')
        {
            $content = Text::where('postID', $post->id)->first();
        }
        elseif($post->type === 'video')
        {
            $content = Video::where('postID', $post->id)->first();
        }
        else
        {
           return 'This is a temporary error statement: that post has no recognizable type.';
        }

        return view('post', compact('post', 'content'));
    }
}