<?php

declare(strict_types=1);

namespace Tests\Browser\Site;

use Laravel\Dusk\Browser;
use Tests\Browser\Pages\Site\IndexPage;
use Tests\DuskTestCase;

final class IndexPageTest extends DuskTestCase
{
    /**
     * @dataProvider plans
     * @test
     */
    public function showOffers(string $offer)
    {
        $this->browse(function (Browser $browser) use ($offer) {
            $browser->visit(new IndexPage())
                ->assertSee($offer);
        });
    }

    /**
     * @dataProvider features
     * @param string $feature
     * @test
     */
    public function showFeatures(string $feature)
    {
        $this->browse(function (Browser $browser) use ($feature) {
            $browser->visit(new IndexPage())
                ->assertSee($feature);
        });
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
