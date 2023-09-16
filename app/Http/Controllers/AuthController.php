<?php

namespace App\Http\Controllers;

use App\Traits\HttpResponses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class AuthController extends Controller
{

  use HttpResponses;

  public function login(Request $request)
  {
    if (Auth::attempt($request->only('email', 'password'))) {
        $user = User::where('email', $request->email)->first();
        $user->tokens()->delete();

        return $this->response('Authorized', 200, [
        //'token' => $request->user()->createToken('invoice')->plainTextToken
        'token' => $request->user()->createToken('invoice', ['invoice-store', 'invoice-update'])->plainTextToken
      ]);
    }
    return $this->response('Not Authorized', 403);
  }


  public function logout(Request $request)
  {
    $request->user()->currentAccessToken()->delete();

    return $this->response('Token Revoked', 200);
}
}

