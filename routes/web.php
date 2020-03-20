<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/catalogs', function () {
    return view('catalogs');
});

Route::get('/contacts', function () {
    return view('contacts');
});

Route::get('/instrukciya_dlya_polzovatelei_portala', function () {
    return view('instrukciya_dlya_polzovatelei_portala');
});

Route::get('/catalog/{category}', 'PagesController@category');

Route::get('/catalog/transportnye_uslugi', function () {
    return view('catalog/transportnye_uslugi');
});

Route::get('/news/2485/pochemu-reklamu-zakazyvayut-v-1showkz', function () {
    return view('/news/2485/pochemu-reklamu-zakazyvayut-v-1showkz');
});

Route::get('/news/2485/prezentaciya-novogo-hyuindai-sonata', function () {
    return view('/news/2485/prezentaciya-novogo-hyuindai-sonata');
});



Route::get('/polzovatelskoe_soglashenie', function () {
    return view('polzovatelskoe_soglashenie');
});

Route::get('/portfolio_1show_kz', function () {
    return view('portfolio_1show_kz');
});

Route::get('/reviews', function () {
    return view('reviews');
});

Route::get('/signup', function () {
    return view('signup');
});
Route::get('/spasibo_chto_interesuetes_nami', function () {
    return view('spasibo_chto_interesuetes_nami');
});
Route::get('/vakansii', function () {
    return view('vakansii');
});


// admin page

    //  artists
Route::get('/admin/artist', 'ArtistController@index');

Route::get('/admin/artist/create/{artist?}', 'ArtistController@create');

Route::post('/admin/artist', 'ArtistController@store');

Route::delete('/admin/artist/delete/{artist}', 'ArtistController@destroy');

    // pages
Route::get('/admin/pages', 'AdminPanelController@index');

Route::get('/admin/pages/homepage', 'AdminPanelController@home');

Route::get('/admin/pages/aboutus', 'AdminPanelController@about');

Route::get('/admin/pages/contact', 'AdminPanelController@contact');


    // gallery
Route::get('/admin/artist/gallery/{artist}', 'ArtistImageController@index');

Route::get('/admin/artist/gallery/{artist}/create', 'ArtistImageController@create');

Route::post('/admin/artist/gallery/{artist}', 'ArtistImageController@store');

Route::get('/admin/artist/gallery/delete/{artistImage}', 'ArtistImageController@destroy');

Route::get('/artist/{artist}', 'PagesController@artist');