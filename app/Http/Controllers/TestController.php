<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;
use App\Models\User;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Validator;

class TestController extends Controller
{

    public function test()
    {
        // Eloquentオブジェクトを返す
        return response()->json([
            'success' => true,
            'message' => 'Congratulations for deploy',
        ], Response::HTTP_OK);
    }
}
