<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function get(Request $request)
    {
        
    }
    public function post(Request $request)
    {
        // validation
        $validator = Validator::make($request->all(), [
            "username" => "required|unique:users,username",
            "password" => "required|min:8",
        ]);
        if ($validator->fails()){
            return response($validator->getMessageBag(), 400);
        }
        User::create([
            "username" => $request->username,
            "password" => Hash::make($request->password),
        ]);
        return response([]);
    }
    public function put(Request $request, $id)
    {
        // validation
        $validator = Validator::make($request->all(), [
            "username" => "nullable|required|unique:users,username",
            "password" => "nullable|required|min:8",
        ]);
        if ($validator->fails()){
            return response($validator->getMessageBag(), 400);
        }
        // get user
        $user = User::where("id", $id)->first();
        // user not found
        if (!isset($user)) {
            return response('', 404);
        }
        // set data
        if (isset($request->username)){
            $user->username = $request->username;
        }
        if (isset($request->password)){
            $user->password = Hash::make($request->password);
        }
        $user->save();
        return response([]);
    }
    public function delete(Request $request, $id){
        User::where("id", $id)->delete();
        return response([]);
    }
}
