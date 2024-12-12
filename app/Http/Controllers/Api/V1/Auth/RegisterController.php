<?php

namespace App\Http\Controllers\Api\V1\Auth;

use App\Actions\Auth\RegisterAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\Register\RegisterRequest;
use App\Http\Resources\Auth\Register\RegisterResource;
use App\Traits\HttpResponse;

class RegisterController extends Controller
{

    use HttpResponse;

    public function __invoke(RegisterRequest $request, RegisterAction $registerAction)
    {
        try {
            $user = $registerAction->execute($request);
            return $this->response(
                'User created successfully',
                201,
                new RegisterResource($user)
            );
        } catch (\Exception $e) {
            return $this->error($e->getMessage(), $e->getCode() ?? 500);
        }

    }
}
