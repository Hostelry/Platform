@push('css')
    <style type="text/css">
        #home {
            background-image: url("/images/wave.svg");
            background-repeat: no-repeat;
            background-position: top;
        }
    </style>
@endpush
<section class="hero is-fullheight" id="home">
    <div class="hero-head">
        <nav class="navbar is-transparent" role="navigation">
            <div class="container">
                <div class="navbar-brand">
                    <a class="navbar-item" href="{{route('site.index')}}">
                        <h2 class="has-text-weight-bold is-size-1">Hostelry</h2>
                    </a>
                    <navbar-burger></navbar-burger>
                </div>
                <div id="navbarMenuHeroA" class="navbar-menu">
                    <div class="navbar-end">
                        @foreach($sections as $section)
                            @if(($section != "home" && $section != "partners") || ($section == 'partners' && $businesses->count() >= 1))
                                <a class="navbar-item" href="#{{$section}}">{{ucfirst($section)}}</a>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <div class="hero-body">
        <div class="container is-fluid">
            <div class="columns is-vcentered">
                <div class="column is-one-third">
                    <h2 class="title is-size-2">Hospitality Management Made Easy</h2>
                    <p class="subtitle is-size-6">A platform built for managing Inns, Pension Houses, and Hotels</p>
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