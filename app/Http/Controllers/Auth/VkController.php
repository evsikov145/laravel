<?php

namespace App\Http\Controllers\Auth;

use App\Models\AuthData;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class VkController extends Controller
{
    public function login(){
        return Socialite::with('vkontakte')->redirect();
    }

    public function response(){
        $user = Socialite::driver('vkontakte')->user();
        $email = $user->getEmail();
        $status = false;
        $internalUser = User::where('email', $email)->first();
        $objAuth = new AuthData();
        $check = $objAuth->where('user_id', $internalUser->id)->where('network', 'vk')->first();
        if($check){
            $check->nickname = $user->getNickname();
            $check->name = $user->getName();
            $check->avatar = $user->getAvatar();
            $status = $check->save();
        }else {
            $status = (bool)$objAuth->create([
                'user_id' => $internalUser->id,
                'network' => 'vk',
                'nickname' => $user->getNickname(),
                'name' => $user->getName(),
                'avatar' => $user->getAvatar()
            ]);
        }

        if($status){
            \Auth::login($internalUser);
            return redirect()->route('home');
        }

        \Log::error('Юзер не смог зарегистрироваться');
        dd('Юзер не смог зарегистрироваться');
    }
}
