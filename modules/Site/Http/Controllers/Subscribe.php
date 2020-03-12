<?php

namespace CodingMatters\Site\Http\Controllers;

use CodingMatters\Account\Entities\Owner;
use CodingMatters\Site\Http\Requests\Registration\StarterPlanRegistrationRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Controller;

final class Subscribe extends Controller
{
    public function __invoke(StarterPlanRegistrationRequest $request) : RedirectResponse
    {
        Owner::create($request->ownerProfile());
        return redirect()->route('site.account.dashboard');
    }
}
