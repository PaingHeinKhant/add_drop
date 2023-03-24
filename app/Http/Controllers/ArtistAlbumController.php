<?php

namespace App\Http\Controllers;

use App\Services\ArtistAlbumService;
use Illuminate\Http\Request;

class ArtistAlbumController extends Controller
{
    public function __construct(
      private  ArtistAlbumService $albumService
    )
    {

    }

    public function showAllAlbum()
    {
        return $this->albumService->getAllAlbum();
    }

    public function createAlbum()
    {
        return 'iiiiiii';
    }
}
