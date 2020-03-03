@if($businesses->count() >= 1)
@push('css')
    <style type="text/css">
        #partners {
            background-image: url("../images/overview.svg");
            background-repeat: no-repeat;
            background-position: bottom;
        }
    </style>
@endpush
<section id="partners" class="hero is-fullheight has-background-primary" style="padding-top: 70px;">
    <div class="container is-fluid">
        <div class="row has-text-centered">
            <h2 class="is-size-1 title has-text-weight-bold">Our Partners</h2>
            <p class="subtitle">Join us! Together, we will improve the hospitality services in the Philippines.</p>
        </div>
    </div>
</section>
@endif