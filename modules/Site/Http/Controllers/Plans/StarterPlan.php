<?php

namespace CodingMatters\Site\Http\Controllers\Plans;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\View\View;

final class StarterPlan extends Controller
{
    public function __invoke(Request $request) : View
    {
        return view('site::plans.starter');
    }
}
