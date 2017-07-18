<?php $page = "Skills"; $color = "green"?>

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
        <p class="pl-2">Some of my professional skills and where I got them.</p>
      </div>
      <div class="col">
      </div>
    </div>
    <div class="row p-3">
      <div class="col">
      </div>
      <div class="col-12 col-md-10 content-body">
        @foreach ($langs as $lang)
          <div class="p-2">
            <h2 class="list-title-green"><a data-toggle="collapse" href="#Collapse-{{$lang->id}}" aria-expanded="false">{{$lang->name}}</a></h2>
            <div class="collapse" id="Collapse-{{$lang->id}}">
              <div class="card card-block">
                <p>{!! $lang->blurb !!}</p>
              </div>
            </div>
          </div>
        @endforeach
      </div>
      <div class="col">
      </div>
    </div>
  </div>
@endsection

@section('scripts')
  @include('layouts.baseScripts')
@endsection
