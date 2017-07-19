<?php $page = "Skills"; $color = "green"; $hex = "#388E3C"?>

@extends('layout', compact($page))

@section('title')
  {{$page}}
@endsection

@section('content')
  <div class="container-fluid mt-3">
    <div class="row title-row title-row-{{$color}} p-3">
      <div class="col">
      </div>
      <div class="col-12 col-md-10">
        <h1>{{$page}}</h1>
        <p class="pl-2">Some of my professional skills and where I got them.</p>
      </div>
      <div class="col">
      </div>
    </div>
    <div class="row p-3">
      <div class="col">
      </div>
      <div class="col-12 col-md-10 content-body">
          <div class="p-2">
            <h2 class="list-title-green"><a data-toggle="collapse" href="#Collapse-FE" aria-expanded="false">Front End</a></h2>
            <div class="collapse body-collapse" id="Collapse-FE">
              <div class="card-block">
                <p>A majority of my professional experience has been in front end development. I have a particular interest in creating elegent and effortless websites and have naturally been drawn to working on user facing code.</p>
                <p>Most of my front end work has been in single page apps and therefore I have worked extensively with heavy JS frameworks, but I also enjoy the challenge of writing pages with little JS involved and am well versed in all the things CSS (and most browsers) can do.</p>
                <div class="langs">
                  <span class="lang-pill {{$color}}">HTML5</span>
                  <span class="lang-pill {{$color}}">CSS/3</span>
                  <span class="lang-pill {{$color}}">Material Design</span>
                  <span class="lang-pill {{$color}}">AngularJS</span>
                  <span class="lang-pill {{$color}}">JQuery</span>
                  <span class="lang-pill {{$color}}">Bootstrap 3/4</span>
                  <span class="lang-pill {{$color}}">Sass/SCSS</span>
                  <span class="lang-pill {{$color}}">Angular Material/MDL</span>
                  <span class="lang-pill {{$color}}">UI/UX Design</span>
                </div>
              </div>
            </div>
          </div>
          <div class="p-2">
            <h2 class="list-title-green"><a data-toggle="collapse" href="#Collapse-BE" aria-expanded="false">Back End</a></h2>
            <div class="collapse body-collapse" id="Collapse-BE">
              <div class="card-block">
                <p>As I began to take on more complex projects I found it necessary to begin to develop my server side knowledge. I briefly worked with LAMP PHP servers but moved quickly into NodeJS, where I have spent the most time. I recently came back to PHP after discovering the Laravel MVC framework, in fact, this site is written on a Laravel stack.</p>
                <div class="langs">
                  <span class="lang-pill {{$color}}">Node/Express</span>
                  <span class="lang-pill {{$color}}">Handlebars</span>
                  <span class="lang-pill {{$color}}">Jade/Pug</span>
                  <span class="lang-pill {{$color}}">Laravel</span>
                  <span class="lang-pill {{$color}}">Blade</span>
                  <span class="lang-pill {{$color}}">MongoDB</span>
                  <span class="lang-pill {{$color}}">MySql</span>
                  <span class="lang-pill {{$color}}">Security (PassportJS/JWTs)</span>
                  <span class="lang-pill {{$color}}">Website Deployment and Management</span>
                  <span class="lang-pill {{$color}}">Linux Management</span>
                </div>
              </div>
            </div>
          </div>
          <div class="p-2">
            <h2 class="list-title-green"><a data-toggle="collapse" href="#Collapse-BT" aria-expanded="false">Build Tools</a></h2>
            <div class="collapse body-collapse" id="Collapse-BT">
              <div class="card-block">
                <p>As I branched out into MVC backend I was exposed to some wonderful build tools. I've also worked with others like Yomen, Gulp, and UglifyJS but below are the build tools I'm most familiar with.</p>
                <div class="langs">
                  <span class="lang-pill {{$color}}">Git</span>
                  <span class="lang-pill {{$color}}">NPM</span>
                  <span class="lang-pill {{$color}}">Mocha</span>
                  <span class="lang-pill {{$color}}">Supertest</span>
                  <span class="lang-pill {{$color}}">Artisan</span>
                  <span class="lang-pill {{$color}}">Gimp</span>
                  <span class="lang-pill {{$color}}">Inkscape</span>
                </div>
              </div>
            </div>
          </div>
          <div class="p-2">
            <h2 class="list-title-green"><a data-toggle="collapse" href="#Collapse-PM" aria-expanded="false">Project Management</a></h2>
            <div class="collapse body-collapse" id="Collapse-PM">
              <div class="card-block">
                <p>I've also led several small teams, both technical and otherwise. Duties have included timeline development, client communications, training and mentorship, and presentation and meeting management.</p>
              </div>
            </div>
          </div>
          <p><a href="/contact">Get in touch</a>, check out some of my <a href="/projects">projects</a>, or <a href="/about">learn more about me</a>.</p>
      </div>
      <div class="col">
      </div>
    </div>
  </div>
@endsection

@section('scripts')
  @include('layouts.baseScripts')
  <script src="/js/viewFix.js"></script>
@endsection
