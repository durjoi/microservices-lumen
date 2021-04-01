<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Validator;


class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    //
    public function register(Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if($validator->fails()) {
            return response()->json([
                'message' => 'Validation Errors',
                'error' => $validator->errors(),
                'status' => false
            ], 422);
        }

        $input = $request->all();
        $input['password'] = Hash::make($input['password']);
        $user = User::create($input);

        $data['token'] = $user->createToken('Grant Password Token')->accessToken;
        $data['name'] = $user->name;
        
        return response()->json([
            'data' => $data, 
            'message' => 'Account created successfully!',
            'status' => 200
        ], 200);
    }
}
