<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artist;

class ArtistController extends Controller
{
    public function index()
    {
    	$artists = Artist::all();

    	return view('admin.artist.index', compact('artists'));
    }

    public function create(Artist $artist = null)
    {
        $categories = \App\Category::all();

    	return view('admin.artist.create', compact('artist', 'categories'));
    }

    public function store(Request $request)
    {
        request()->validate([
            'image' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $imageName = time().'.'.request()->image->getClientOriginalExtension();

            request()->image->move(public_path('images'), $imageName);

            $artist = Artist::updateOrCreate(
            ['title' => $request->input('title')],
            ['description' => $request->input('description'),
            'category_id' => $request->input('category_id'),
            'image' => '/images/' . $imageName,
            'video' => $request->input('video'),
            'location' => $request->input('location'),
            'price' => $request->input('price')]);
        }
        else
        {
            $artist = Artist::updateOrCreate(
            ['title' => $request->input('title')],
            ['description' => $request->input('description'),
            'category_id' => $request->input('category_id'),
            'video' => $request->input('video'),
            'location' => $request->input('location'),
            'price' => $request->input('price')]);
        }

    	return redirect('/admin/artist');
    }

    public function destroy(Artist $artist)
    {
        $artist->delete();

        return redirect('/admin/artist');
    }
}
