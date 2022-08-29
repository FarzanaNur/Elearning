<?php

namespace App\Actions\Fortify;

use App\Models\enroll;
use App\Models\enrolls;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;


    public function create(array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate();

        return enrolls::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'course_name' => $input['course_name'],
            'contact_number' => $input['contact_number'],
            'bkash_number' => $input['bkash_number'],
            'tranjection_id' => $input['tranjection_id'],
        ]);
    }
}
