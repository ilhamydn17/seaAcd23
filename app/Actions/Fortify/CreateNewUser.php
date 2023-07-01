<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input): User
    {
        Validator::make($input, [
            'username' => [
                'required',
                'string',
                'max:255',
                Rule::unique(User::class),
            ],
            'password' => $this->passwordRules(),
            'name' => ['required', 'string', 'max:255'],
            'age'=>['required','numeric']
        ])->validate();

        return User::create([
            'username' => $input['username'],
            'password' => Hash::make($input['password']),
            'name' => $input['name'],
            'age'=> $input['age']
        ]);
    }
}
