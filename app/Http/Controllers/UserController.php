<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\UserResource;

class UserController extends Controller
{

    public function home(){
        $user = Auth::user();
        $user = UserResource::make($user);
        $data = json_decode($user->toJson(), true);
        return view('jardin', $data);
    }

}
