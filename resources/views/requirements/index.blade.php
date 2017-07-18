<?php $page = "About"; $color = "orange"?>

@extends('layout', compact($page))

@section('title')
  {{$page}}
@endsection

@section('content')
  <div class="container-fluid mt-3">
    <div class="row title-row-{{$color}} p-3">
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
