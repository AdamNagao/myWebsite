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
    return view('landingpage');
});

Route::get('/projects', function () {
    return view('projectspage');
});

Route::get('/hangmangame', function () {
    return view('HangManGamepage');
});

Route::get('/contact', function () {
    return view('contactpage');
});





//email system routes

Route::get('/emailsystem', function () {
    return view('/EmailSystem/login');
});

Route::get('/emailsystem/inbox', function () {
    return view('/EmailSystem/inbox');
});

Route::get('/emailsystem/starred', function () {
    return view('/EmailSystem/Starred');
});

Route::get('/emailsystem/important', function () {
    return view('/EmailSystem/important');
});

Route::get('/emailsystem/sent', function () {
    return view('/EmailSystem/Sent');
});

Route::get('/emailsystem/drafts', function () {
    return view('/EmailSystem/Drafts');
});

Route::get('/emailsystem/spam', function () {
    return view('/EmailSystem/Spam');
});

Route::get('/emailsystem/trash', function () {
    return view('/EmailSystem/Trash');
});