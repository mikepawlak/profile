<?php $page = "About"; $color = "orange"; $hex = "#F57C00"?>

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
        <p class="pl-2">Some more about me.</p>
      </div>
      <div class="col">
      </div>
    </div>
    <div class="row p-3">
      <div class="col">
      </div>
      <div class="col-12 col-md-10 content-body">
          <div class="p-2">
            <h4>Mike Pawlak - Web Developer</h4>
            <img class="about-me-photo pull-right" src="img/me.jpg" alt="me" />
            <p>I am a web developer in the Appleton area with about three years of professional experience that works primarily with Javascript - both front end and back end. I've also worked with php and have dabbled in several languages including Ruby, Python, and R. I also have experience in design, including creating mockups, style guides, and image and icon creation and experience in leadership roles, including mentorship, training, and project management. </p>
            <p>I am currently looking for work and would love to hear from you! <a href="/contact">Get in touch</a>, or check out some of my <a href="/projects">projects</a> or more about my <a href="/skills">technical skills</a>.</p>
          </div>
      </div>
      <div class="col">
      </div>
    </div>
  </div>
@endsection

@section('scripts')
  @include('layouts.baseScripts')
@endsection
