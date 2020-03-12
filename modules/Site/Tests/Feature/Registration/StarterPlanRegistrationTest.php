<?php

declare(strict_types=1);

namespace CodingMatters\Site\Tests\Feature\Registration;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

final class StarterPlanRegistrationTest extends TestCase
{
    use RefreshDatabase;
    use WithFaker;

    /**
     * @test
     */
    public function mustRequireBusinessName() : void
    {
        $payload = ['business_name' => ""];
        $response = $this->from(route('site.plans.starter'))->post(route('site.subscribe'), $payload);
        $response->assertSessionHasErrors('business_name');
    }

    /**
     * @todo elaborate or change the test group
     * @test
     */
    public function successfulRegistrationUponFillingOutAllTheForm() : void
    {
        $payload = [
            'business_name' => $this->faker->company,
            'total_rooms' => 10,
            'business_type' => 'hotel',
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'email' => $this->faker->email,
            'password' => 'secure-password',
            'password_confirmation' => 'secure-password',
        ];

        $response = $this->from(route('site.plans.starter'))->post(route('site.subscribe'), $payload);
        $response->assertRedirect(route('site.account.dashboard'));
    }
}
