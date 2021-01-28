<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(Request $request){


        $validatedData = $request -> validate([
            'name' => 'required|max:55',
            'email' => 'email|required',
            'password' => 'required|confirmed'
        ]);

         $user = User:: create ($validatedData);

         $accessToken = $user -> createToken('authToken') -> accessToken;

         return response(['user' => $user, 'accessToken' => $accessToken]);

    }
}
