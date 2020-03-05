<?php

declare(strict_types=1);

namespace CodingMatters\Site\Http\Controllers\Plans;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\View\View;

final class ComparePlans extends Controller
{
    public function __invoke(Request $request) : View
    {
        return view('site::plans.compare-plans');
    }
}
