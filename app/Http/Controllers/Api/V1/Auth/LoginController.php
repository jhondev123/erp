<?php

namespace App\Http\Controllers\Api\V1\Auth;

use App\Actions\LoginAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Resources\LoginResource;
use App\Traits\HttpResponse;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    use HttpResponse;
    /**
     * Handle the incoming request.
     */
    public function __invoke(LoginRequest $request,LoginAction $action)
    {
        try {
            $data = $action->execute($request);
            return $this->response(
                'User logged in successfully',
                200,
                new LoginResource($data)
            );

        } catch (\Exception $e) {
            return response()->json([
                'message' => $e->getMessage()
            ], $e->getCode() ?? 500);
        }

    }
}
