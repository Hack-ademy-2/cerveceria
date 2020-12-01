@extends('layouts.app')
@section('content')
<style>
  .masthead{
        background-image: linear-gradient(90deg, rgba(220, 178, 78, 0.1) 0px, rgba(220, 178, 78, 0.1) 100%), url("/img/teamview.jpg");
    }
</style>
<header class="masthead d-flex">
    <div class="container text-center my-auto">
      <h1 class="mb-1">TEAM EFFORT </h1>
      <h3 class="mb-5">
        <em>"Talent wins games, but teamwork and intelligence win championships." </em>
      </h3>
      <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Find Out More</a>
    </div>
    <div class="overlay"></div>
  </header>

@endsection