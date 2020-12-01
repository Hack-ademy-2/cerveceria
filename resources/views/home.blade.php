@extends('layouts.app')
@section('content')
<style>
    .masthead {
        background-image: linear-gradient(90deg, rgba(220, 178, 78, 0.1) 0px, rgba(220, 178, 78, 0.1) 100%), url("/img/BackgroundImg.jpg");
    }

    .formmasthead {
        background-image: linear-gradient(90deg, rgba(220, 178, 78, 0.1) 0px, rgba(220, 178, 78, 0.1) 100%), url("/img/FormView.jpg");
    }

    .bg-trasparency {
        background: linear-gradient(90deg, rgba(225, 225, 225, 0.6) 0px, rgba(225, 225, 225, 0.6) 100%);
    }

</style>

<!-- Header -->
<header class="masthead d-flex">
    <div class="container text-center my-auto">
        <h1 class="mb-1">BEER ROOM</h1>
        <h3 class="mb-5">
            <em>How to find the best beer in town</em>
        </h3>
        <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Drink up</a>
    </div>
    <div class="overlay"></div>
</header>

<!-- Services -->
<section class="content-section bg-primary text-white text-center" id="services">
    <div class="container">
        <div class="content-section-heading">
            <h3 class="text-secondary mb-0">Services</h3>
            <h2 class="mb-5">What We Offer</h2>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                <span class="service-icon rounded-circle mx-auto mb-3">
                    <i class="icon-screen-smartphone"></i>
                </span>
                <h4>
                    <strong>Responsive</strong>
                </h4>
                <p class="text-faded mb-0">Looks great on any screen size!</p>
            </div>
            <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                <span class="service-icon rounded-circle mx-auto mb-3">
                    <i class="icon-pencil"></i>
                </span>
                <h4>
                    <strong>Redesigned</strong>
                </h4>
                <p class="text-faded mb-0">Freshly redesigned for Bootstrap 4.</p>
            </div>
            <div class="col-lg-3 col-md-6 mb-5 mb-md-0">
                <span class="service-icon rounded-circle mx-auto mb-3">
                    <i class="icon-like"></i>
                </span>
                <h4>
                    <strong>Favorited</strong>
                </h4>
                <p class="text-faded mb-0">Millions of users
                    <i class="fas fa-heart"></i>
                    Start Bootstrap!</p>
            </div>
            <div class="col-lg-3 col-md-6">
                <span class="service-icon rounded-circle mx-auto mb-3">
                    <i class="icon-mustache"></i>
                </span>
                <h4>
                    <strong>Question</strong>
                </h4>
                <p class="text-faded mb-0">I mustache you a question...</p>
            </div>
        </div>
    </div>
</section>

<!-- Callout -->
<section class="callout formmasthead">
    <div class="container-fluid p-5 text-center bg-trasparency">
        <h2 class="mx-auto mb-5">Welcome to
            <em>our</em>
            beer home!</h2>
        <form action="{{route('breweries.notification')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="exampleFormControlInput1">Beer Title</label>
                <input type="text" name="title" class="form-control" id="exampleFormControlInput1">
                @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="exampleFormControlTextarea1">Get to know your beer</label>
                <textarea class="form-control @error('description') is-invalid @enderror" name="description"
                    id="exampleFormControlTextarea1" rows="3"></textarea>
                @error('description')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <button class="btn btn-xl btn-light mr-4" type='sumbit'>Cheers!</button>

        </form>
    </div>
</section>



<!-- Call to Action -->
<section class="content-section bg-primary text-white">
    <div class="container text-center">
        <h2 class="mb-4">The buttons below are impossible to resist...</h2>
        <a href="#!" class="btn btn-xl btn-light mr-4">Click Me!</a>
        <a href="#!" class="btn btn-xl btn-dark">Look at Me!</a>
    </div>
</section>

<!-- Map -->
<div id="contact" class="map">
    <iframe
        src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A&amp;output=embed"></iframe>
    <br />
    <small>
        <a
            href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A"></a>
    </small>
</div>




</body>

</html>


@endsection
