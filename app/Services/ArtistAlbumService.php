<?php

declare(strict_types=1);

namespace App\Services;

use App\Models\Artistalbum;

class ArtistAlbumService
{
    public function getAllAlbum()
    {
        $albums = Artistalbum::all();
        return view('Artistalbum.index',compact('albums')) ;
    }
}
