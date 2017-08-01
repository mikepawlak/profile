<?php $page = "Projects"; $color =  "purple"; $hex = "#512DA8"?>

@extends('layout', compact($page))

@section('title')
  {{$page}}
@endsection

@section('content')
  <div class="container-fluid mt-3">
    <div class="row title-row title-row-purple p-3">
      <div class="col">
      </div>
      <div class="col-12 col-md-10">
        <h1>{{$page}}</h1>
        <p class="pl-2">Some work and personal projects and what I've learned from them.</p>
      </div>
      <div class="col">
      </div>
    </div>
    <div class="row p-3">
      <div class="col">
      </div>
      <div class="col-12 col-md-10 content-body">
        <div class="p-2">
          <h2 class="list-title-purple"><a data-toggle="collapse" href="#Collapse-2" aria-expanded="false">Data On Politics</a></h2>
          <div class="collapse body-collapse" id="Collapse-2">
            <div class="card-block">
              <div><p><a href="http://www.dataonpolitics.com" target="blank">Data On Politics</a> is a personal project I have been developing for a few months to better understand some areas I sorely lack experience in: digital marketing and SEO. I use my primary stack, MEAN, with <b>HandlebarsJS</b> templating. All tasks, including <b>deployment and maintenance</b>, <b>social media marketing</b>, <b>copywriting</b>, <b>design and development</b>, and <b>image creation</b> have been done by myself in my spare time.</p><p>Some current projects for this site include a Reddit bot and a tool for monitoring state legislatures.</div>
              <div id="carouselIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox" style="height: 500px">
                  <div class="carousel-item active">
                    <img style="object-fit: cover; overflow: hidden" class="img-fluid project-banner-image" src="img/projects/dop/dop_1.png" alt="dop 1">
                  </div>
                  <div class="carousel-item">
                    <img style="object-fit: cover; overflow: hidden;" class="img-fluid project-banner-image" src="img/projects/dop/dop_2.png" alt="dop 2">
                  </div>
                  <div class="carousel-item">
                    <img style="object-fit: cover; overflow: hidden;" class="img-fluid project-banner-image" src="img/projects/dop/dop_3.png" alt="dop 3">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="p-2">
          <h2 class="list-title-purple"><a data-toggle="collapse" href="#Collapse-3" aria-expanded="false">SalesBro and Tier III Resources</a></h2>
          <div class="collapse body-collapse" id="Collapse-3">
            <div class="card-block">
              <p>While at Time Warner Cable, I developed "SalesBro", a simple web application to automate some order entry tasks for my department. I hosted it on a local sharepoint site where it quickly gained usage across Wisconsin. The tool was a great success and was quickly given to all customer facing departments across the TWC footprint. We then migrated to a MEAN-stack Ubuntu server. SalesBro served up to 10,000 users a day.</p>

<p>I then worked full-time on this and one other tool, "Tier III Resources", a knowledge management and training site for Tier III with two other developers, providing <b>maintenance</b>, <b>user training</b> (in-person, remote, and recorded), and further development. Both tools are still in use today.</p>

<p>In this role my duties included both <b>Front End</b> and <b>Back End</b> development, <b>design and development</b>, <b>image creation</b>, <b>user profiling</b>, and <b>usage analytics</b>.</p>
              <div id="carouselIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselIndicators" data-slide-to="2"></li>
                  <li data-target="#carouselIndicators" data-slide-to="3"></li>
                </ol>
                <div class="carousel-inner" role="listbox" style="height: 500px">
                  <div class="carousel-item active">
                    <img style="object-fit: cover; overflow: hidden" class="img-fluid project-banner-image" src="img/projects/sb/sb0.png" alt="dop 1">
                  </div>
                  <div class="carousel-item">
                    <img style="object-fit: cover; overflow: hidden;" class="img-fluid project-banner-image" src="img/projects/sb/sb.png" alt="dop 2">
                  </div>
                  <div class="carousel-item">
                    <img style="object-fit: cover; overflow: hidden;" class="img-fluid project-banner-image" src="img/projects/sb/sb1.png" alt="dop 3">
                  </div>
                  <div class="carousel-item">
                    <img style="object-fit: cover; overflow: hidden;" class="img-fluid project-banner-image" src="img/projects/sb/sb2.png" alt="dop 3">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="p-2">
           <h2 class="list-title-purple"><a data-toggle="collapse" href="#Collapse-1" aria-expanded="false">This Portfolio Site</a></h2>
           <div class="collapse body-collapse" id="Collapse-1">
             <div class="card-block">
               <div><p>This website is my first foray into Laravel programming, I have to say I am impressed with the robust set of MVC tools it has to offer. This website is constructed purposefully with little JS, leveraging Blade, Eloquent, and MySQL to allow me to better understand it and its workflows.</p></div>
               <div><img class="img-fluid" style="box-shadow: 1px 1px 2px #999" src="img/projects//portfolio.png" alt="This Portfolio Site"></div>
             </div>
           </div>
         </div>
         <p><a href="/contact">Get in touch</a>, check out some of my <a href="/skills">skills</a>, or <a href="/about">learn more about me</a>.</p>
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
