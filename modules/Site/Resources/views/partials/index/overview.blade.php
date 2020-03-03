@push('css')
    <style type="text/css">
        #goals {
            padding-top: 30px;
            padding-bottom: 10px;
        }
    </style>
@endpush

<section id="overview" class="hero is-fullheight has-background-primary" style="padding-top: 30px">
    <div class="container is-fluid">
        <div class="columns is-vcentered">
            <div class="column">
                <figure class="image is-1by1">
                    <img src="{{asset('images/faq.svg')}}">
                </figure>
            </div>
            <div class="column">
                <div class="row  has-text-centered" style="padding-bottom: 30px">
                    <h2 class="is-size-1 has-text-weight-bold has-text-white-ter"> HOSPITALITY: AT ITS BEST!</h2>
                    <span class="subtitle is-size-5 has-text-weight-semibold has-text-grey-darker">
                        What's our goal?
                    </span>
                </div>
                <div class="row" id="goals">
                    <div class="media is-vcentered">
                        <figure class="media-left is-vcentered has-text-white">
                            <check-icon></check-icon>
                        </figure>
                        <div class="media-content">
                            <div class="content">
                                <h5 class="title is-size-4 has-text-weight-bold has-text-white">Improved Booking Experience</h5>
                                <p class="subtitle">Making sure that your customers are satisfied, enjoys their stay, and feels safe like it's their own home.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" id="goals">
                    <div class="media is-vcentered">
                        <figure class="media-left is-vcentered has-text-white">
                            <check-icon></check-icon>
                        </figure>
                        <div class="media-content">
                            <div class="content">
                                <h5 class="title is-size-4 has-text-weight-bold has-text-white">Improved Sales</h5>
                                <p class="subtitle">Assuring that what's on the menu is very available. Customers loved that!</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" id="goals">
                    <div class="media is-vcentered">
                        <figure class="media-left is-vcentered has-text-white">
                            <check-icon></check-icon>
                        </figure>
                        <div class="media-content">
                            <div class="content">
                                <h5 class="title is-size-4 has-text-weight-bold has-text-white">Improved Warehousing</h5>
                                <p class="subtitle">Having immediate feedback with issues and concerns especially for expiring and out of stock goods.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" id="goals">
                    <div class="media is-vcentered">
                        <figure class="media-left is-vcentered has-text-white">
                            <check-icon></check-icon>
                        </figure>
                        <div class="media-content">
                            <div class="content">
                                <h5 class="title is-size-4 has-text-weight-bold has-text-white">Improved Housekeeping</h5>
                                <p class="subtitle">Proper maintenance, disposal and monitoring of lost and found items.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>