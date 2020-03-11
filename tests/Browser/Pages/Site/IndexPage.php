<?php

declare(strict_types=1);

namespace Tests\Browser\Pages\Site;

use Laravel\Dusk\Browser;
use Tests\Browser\Pages\Page;

final class IndexPage extends Page
{
    /**
     * Get the URL for the page.
     *
     * @return string
     */
    public function url() : string
    {
        return route('site.index');
    }

    /**
     * Get the element shortcuts for the page.
     *
     * @return array
     */
    public function elements() : array
    {
        return [
            '@element' => '#selector',
        ];
    }
}
