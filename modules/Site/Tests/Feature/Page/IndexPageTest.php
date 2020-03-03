<?php

declare(strict_types=1);

namespace CodingMatters\Site\Tests\Feature\Page;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

final class IndexPageTest extends TestCase
{
    /**
     * @dataProvider plans
     * @test
     * @param string $offer
     */
    public function showOffers(string $offer) : void
    {
        $this->get(route('site.index'))
            ->assertSeeText($offer);

    }

    /**
     * @dataProvider features
     * @test
     */
    public function showFeatures(string $features) : void
    {
        $this->get(route('site.index'))
            ->assertSeeText($features);
    }

    public function plans() : array
    {
        return [
            'starter' => ["Starter"],
            'expansion' => ["Expansion"],
            'deluxe' => ["Deluxe"],
        ];
    }

    public function features() : array
    {
        return [
            "booking" => ["Booking Management"],
            "inventory" => ["Inventory Management"],
            "employee" => ["Employee Management"],
            "analytics" => ["Business Intelligence Tools"],
        ];
    }
}
