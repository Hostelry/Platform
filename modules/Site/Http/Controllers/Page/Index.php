<?php

declare(strict_types=1);

namespace CodingMatters\Site\Http\Controllers\Page;

use Illuminate\Routing\Controller;
use Illuminate\View\View;

final class Index extends Controller
{
    public function __invoke() : View
    {
        $sections = [
            'home',
            'overview',
            'plans',
            'features',
            'partners',
            //'demo'
        ];

        $businesses = collect();

        return view('site::index', compact('sections', 'businesses'));
    }
}
