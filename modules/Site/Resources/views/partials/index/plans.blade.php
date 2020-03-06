<section id="plans" class="hero has-background-white-bis is-fullheight" style="padding-bottom: 30px">
    <div class="container is-fluid">
        <div class="row has-text-centered">
            <h2 class="is-size-1 has-text-weight-bold">Select a plan that suits your needs.</h2>
            <span class="subtitle has-text-danger">*Included features may vary per plan.</span>
        </div>
        <div class="row" style="padding-top: 30px;">
            <div class="pricing-table is-comparative">
                <div class="pricing-plan is-black-bis">
                    <div class="plan-header has-background-grey-dark has-text-white-ter">Starter</div>
                    <div class="plan-price has-text-grey"><span class="plan-price-amount"><span class="plan-price-currency">₱</span>6,750</span>/month</div>
                    <div class="plan-items">
                        <div class="plan-item has-text-success">Single Branch ONLY</div>
                        <div class="plan-item has-text-success">Up to 10 Employees</div>
                        <div class="plan-item has-text-danger">Hardware and Mobile Integration Ready</div>
                        <div class="plan-item has-text-danger">Business Intelligence Tooling</div>
                    </div>
                    <div class="plan-footer">
                        <a href="{{route('site.plans.starter')}}" class="button is-black is-fullwidth is-outlined">Get Starter Plan</a>
                    </div>
                </div>
                <div class="pricing-plan is-active is-success">
                    <div class="plan-header has-background-success has-text-white">Expansion</div>
                    <div class="plan-price"><span class="plan-price-amount"><span class="plan-price-currency">₱</span>11,475</span>/month</div>
                    <div class="plan-items">
                        <div class="plan-item has-text-grey-dark has-text-weight-bold">OUR BEST OFFER</div>
                        <div class="plan-item has-text-success">Multiple Branch</div>
                        <div class="plan-item has-text-success">Up to 50 Employees</div>
                        <div class="plan-item has-text-success">Hardware and Mobile Integration</div>
                        <div class="plan-item has-text-danger">Business Intelligence Tooling</div>
                        <div class="plan-item has-text-danger">Social Media Marketing</div>
                    </div>
                    <div class="plan-footer">
                        <a href="{{route('site.plans.expansion')}}" class="button has-background-success has-text-white-ter is-fullwidth has-text-weight-bold is-uppercase">GET IT NOW!</a>
                    </div>
                </div>
                <div class="pricing-plan">
                    <div class="plan-header has-background-warning has-text-grey-dark">Deluxe</div>
                    <div class="plan-price has-text-grey"><span class="plan-price-amount"><span class="plan-price-currency">₱</span>24,975</span>/month</div>
                    <div class="plan-items">
                        <div class="plan-item has-text-success">Multiple Branch</div>
                        <div class="plan-item has-text-success">Up to 50 Employees</div>
                        <div class="plan-item has-text-success">Hardware and Mobile Integration</div>
                        <div class="plan-item has-text-success">Business Intelligence Tooling</div>
                        <div class="plan-item has-text-success">Social Media Marketing</div>
                        <div class="plan-item has-text-danger">Website (Personalized Domain)</div>
                    </div>
                    <div class="plan-footer">
                        <a href="{{route('site.plans.expansion')}}" class="button is-warning is-fullwidth is-outlined has-text-grey-dark">Get Deluxe Plan</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row has-text-centered" style="padding-top: 60px;">
            <a class="button is-fullwidth is-medium is-success" href="{{route('site.plans')}}">Click here to compare pricing plans and see detailed features.</a>
        </div>
    </div>
</section>