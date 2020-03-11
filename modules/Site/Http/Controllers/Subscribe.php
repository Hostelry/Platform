<?php

namespace CodingMatters\Site\Http\Controllers;

use CodingMatters\Account\Entities\Owner;
use CodingMatters\Site\Http\Requests\Registration\StarterPlanRegistrationRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

final class Subscribe extends Controller
{
    public function __invoke(StarterPlanRegistrationRequest $request) : RedirectResponse
    {
        $data = $request->except(['_token', 'email', 'password', 'password_confirmation']);
        $data['code'] = Str::uuid()->toString();
        $data['username'] = $request->post('email');
        $data['password'] = Hash::make($request->post('password'));

        $owner = Owner::create($data);

        return redirect()->route('site.account.dashboard');
    }
}
