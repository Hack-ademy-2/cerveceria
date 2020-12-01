@extends('layouts.app')
@section('content')
<style>
  .masthead{
        background-image: linear-gradient(90deg, rgba(220, 178, 78, 0.1) 0px, rgba(220, 178, 78, 0.1) 100%), url("/img/breweryview.jpg");
    }
</style>
<header class="masthead d-flex">
    <div class="container text-center my-auto">
      <h1 class="mb-1">    </h1>
      <h3 class="mb-5">
        <em>   </em>
      </h3>
      
    </div>
    <div class="overlay"></div>
  </header>
 <!-- Portfolio -->
 <section class="content-section" id="portfolio">
    <div class="container">
      <div class="content-section-heading text-center">
        <h3 class="text-secondary mb-0">Portfolio</h3>
        <h2 class="mb-5">Recent Projects</h2>
      </div>
      <div class="row no-gutters">
          @foreach($breweries as $brewery) 
        <div class="col-lg-6">
          <a class="portfolio-item" href="#!">
            <div class="caption">
              <div class="caption-content">
                <div class="h2">{{$brewery->title}}</div>
                <p class="mb-0">{{$brewery->description}}</p>
              </div>
            </div>
            <img class="img-fluid" src="{{$brewery->img}}" alt="">
          </a>
        </div>
         @endforeach
      </div>
    </div>
  </section>
@endsection