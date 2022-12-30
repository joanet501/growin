<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\ForgetPasswordRequest;
use App\Http\Resources\UserResource;

class AuthController extends Controller
{
    /**
     * Create User
     * @param Request $request
     * @return User
     */
    public function createUser(Request $request)
    {
        try {
            //Validated
            $validateUser = Validator::make($request->all(),
            [
                'name' => 'required',
                'email' => 'required|email|unique:users,email',
                'password' => 'required'
            ]);

            if($validateUser->fails()){
                return response()->json([
                    'status' => false,
                    'message' => 'validation error',
                    'errors' => $validateUser->errors()
                ], 401);
            }

            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password)
            ]);

            return view('jardin');

        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage()
            ], 500);
        }
    }



    /**
     * Login The User
     * @param Request $request
     * @return User
     */


    public function loginWeb(Request $request){
        $user = AuthController::loginUser($request);
        if ($user == false){
            return view('index-error');
        }
        $data = json_decode($user->toJson(), true);
        return view('jardin', $data);
    }

    public function loginUser(Request $request)
    {
            $validateUser = Validator::make($request->all(),
            [
                'email' => 'required|email',
                'password' => 'required'
            ]);

            if($validateUser->fails()){
                return false;
            }

            if(!Auth::attempt($request->only(['email', 'password']))){
                return false;
            }

            return UserResource::make(Auth::user());



    }


    public function forgetPassword(ForgetPasswordRequest $request){
        $user = User::where('email', $request->email)->first();
        if(!$user){
            return "This email doesn't belong to any user";
        }

    }



}
