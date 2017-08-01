<?php $page = "Contact"; $color = "red"; $hex = "#D32F2F"?>

@extends('layout', compact($page))

@section('title')
  {{$page}}
@endsection

@section('content')
  <div class="container-fluid mt-3">
    <div class="row title-row title-row-{{$color}} p-3">
      <div class="col">
      </div>
      <div class="col-12 col-md-8">
        <h1>{{$page}}</h1>
        <p class="pl-2">Some ways to get in touch.</p>
      </div>
      <div class="col">
      </div>
    </div>
    <div class="row p-3">
      <div class="col">
      </div>
      <div class="col-12 col-md-8 contact-row">
        <div class="row">
          <div class="col-12 col-md-6 p-1 contact-wrapper">
            <a data-toggle="tooltip" data-placement="top" title="email me" href="mailto:mpawlak719@gmail.com"> <img class="contact-icon" src="img/icons/email.svg" alt="email"><span> mpawlak719@gmail.com</span></a>
          </div>
          <div class="col-12 col-md-6 p-1 contact-wrapper">
            <a data-toggle="tooltip" data-placement="top" title="call me" href="tel:9206454654"> <img class="contact-icon" src="img/icons/phone.svg" alt="phone"><span> (920) 645-4654</span></a>
          </div>
        </div>
        <div class="row justify-center">
          <div class="col">
          </div>
          <div class="contact-row">
            <div class="social">
              <div><a href="https://www.facebook.com/mike.pawlak.587" target="blank"> <img class="social-icon facebook svg" data-toggle="tooltip" data-placement="top" title="Facebook" src="img/icons/facebook.svg" alt="facebook"></a></div>
              <div><a href="https://twitter.com/pawlakmike" target="blank"> <img class="social-icon twitter svg" data-toggle="tooltip" data-placement="top" title="Twitter" src="img/icons/twitter.svg" alt="twitter"></a></div>
              <div><a href="https://stackoverflow.com/users/4869078/mpawlak" target="blank"> <img class="social-icon stackoverflow svg" data-toggle="tooltip" data-placement="top" title="StackOverflow" src="img/icons/stackoverflow.svg" alt="stackoverflow"></a></div>
              <div><a href="https://github.com/mikepawlak" target="blank"> <img class="social-icon github svg" data-toggle="tooltip" data-placement="top" title="Github" src="img/icons/github.svg" alt="github"></a></div>
            </div>
          </div>
          <div class="col">
          </div>
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
