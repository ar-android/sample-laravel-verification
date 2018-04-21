<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class VerifiyController extends Controller
{
    public function verify($token)
    {
      $user = User::where('token',$token)->firstOrFail();
      $user->token = null;
      $user->save();

      return redirect()->to('/home')->with('success', 'Your account has verified.');

    }
}
