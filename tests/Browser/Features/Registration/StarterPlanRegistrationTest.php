<?php

declare(strict_types=1);

namespace Tests\Browser\Features\Registration;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\WithFaker;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

final class StarterPlanRegistrationTest extends DuskTestCase
{
    use DatabaseMigrations;
    use WithFaker;

    /**
     * @test
     */
    public function mustRequireBusinessName()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit(route('site.plans.starter'))
                ->type('first_name', $this->faker->firstName)
                ->type('last_name', $this->faker->firstName)
                ->type('email', $this->faker->email)
                ->click('#subscribe')
                ->assertSee('The business name field is required');
        });
    }
    
    /**
     * @test
     */
    public function mustRequireEmailAddress() : void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit(route('site.plans.starter'))
                ->type('business_name', $this->faker->company)
                ->type('first_name', $this->faker->firstName)
                ->type('last_name', $this->faker->firstName)
                ->click('#subscribe')
                ->assertSee('The email field is required');
        });
    }

    /**
     * @test
     */
    public function emailAddressMustBeUnique() : void
    {
        $this->browse(function (Browser $browser, Browser $browser2) {

            $email = $this->faker->email;

            // First attempt is successful
            $browser->visit(route('site.plans.starter'))
                ->type('business_name', $this->faker->company)
                ->type('first_name', $this->faker->firstName)
                ->type('last_name', $this->faker->lastName)
                ->type('email', $email)
                ->type('password', 'password')
                ->type('password_confirmation', 'password')
                ->click("#subscribe");

            // This will re-enter the same email from previous registration
            $browser2->visit(route('site.plans.starter'))
                ->type('business_name', $this->faker->company)
                ->type('first_name', $this->faker->firstName)
                ->type('last_name', $this->faker->lastName)
                ->type('email', $email)
                ->type('password', 'password')
                ->type('password_confirmation', 'password')
                ->click("#subscribe")
                ->assertSee('The email has already been taken');
        });
    }
}
