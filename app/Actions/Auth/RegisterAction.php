<?php

namespace App\Actions\Auth;

use App\Exceptions\RegisterException;
use App\Http\Requests\Auth\Register\RegisterRequest;
use App\Models\Person;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RegisterAction
{
    /**
     * @param RegisterRequest $request
     * @return User
     * Create a new person and user
     */
    public function execute(RegisterRequest $request): User
    {
        $userData = $request->validated();
        $person = Person::create($userData);
        $person->user()->create($userData);
        return $person->user->load('person');
    }
}
