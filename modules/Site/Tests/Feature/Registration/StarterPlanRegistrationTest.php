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
}
