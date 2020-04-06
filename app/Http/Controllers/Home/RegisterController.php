<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Home\RegisterUserRequest;

class RegisterController extends Controller
{
    public function register(RegisterUserRequest $request){
        return response()->json([
            'data'=>'ok'
        ]);
    }
}
