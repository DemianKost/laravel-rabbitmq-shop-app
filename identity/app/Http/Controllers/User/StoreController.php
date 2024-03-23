<?php

declare(strict_types=1);

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\StoreRequest;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use App\Http\Resources\UserResource;

class StoreController extends Controller
{
    /**
     * @param StoreRequest $request
     */
    public function __invoke(StoreRequest $request): JsonResponse
    {
        $data = $request->validated();

        $user = User::create($data);

        return new JsonResponse(
            data: new UserResource(
                resource: $user,
            ),
            status: 200
        );
    }
}
