@extends('site::layouts.master')
@section('content')
<section class="hero is-fullheight" style="padding-bottom: 60px">
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
            <form method="POST">
                @csrf
                <div class="columns">
                    <div class="column">
                        <div class="row">
                            <div class="columns">
                                <div class="column">
                                    <div class="field">
                                        <label class="label">Business Name</label>
                                        <div class="control">
                                            <input class="input @if($errors->has('business_name')) is-danger @endif"
                                                   name="business_name"
                                                   type="text"
                                                   placeholder="Your business name registration"
                                                   value="{{old('business_name')}}"
                                            >
                                        </div>
                                        @if($errors->has('business_name'))
                                            @foreach($errors->get('business_name') as $message)
                                                <p class="help is-danger">*{{$message}}</p>
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                                <div class="column is-two-fifths">
                                    <div class="field">
                                        <label class="label">Descriptor</label>
                                        <div class="control">
                                            <div class="select">
                                                <select id="business-type" name="business_type">
                                                    <option value="hotel">Hotel</option>
                                                    <option value="inn">Inn</option>
                                                    <option value="guesthouse">Guest House</option><option value="motel">Motel</option>
                                                    <option value="pensionhouse">Pension House</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="column is-one-fifth">
                                    <div class="field">
                                        <label class="label">Total Rooms</label>
                                        <div class="control">
                                            <input class="input" type="number" placeholder="1" value="10">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="columns is-vcentered">
                                <div class="column">
                                    <div class="field">
                                        <label class="label">First Name</label>
                                        <div class="control">
                                            <input class="input @if($errors->has('first_name')) is-danger @endif" name="first_name" type="text" placeholder="Example: Jane" value="{{old('first_name')}}">
                                            @if($errors->has('first_name'))
                                                @foreach($errors->get('first_name') as $message)
                                                    <p class="help is-danger">*{{$message}}</p>
                                                @endforeach
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="column">
                                    <div class="field">
                                        <label class="label">Last Name</label>
                                        <div class="control">
                                            <input class="input @if($errors->has('first_name')) is-danger @endif" name="last_name" type="text" placeholder="Example: Doe" value="{{old('last_name')}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="field">
                                <label class="label">Email</label>
                                <div class="control">
                                    <input class="input @if($errors->has('email')) is-danger @endif" name="email" type="email" placeholder="example@email.com" value="{{old('email')}}">
                                    @if($errors->has('email'))
                                        @foreach($errors->get('email') as $message)
                                            <p class="help is-danger">*{{$message}}</p>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="columns">
                                <div class="column">
                                    <div class="field">
                                        <label class="label">Password</label>
                                        <div class="control">
                                            <input class="input @if($errors->has('password')) is-danger @endif" name="password" type="password" placeholder="******">
                                            @if($errors->has('password'))
                                                @foreach($errors->get('password') as $message)
                                                    <p class="help is-danger">*{{$message}}</p>
                                                @endforeach
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="column">
                                    <div class="field">
                                        <label class="label">Confirm Password</label>
                                        <div class="control">
                                            <input class="input @if($errors->has('password_confirmation')) is-danger @endif" name="password_confirmation" type="password" placeholder="******">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="column">
                        <div class="row">
                            <div class="pricing-table is-comparative">
                                <div class="pricing-plan is-black-bis">
                                    <div class="plan-header has-background-dark has-text-white-ter">Starter</div>
                                    <div class="plan-price"><span class="plan-price-amount"><span class="plan-price-currency">₱</span>6,750</span>/month</div>
                                    <div class="plan-footer">
                                        <button type="submit" id="subscribe" class="button is-black is-fullwidth">Get Plan</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection
