<?php

declare(strict_types=1);

namespace CodingMatters\Site\Http\Requests\Registration;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

final class StarterPlanRegistrationRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() : array
    {
        return [
            'business_name' => ["required"],
            'first_name' => ["required"],
            'last_name' => ["required"],
            'email' => "required|email|unique:owners,username",
            'password' => "required|confirmed"
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() : bool
    {
        return Auth::guest();
    }
}
