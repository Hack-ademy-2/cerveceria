@extends('layouts.app')
@section('content')
<style>
  .masthead{
        background-image: linear-gradient(90deg, rgba(220, 178, 78, 0.1) 0px, rgba(220, 178, 78, 0.1) 100%), url("/img/aboutusview.jpg");
    }
</style>
<header class="masthead d-flex">
    <div class="container text-center my-auto">
      <h1 class="mb-1">  </h1>
      <h3 class="mb-5">
        <em> </em>
      </h3>
      
    </div>
    <div class="overlay"></div>
  </header>
   <!-- About -->
  <section class="content-section bg-light" id="about">
    <div class="container text-center">
      <div class="row">
        <div class="col-lg-10 mx-auto">
          <h2>Finding the best brewery that suits you is our duty!</h2>
          <p class="lead mb-5">A little story made between beers lovers
            <a href="https://unsplash.com/">Aulabeer</a>!</p>
          <a class="btn btn-dark btn-xl js-scroll-trigger" href="#services">What We Offer</a>
        </div>
      </div>
    </div>
  </section>
    

@endsection