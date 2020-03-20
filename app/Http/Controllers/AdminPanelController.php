<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artist;

class AdminPanelController extends Controller
{
    public function index()
    {
    	$artists = Artist::all();

    	return view('admin.pages.index');
    }
}
