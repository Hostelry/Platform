@extends('site::layouts.master')
@push('css')
    <style type="text/css">
        #home {
            background-image: url("/images/wave.svg");
            background-repeat: no-repeat;
            background-position: top;
        }

        #partners {
            background-image: url("../images/overview.svg");
            background-repeat: no-repeat;
            background-position: bottom;
        }
    </style>
@endpush

@section('content')
<section class="hero is-fullheight" id="home">
    <div class="hero-head">
        <nav class="navbar is-transparent" role="navigation">
            <div class="container">
                <div class="navbar-brand">
                    <a class="navbar-item" href="{{route('site.index')}}">
                        Hostelry
                    </a>
                    <navbar-burger></navbar-burger>
                </div>
                <div id="navbarMenuHeroA" class="navbar-menu">
                    <div class="navbar-end">
                        <a class="navbar-item is-active" href="#home">Home</a>
                        <a class="navbar-item" href="#overview">Overview</a>
                        <a class="navbar-item" href="#plans">Plans</a>
                        <a class="navbar-item" href="#features">Features</a>
                        <a class="navbar-item" href="#partners">Partners</a>
                        <a class="navbar-item" href="#demo">Demo</a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <div class="hero-body">
        <div class="container is-fluid">
            <div class="columns is-vcentered">
                <div class="column is-one-third">
                    <h2 class="title">Hospitality Management Made Easy</h2>
                    <p class="subtitle">A platform built for managing Inns, Pension Houses, and Hotels</p>
                </div>
                <div class="column">
                    <figure class="image">
                        <img src="{{asset('images/town.svg')}}">
                    </figure>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="overview" class="hero is-fullheight has-background-primary" style="padding-top: 30px">
    <div class="container is-fluid">
        <div class="columns is-vcentered">
            <div class="column has-text-centered">
                <h2 class="is-size-1 has-text-weight-bold">What's our goal?</h2>
                <figure class="image is-1by1">
                    <img src="{{asset('images/faq.svg')}}">
                </figure>
                <p class="subtitle has-text-weight-semibold">
                    Customer Satisfaction = Business Growth
                </p>
            </div>
            <div class="column">
                <h2 class="has-text-centered is-size-1 is-family-primary has-text-weight-bold has-text-grey-darker">HOSPITALITY: AT ITS BEST!</h2>
            </div>
        </div>
    </div>
</section>
<section id="plans" class="hero is-fullheight">
    <div class="container is-fluid">
        <div class="card">
            <div class="card-image">

            </div>
            <div class="card-content">
                <div class="media">
                    <div class="media-left">
                        <figure class="image is-48x48">
                            <img src="https://bulma.io/images/placeholders/96x96.png" alt="Placeholder image">
                        </figure>
                    </div>
                    <div class="media-content">
                        <p class="title is-4">John Smith</p>
                        <p class="subtitle is-6">@johnsmith</p>
                    </div>
                </div>

                <div class="content">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Phasellus nec iaculis mauris. <a>@bulmaio</a>.
                    <a href="#">#css</a> <a href="#">#responsive</a>
                    <br>
                    <time datetime="2016-1-1">11:09 PM - 1 Jan 2016</time>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="features" class="hero is-fullheight is-medium">
    <div class="container is-fluid">
        <div class="row">
            <h2 class="is-size-1 has-text-weight-bold has-text-centered">What's included in the plan?</h2>
        </div>
        <div class="row">
            <div class="columns is-vcentered">
                <div class="column is-two-fifths">
                    <figure class="image is-1by1">
                        <img src="{{asset('images/booking.svg')}}">
                    </figure>
                </div>
                <div class="column">
                    <h3 class="title">Booking Management</h3>
                    <h4 class="subtitle has-text-weight-light">No need to watch you clock from time-to-time.</h4>
                    <p>We provide alerts and notifications on each guest. Automatically monitors the time remaining, extensions, and transferring for each guest.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="columns is-vcentered">
                <div class="column">
                    <h3 class="title">Inventory Management</h3>
                    <h4 class="subtitle has-text-weight-light">Your stocks won't go to waste! We will keep you updated in near real-time.</h4>
                    <p>Making sure your supplies are fresh and enough to run on day-to-day operations. We alert and notifies you for a possible shortage of stocks and be able to create a purchase request on your behalf.</p>
                </div>
                <div class="column is-two-fifths">
                    <figure class="image is-1by1">
                        <img src="{{asset('images/inventory.svg')}}">
                    </figure>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="columns is-vcentered">
                <div class="column">
                    <figure class="image is-two-fifths">
                        <img src="{{asset('images/employees.svg')}}">
                    </figure>
                </div>
                <div class="column">
                    <h3 class="title">Employee Management</h3>
                    <h4 class="subtitle has-text-weight-light">Who's IN and Who's OUT?</h4>
                    <p>Ease of monitoring your employees while organizing their day-off, attendance, payroll processing, deductions and more.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="columns is-vcentered">
                <div class="column">
                    <h3 class="title">Business Intelligence Tools</h3>
                    <h4 class="subtitle has-text-weight-light">Personalized data analysis to know your business more.</h4>
                    <p>Analyzing each event that happens in your business in near real-time gives you peace of mind and knowing what's doing good and what are the problems and bottlenecks in your day-to-day operations can help you create policies and solutions.</p>
                </div>
                <div class="column">
                    <figure class="image is-two-fifths">
                        <img src="{{asset('images/monitoring.svg')}}">
                    </figure>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="partners" class="hero is-fullheight has-background-primary" style="padding-top: 70px;">
    <div class="container is-fluid">
        <div class="row has-text-centered">
            <h2 class="is-size-1 title has-text-weight-bold">Our Partners</h2>
            <p class="subtitle">Join us! Together, we will improve the hospitality services in the Philippines.</p>
        </div>
    </div>
</section>
<section id="demo" class="hero is-fullheight">

</section>
@endsection
