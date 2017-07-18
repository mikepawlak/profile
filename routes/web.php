<?php


Route::get('/', function () {
    return view('home');
});

Route::get('/skills', function () {
    //this was originially "languages", and I haven't renamed the backend yet
    $langs = App\Language::all();

    return view('languages.index', compact('langs'));
});

Route::get('/projects', function () {
    $projects = App\Project::all();

    return view('projects.index', compact('projects'));
});

Route::get('/about', function () {
  //this was originially "requirements", and I haven't renamed the backend yet
    $reqs = App\Requirement::all();

    return view('requirements.index', compact('reqs'));
});

Route::get('/contact', function () {
    return view('contact');
});
