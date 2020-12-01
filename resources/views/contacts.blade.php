@extends('layouts.app')
@section('content')
<style>
  .masthead{
        background-image: linear-gradient(90deg, rgba(220, 178, 78, 0.1) 0px, rgba(220, 178, 78, 0.1) 100%), url("/img/contactview.jpg");
    }
</style>
<header class="masthead d-flex p-2">
    <div class="container text-center my-auto p-4">
      <h1 class="mb-1">“Be well, do good work, and keep in touch.” </h1>
      <h3 class="mb-5">
        <em>Meet us with the craft </em>
      </h3>
      <a class="btn btn-primary btn-xl js-scroll-trigger py-0" href="#about">Stay in touch</a>
    </div>
    <div class="overlay"></div>
  </header>

@endsection