<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Artist;
use App\ArtistImage;

class PagesController extends Controller
{
    public function index()
    {
    	return view('index');
    }

    public function category($category)
    {
    	$category = Category::where('name', $category)->first();
    	if ($category == null) return abort(404);

    	$artists = Artist::where('category_id', $category->id)->get();

    	$artists->map(function ($a)
    	{
	    	return $a->images = ArtistImage::where('artist_id', $a->id)->orderBy('id', 'ASC')->limit(4)->get();
    	});

    	return view('catalog.index', compact('artists'));
    }

    public function artist(Artist $artist = null)
    {
    	$artist->images = ArtistImage::where('artist_id', $artist->id)->orderBy('id', 'ASC')->get();
    	
    	return view('artist', compact('artist'));
    }
}
