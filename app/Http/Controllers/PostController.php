<?php

namespace App\Http\Controllers;

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

        return view('picTest', ['imgURL' => $picLocation]);
    }

    public function videoTest()
    {
        //Ipfs::get('QmR9mzqc5VbgiodBcJwfeZhWJbp8WRgvBmtNbxSnerXbEo', public_path().'/storage/video.mkv');
        $videoLocation = public_path().'/storage/video.mkv';
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
