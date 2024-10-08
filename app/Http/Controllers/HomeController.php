<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class HomeController extends Controller
{
    public function index(Request $request): JsonResponse
    {
        return $this->ok([
            'message' => 'bot is running!',
        ]);
    }

    public function me(): JsonResponse
    {
        $me = $this->bot->get('getMe');
        return $this->baleResponse($me);
    }
}
