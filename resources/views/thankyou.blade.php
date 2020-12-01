@extends('layouts.app')
@section('content')
<style>
    .masthead {
        background-image: linear-gradient(90deg, rgba(220, 178, 78, 0.1) 0px, rgba(220, 178, 78, 0.1) 100%), url("/img/BackgroundImg.jpg");
    }
    .formmasthead {
        background-image: linear-gradient(90deg, rgba(220, 178, 78, 0.1) 0px, rgba(220, 178, 78, 0.1) 100%), url("/img/FormView.jpg");
    }
    .bg-trasparency{ background: linear-gradient(90deg, rgba(225, 225, 225, 0.6) 0px, rgba(225, 225, 225, 0.6) 100%); }
</style>

<!-- Header -->
<header class="masthead d-flex">
    <div class="container text-center my-auto">
        <h1 class="mb-1">Thank you for your visit</h1>
        <h3 class="mb-5">
            <em>Your post has been succesfully created!</em>
        </h3>
        <a class="btn btn-primary btn-xl js-scroll-trigger" href="{{route('breweries')}}">Go to see your brewery!</a>
        
    </div>
    <div class="overlay"></div>
</header>





</body>

</html>


@endsection