<?php $page = "Projects"; ?>

@extends('layout', compact($page))

@section('title')
  {{$page}}
@endsection

@section('content')
  <div class="container-fluid mt-3">
    <div class="row title-row p-3">
      <div class="col">
      </div>
      <div class="col-12 col-md-8">
        <h1>{{$page}}</h1>
        <p class="pl-2">Some work and personal projects and what I've learned from them.</p>
      </div>
      <div class="col">
      </div>
    </div>
    <div class="row p-3">
      <div class="col">
      </div>
      <div class="col-12 col-md-8">
        @foreach ($projects as $project)
          <div class="p-2">
            <h2 class="list-title"><a data-toggle="collapse" href="#Collapse-{{$project->id}}" aria-expanded="false">{{$project->name}}</a></h2>
            <div class="collapse" id="Collapse-{{$project->id}}">
              <div class="card card-block">
                <div>{!! $project->blurb !!}</div>
                <div><img class="img-fluid" src="img/projects/{{$project->imageUrl}}" alt="{{$project->name}}"></div>
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
