<?php

namespace App\Actions;

use App\Http\Requests\LoginRequest;

class LoginAction
{
    public function execute(LoginRequest $request):array
    {
        $data = $request->validated();

    }

}
