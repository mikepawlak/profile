<?php $page = "Requirements"; ?>

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
        <p class="pl-2">Some of your other job requirements and how my experience shows that I can meet them.</p>
      </div>
      <div class="col">
      </div>
    </div>
    <div class="row p-3">
      <div class="col">
      </div>
      <div class="col-12 col-md-8">
        @foreach ($reqs as $req)
          <div class="p-2">
            <h2 class="list-title req-title"><a data-toggle="collapse" href="#Collapse-{{$req->id}}" aria-expanded="false">{{$req->name}}</a></h2>
            <div class="collapse" id="Collapse-{{$req->id}}">
              <div class="card card-block">
                <p>{!! $req->body !!}</p>
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
