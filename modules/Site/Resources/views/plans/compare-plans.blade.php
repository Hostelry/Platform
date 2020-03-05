@extends('site::layouts.master')
@section('content')
<section class="hero is-fullheight">
    <div class="container is-fluid">
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
                        <a class="navbar-item" href="{{route('site.index')}}">Home</a>
                    </div>
                </div>
            </div>
        </nav>
        <div class="row">
            <div class="row">
                <div class="pricing-table is-comparative">
                    <div class="pricing-plan is-features">
                        <div class="plan-header">Features</div>
                        <div class="plan-price"><span class="plan-price-amount">&nbsp;</span></div>
                        <div class="plan-items">
                            <div class="plan-item">Storage</div>
                            <div class="plan-item">Domains</div>
                            <div class="plan-item">Bandwidth</div>
                            <div class="plan-item">Email Boxes</div>
                        </div>
                        <div class="plan-footer">

                        </div>
                    </div>
                    <div class="pricing-plan is-black-bis">
                        <div class="plan-header has-background-grey-dark has-text-white-ter">Starter</div>
                        <div class="plan-price"><span class="plan-price-amount"><span class="plan-price-currency">₱</span>6,750</span>/month</div>
                        <div class="plan-items">
                            <div class="plan-item">20GB Storage</div>
                            <div class="plan-item">25 Domains</div>
                            <div class="plan-item">1TB Bandwidth</div>
                            <div class="plan-item">-</div>
                        </div>
                        <div class="plan-footer">
                            <a href="{{route('site.plans.starter')}}" class="button is-black is-outlined is-fullwidth">Choose</a>
                        </div>
                    </div>

                    <div class="pricing-plan is-active is-success">
                        <div class="plan-header has-background-success">Expansion</div>
                        <div class="plan-price"><span class="plan-price-amount"><span class="plan-price-currency">₱</span>11,475</span>/month</div>
                        <div class="plan-items">
                            <div class="plan-item">200GB Storage</div>
                            <div class="plan-item">50 Domains</div>
                            <div class="plan-item">1TB Bandwidth</div>
                            <div class="plan-item">100 Email Boxes</div>
                            <div class="plan-item"><check-icon></check-icon></div>
                        </div>
                        <div class="plan-footer">
                            <a href="{{route('site.plans.expansion')}}" class="button is-fullwidth">Choose</a>
                        </div>
                    </div>

                    <div class="pricing-plan is-black-bis">
                        <div class="plan-header has-background-warning">Deluxe</div>
                        <div class="plan-price"><span class="plan-price-amount"><span class="plan-price-currency">₱</span>24,975</span>/month</div>
                        <div class="plan-items">
                            <div class="plan-item">2TB Storage</div>
                            <div class="plan-item">100 Domains</div>
                            <div class="plan-item">1TB Bandwidth</div>
                            <div class="plan-item">1000 Email Boxes</div>
                        </div>
                        <div class="plan-footer">
                            <a href="{{route('site.plans.deluxe')}}" class="button is-warning is-outlined has-text-grey-dark is-fullwidth">Choose</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
