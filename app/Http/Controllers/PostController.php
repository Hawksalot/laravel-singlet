<?php

namespace App\Http\Controllers;

use FFMpeg\FFMpeg;
use FFMpeg\FFProbe;
use Illuminate\Http\Request;
use PhpIpfs\Ipfs;

class PostController extends Controller
{
    public function picTest()
    {
        $picLocation = '/storage/pic.jpg';
        //$imgSize = getimagesize($picLocation);
        //$width = $imgSize[0];
        //$height = $imgSize[1];

        return view('picTest', ['hash' => 'QmV7ydRDWq2jEVHxi4UM86tse2r94y1aK4DdTw2PgZj8kY']);
    }

    public function videoTest()
    {
        //Ipfs::get('QmR9mzqc5VbgiodBcJwfeZhWJbp8WRgvBmtNbxSnerXbEo', public_path().'/storage/video.mkv');
        $videoLocation = public_path().'/storage/video.mkv';
        /*$ffmpeg = \FFMpeg\FFMpeg::create();
        $video = $ffmpeg->open($videoLocation);
        //$format = new \FFMpeg\Format\Video\WebM('libvorbis', 'libvpx-vp9');
        $video->save(new \FFMpeg\Format\Video\WebM(), 'outputVideo.webm');
        */
        /*$ffprobe = FFProbe::create();
        $height = $ffprobe->streams($videoLocation)
                            ->videos()
                            ->first()
                            ->get('height');
        $width = $ffprobe->streams($videoLocation)
                            ->videos()
                            ->first()
                            ->get('width');
*/
        return view('videoTest'/*, ['height' => $height, 'width' => $width]*/);
    }
}
