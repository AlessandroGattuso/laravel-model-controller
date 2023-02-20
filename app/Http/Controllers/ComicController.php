<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

class ComicController extends Controller
{

    public function index(){
        $data = Comic::all();
        $images = config('comics.images');
        $menu = config('comics.menu');
        $socials = config('comics.socials');
        return view('home', compact('data','images','menu','socials'));
    }

    public function getComic($comicSlug){
        $comic = Comic::where('slug', $comicSlug)->get();
        $images = config('comics.images');
        $menu = config('comics.menu');
        $comic = $comic[0];
        $socials = config('comics.socials');
        return view('comic', compact('comic','menu','images','socials'));
    } 
}
