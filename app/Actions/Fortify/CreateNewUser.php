<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Spatie\Permission\Models\Role;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:100'],
            'username' => ['required', 'string', 'max:30'],
            'email' => [
                'required',
                'string',
                'email',
                'max:100',
                Rule::unique(User::class), 
            ],
            'password' => $this->passwordRules(),
            'jenis_kelamin' => ['required', 'string', 'max:30'],
            'tanggal_lahir' => ['required', 'date']
        ])->validate();
        
        $user = User::create([
            'name' => $input['name'],
            'username' => $input['username'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
            'jenis_kelamin' => $input['jenis_kelamin'],
            'tanggal_lahir' => $input['tanggal_lahir']
        ]);
        // Role::create(['name' => 'User']);
        $user->assignRole('User');

        return $user;
        // $user->assignRole($request->input('roles'));

    }
}
