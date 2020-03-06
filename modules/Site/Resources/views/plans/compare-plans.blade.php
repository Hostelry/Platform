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
            <div class="row">
                <div class="pricing-table is-comparative">
                    <div class="pricing-plan is-features">
                        <div class="plan-header">Features</div>
                        <div class="plan-price"><span class="plan-price-amount">&nbsp;</span></div>
                        <div class="plan-items">
                            <div class="plan-item has-background-grey-lighter is-uppercase has-text-grey-dark has-text-weight-semibold">Business Information</div>
                            <div class="plan-item has-text-black-ter">Business Name(s)</div>
                            <div class="plan-item has-text-black-ter">Branch Location(s)</div>
                            <div class="plan-item has-background-grey-lighter is-uppercase has-text-grey-dark has-text-weight-semibold">Hardware and Mobile Integration</div>
                            <div class="plan-item has-text-black-ter">Receptionists Booking Portal</div>
                            <div class="plan-item has-text-black-ter">Room Cleaning Portal</div>
                            <div class="plan-item has-text-black-ter">Laundry Portal</div>
                            <div class="plan-item has-text-black-ter">Security Portal</div>
                            <div class="plan-item has-text-black-ter">Cash Drawer (4-bill with coins tray)</div>
                            <div class="plan-item has-text-black-ter">Thermal Receipt Printer</div>
                            <div class="plan-item has-background-grey-lighter is-uppercase has-text-grey-dark has-text-weight-semibold">Employee Management</div>
                            <div class="plan-item has-text-black-ter">Total Employees</div>
                            <div class="plan-item has-text-black-ter">Work Scheduler</div>
                            <div class="plan-item has-text-black-ter">Attendance Management</div>
                            <div class="plan-item has-text-black-ter">Cash Advance Monitoring</div>
                            <div class="plan-item has-text-black-ter">Payroll (Semi-monthly) Computation</div>
                            <div class="plan-item has-text-black-ter">Remittance of Government Contributions</div>
                            <div class="plan-item has-background-grey-lighter is-uppercase has-text-grey-dark has-text-weight-semibold">Booking Management</div>
                            <div class="plan-item has-text-black-ter">Regular Booking</div>
                            <div class="plan-item has-text-black-ter">Booking With Senior Citizen Discount</div>
                            <div class="plan-item has-text-black-ter">Anniversary Discount</div>
                            <div class="plan-item has-text-black-ter">Custom Discount</div>
                            <div class="plan-item has-background-grey-lighter is-uppercase has-text-grey-dark has-text-weight-semibold">Inventory Management</div>
                            <div class="plan-item has-text-black-ter">Drinks, Groceries, and Personal Hygiene Products</div>
                            <div class="plan-item has-text-black-ter">Appliances</div>
                            <div class="plan-item has-text-black-ter">Cleaning Materials</div>
                            <div class="plan-item has-text-black-ter">Furniture</div>
                            <div class="plan-item has-text-black-ter">Meals and Kitchen Materials</div>
                            <div class="plan-item has-background-grey-lighter is-uppercase has-text-grey-dark has-text-weight-semibold">Business Intelligence Tooling</div>
                            <div class="plan-item has-text-black-ter">Sales Report</div>
                            <div class="plan-item has-text-black-ter">Purchase Report</div>
                            <div class="plan-item has-text-black-ter">Defective Products Report</div>
                            <div class="plan-item has-text-black-ter">Air-conditioning Maintenance Report</div>
                            <div class="plan-item has-text-black-ter">Estimated Calculations of Electricity Consumption</div>
                            <div class="plan-item has-text-black-ter">Pest Control Maintenance Report</div>
                            <div class="plan-item has-text-black-ter">Expenses Report</div>
                            <div class="plan-item has-background-grey-lighter is-uppercase has-text-grey-dark has-text-weight-semibold">Social Media Marketing</div>
                            <div class="plan-item has-text-black-ter">Facebook Postings</div>
                            <div class="plan-item has-text-black-ter">Twitter Postings</div>
                            <div class="plan-item has-text-black-ter">Instagram Postings</div>
                            <div class="plan-item has-text-black-ter">Customer and Followers Acquisitions</div>
                            <div class="plan-item has-background-grey-lighter is-uppercase has-text-grey-dark has-text-weight-semibold">Website</div>
                            <div class="plan-item has-text-black-ter">Personalized Domain Name</div>
                            <div class="plan-item has-text-black-ter">Weekly Blog Posts</div>
                        </div>
                        <div class="plan-footer">&nbsp;</div>
                    </div>
                    <div class="pricing-plan is-black-bis">
                        <div class="plan-header has-background-dark has-text-white-ter">Starter</div>
                        <div class="plan-price"><span class="plan-price-amount"><span class="plan-price-currency">₱</span>6,750</span>/month</div>
                        <div class="plan-items">
                            <div class="plan-item has-background-grey-lighter">&nbsp;</div>
                            <div class="plan-item has-text-black-ter">1</div>
                            <div class="plan-item has-text-black-ter">1</div>
                            <div class="plan-item has-background-grey-lighter">&nbsp;</div>
                            <div class="plan-item has-text-success is-size-7"><check-icon></check-icon></div>
                            <div class="plan-item has-text-success is-size-7"><check-icon></check-icon></div>
                            <div class="plan-item has-text-success is-size-7"><check-icon></check-icon></div>
                            <div class="plan-item has-text-success is-size-7"><check-icon></check-icon></div>
                            <div class="plan-item has-text-grey-lighter is-size-7"><check-icon></check-icon></div>
                            <div class="plan-item has-text-grey-lighter is-size-7"><check-icon></check-icon></div>
                            <div class="plan-item has-background-grey-lighter">&nbsp;</div>
                            <div class="plan-item has-text-black-ter">Up to 10 (active) Employees</div>
                            <div class="plan-item has-text-success is-size-7"><check-icon></check-icon></div>
                            <div class="plan-item has-text-success is-size-7"><check-icon></check-icon></div>
                            <div class="plan-item has-text-success is-size-7"><check-icon></check-icon></div>
                            <div class="plan-item has-text-success is-size-7"><check-icon></check-icon></div>
                            <div class="plan-item has-text-grey-lighter"><check-icon></check-icon></div>
                            <div class="plan-item has-background-grey-lighter">&nbsp;</div>
                            <div class="plan-item has-text-success is-size-7"><check-icon></check-icon></div>
                            <div class="plan-item has-text-success is-size-7"><check-icon></check-icon></div>
                            <div class="plan-item has-text-grey-lighter is-size-7"><check-icon></check-icon></div>
                            <div class="plan-item has-text-grey-lighter"><check-icon></check-icon></div>
                            <div class="plan-item has-background-grey-lighter">&nbsp;</div>
                            <div class="plan-item has-text-success is-size-7"><check-icon></check-icon></div>
                            <div class="plan-item has-text-grey-lighter is-size-7"><check-icon></check-icon></div>
                            <div class="plan-item has-text-grey-lighter is-size-7"><check-icon></check-icon></div>
                            <div class="plan-item has-text-grey-lighter is-size-7"><check-icon></check-icon></div>
                            <div class="plan-item has-text-grey-lighter is-size-7"><check-icon></check-icon></div>
                            <div class="plan-item has-background-grey-lighter">&nbsp;</div>
                            <div class="plan-item has-text-success is-size-7"><check-icon></check-icon></div>
                            <div class="plan-item has-text-success is-size-7"><check-icon></check-icon></div>
                            <div class="plan-item has-text-success is-size-7"><check-icon></check-icon></div>
                            <div class="plan-item has-text-grey-lighter is-size-7"><check-icon></check-icon></div>
                            <div class="plan-item has-text-grey-lighter is-size-7"><check-icon></check-icon></div>
                            <div class="plan-item has-text-grey-lighter is-size-7"><check-icon></check-icon></div>
                            <div class="plan-item has-text-grey-lighter is-size-7"><check-icon></check-icon></div>
                            <div class="plan-item has-background-grey-lighter">&nbsp;</div>
                            <div class="plan-item has-text-black">N/A</div>
                            <div class="plan-item has-text-black">N/A</div>
                            <div class="plan-item has-text-black">N/A</div>
                            <div class="plan-item has-text-black">N/A</div>
                            <div class="plan-item has-background-grey-lighter">&nbsp;</div>
                            <div class="plan-item has-text-grey-lighter is-size-7"><check-icon></check-icon></div>
                            <div class="plan-item has-text-grey-lighter is-size-7"><check-icon></check-icon></div>
                        </div>
                        <div class="plan-footer">
                            <a href="{{route('site.plans.starter')}}" class="button is-black is-outlined is-fullwidth">Choose</a>
                        </div>
                    </div>
                    <div class="pricing-plan is-success">
                        <div class="plan-header has-background-success">Expansion</div>
                        <div class="plan-price"><span class="plan-price-amount"><span class="plan-price-currency">₱</span>11,475</span>/month</div>
                        <div class="plan-items">
                            <div class="plan-item has-background-grey-lighter">&nbsp;</div>
                            <div class="plan-item has-text-black-ter">1</div>
                            <div class="plan-item has-text-black-ter">2 or more</div>
                            <div class="plan-item has-background-grey-lighter">&nbsp;</div>
                            <div class="plan-item has-text-success is-size-7"><check-icon></check-icon></div>
                            <div class="plan-item has-text-success is-size-7"><check-icon></check-icon></div>
                            <div class="plan-item has-text-success is-size-7"><check-icon></check-icon></div>
                            <div class="plan-item has-text-success is-size-7"><check-icon></check-icon></div>
                            <div class="plan-item has-text-success is-size-7"><check-icon></check-icon></div>
                            <div class="plan-item has-text-success is-size-7"><check-icon></check-icon></div>
                            <div class="plan-item has-background-grey-lighter">&nbsp;</div>
                            <div class="plan-item has-text-black-ter">Up to 50 (active) Employees</div>
                            <div class="plan-item has-text-success is-size-7"><check-icon></check-icon></div>
                            <div class="plan-item has-text-success is-size-7"><check-icon></check-icon></div>
                            <div class="plan-item has-text-success is-size-7"><check-icon></check-icon></div>
                            <div class="plan-item has-text-success is-size-7"><check-icon></check-icon></div>
                            <div class="plan-item has-text-success"><check-icon></check-icon></div>
                            <div class="plan-item has-background-grey-lighter">&nbsp;</div>
                            <div class="plan-item has-text-success is-size-7"><check-icon></check-icon></div>
                            <div class="plan-item has-text-success is-size-7"><check-icon></check-icon></div>
                            <div class="plan-item has-text-success is-size-7"><check-icon></check-icon></div>
                            <div class="plan-item has-text-grey-lighter"><check-icon></check-icon></div>
                            <div class="plan-item has-background-grey-lighter">&nbsp;</div>
                            <div class="plan-item has-text-success is-size-7"><check-icon></check-icon></div>
                            <div class="plan-item has-text-success is-size-7"><check-icon></check-icon></div>
                            <div class="plan-item has-text-success is-size-7"><check-icon></check-icon></div>
                            <div class="plan-item has-text-grey-lighter is-size-7"><check-icon></check-icon></div>
                            <div class="plan-item has-text-grey-lighter is-size-7"><check-icon></check-icon></div>
                            <div class="plan-item has-background-grey-lighter">&nbsp;</div>
                            <div class="plan-item has-text-success is-size-7"><check-icon></check-icon></div>
                            <div class="plan-item has-text-success is-size-7"><check-icon></check-icon></div>
                            <div class="plan-item has-text-success is-size-7"><check-icon></check-icon></div>
                            <div class="plan-item has-text-success is-size-7"><check-icon></check-icon></div>
                            <div class="plan-item has-text-success is-size-7"><check-icon></check-icon></div>
                            <div class="plan-item has-text-grey-lighter is-size-7"><check-icon></check-icon></div>
                            <div class="plan-item has-text-grey-lighter is-size-7"><check-icon></check-icon></div>
                            <div class="plan-item has-background-grey-lighter">&nbsp;</div>
                            <div class="plan-item has-text-black">1 per day</div>
                            <div class="plan-item has-text-black">1 per day</div>
                            <div class="plan-item has-text-black">1 per day</div>
                            <div class="plan-item has-text-black">1 prospect per week</div>
                            <div class="plan-item has-background-grey-lighter">&nbsp;</div>
                            <div class="plan-item has-text-grey-lighter is-size-7"><check-icon></check-icon></div>
                            <div class="plan-item has-text-grey-lighter is-size-7"><check-icon></check-icon></div>
                        </div>
                        <div class="plan-footer">
                            <a href="{{route('site.plans.expansion')}}" class="button is-fullwidth">Choose</a>
                        </div>
                    </div>
                    <div class="pricing-plan is-black-bis">
                        <div class="plan-header has-background-warning">Deluxe</div>
                        <div class="plan-price"><span class="plan-price-amount"><span class="plan-price-currency">₱</span>24,975</span>/month</div>
                        <div class="plan-items">
                            <div class="plan-item has-background-grey-lighter">&nbsp;</div>
                            <div class="plan-item has-text-black-ter">2 or more</div>
                            <div class="plan-item has-text-black-ter">2 or more</div>
                            <div class="plan-item has-background-grey-lighter">&nbsp;</div>
                            <div class="plan-item has-text-success is-size-7"><check-icon></check-icon></div>
                            <div class="plan-item has-text-success is-size-7"><check-icon></check-icon></div>
                            <div class="plan-item has-text-success is-size-7"><check-icon></check-icon></div>
                            <div class="plan-item has-text-success is-size-7"><check-icon></check-icon></div>
                            <div class="plan-item has-text-success is-size-7"><check-icon></check-icon></div>
                            <div class="plan-item has-text-success is-size-7"><check-icon></check-icon></div>
                            <div class="plan-item has-background-grey-lighter">&nbsp;</div>
                            <div class="plan-item has-text-black-ter">Up to 100 (active) Employees</div>
                            <div class="plan-item has-text-success is-size-7"><check-icon></check-icon></div>
                            <div class="plan-item has-text-success is-size-7"><check-icon></check-icon></div>
                            <div class="plan-item has-text-success is-size-7"><check-icon></check-icon></div>
                            <div class="plan-item has-text-success is-size-7"><check-icon></check-icon></div>
                            <div class="plan-item has-text-success"><check-icon></check-icon></div>
                            <div class="plan-item has-background-grey-lighter">&nbsp;</div>
                            <div class="plan-item has-text-success is-size-7"><check-icon></check-icon></div>
                            <div class="plan-item has-text-success is-size-7"><check-icon></check-icon></div>
                            <div class="plan-item has-text-success is-size-7"><check-icon></check-icon></div>
                            <div class="plan-item has-text-success"><check-icon></check-icon></div>
                            <div class="plan-item has-background-grey-lighter">&nbsp;</div>
                            <div class="plan-item has-text-success is-size-7"><check-icon></check-icon></div>
                            <div class="plan-item has-text-success is-size-7"><check-icon></check-icon></div>
                            <div class="plan-item has-text-success is-size-7"><check-icon></check-icon></div>
                            <div class="plan-item has-text-success is-size-7"><check-icon></check-icon></div>
                            <div class="plan-item has-text-success is-size-7"><check-icon></check-icon></div>
                            <div class="plan-item has-background-grey-lighter">&nbsp;</div>
                            <div class="plan-item has-text-success is-size-7"><check-icon></check-icon></div>
                            <div class="plan-item has-text-success is-size-7"><check-icon></check-icon></div>
                            <div class="plan-item has-text-success is-size-7"><check-icon></check-icon></div>
                            <div class="plan-item has-text-success is-size-7"><check-icon></check-icon></div>
                            <div class="plan-item has-text-success is-size-7"><check-icon></check-icon></div>
                            <div class="plan-item has-text-success is-size-7"><check-icon></check-icon></div>
                            <div class="plan-item has-text-success is-size-7"><check-icon></check-icon></div>
                            <div class="plan-item has-background-grey-lighter">&nbsp;</div>
                            <div class="plan-item has-text-black">3 posts per day</div>
                            <div class="plan-item has-text-black">3 posts per day</div>
                            <div class="plan-item has-text-black">3 posts per day</div>
                            <div class="plan-item has-text-black">1 prospect per day</div>
                            <div class="plan-item has-background-grey-lighter">&nbsp;</div>
                            <div class="plan-item has-text-success is-size-7"><check-icon></check-icon></div>
                            <div class="plan-item has-text-success is-size-7"><check-icon></check-icon></div>
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
