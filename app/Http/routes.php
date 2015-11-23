<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    $mp3 = base_path().'/public/mp3/kinh/thu-lang-nghiem/thich-tue-hai/59.mp3';
    $m = new \App\Modules\MP3File($mp3);
    $duration = $m->getDuration();
    return view('home',compact('duration'));
});

Route::get('/home', function () {
    return view('pages.home');
});
