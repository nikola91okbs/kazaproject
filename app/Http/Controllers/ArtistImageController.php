<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artist;
use App\ArtistImage;

class ArtistImageController extends Controller
{
    public function index(Artist $artist = null)
    {
        $gallery = ArtistImage::where('artist_id', $artist->id)->get();

        return view('admin.artist.gallery.index', compact('gallery', 'artist'));
    }

    public function create(Artist $artist)
    {
    	return view('admin.artist.gallery.create', compact('artist'));
    }

    public function store(Artist $artist, Request $request)
    {
    	request()->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time().'.'.request()->image->getClientOriginalExtension();

        request()->image->move(public_path('images'), $imageName);

        $image = ArtistImage::create([
        	'image' => '/images/' . $imageName,
        	'artist_id' => $artist->id]);

        return redirect('/admin/artist/gallery/'.$artist->id);
        // back()
        //     ->with('success','You have successfully upload image.')
        //     ->with('image',$imageName);
    }

    public function destroy(ArtistImage $artistImage)
    {
    	$artist_id = $artistImage->artist_id;
    	$artistImage->delete();

    	return redirect('/admin/artist/gallery/'.$artist_id);
    }
}
