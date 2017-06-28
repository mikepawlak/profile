<?php


Route::get('/', function () {
    return view('home');
});

Route::get('/languages', function () {
    $langs = App\Language::all();

    return view('languages.index', compact('langs'));
});

Route::get('/projects', function () {
    $projects = App\Project::all();

    return view('projects.index', compact('projects'));
});

Route::get('/requirements', function () {
    $reqs = App\Requirement::all();

    return view('requirements.index', compact('reqs'));
});

Route::get('/contact', function () {
    return view('contact');
});
