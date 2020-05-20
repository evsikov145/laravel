<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AuthController extends Controller
{
    public function registration(Request $request, Response $response)
    {

        dump($response);
        if($request->isMethod('post')){
            $request->flash();
            return redirect() -> route('auth');
        }
        dump($request->old(), $request);
        return view('Auth.auth');
    }
}
