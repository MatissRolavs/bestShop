<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\User;

class UserController extends Controller
{
    public function create() {
        return view("users.create");
    }

    public function store(Request $request) {
        $request->validate([
            "username" => ["string", "required", "max:255", Rule::unique('users', 'name')],
            "email" => ["email", "required", Rule::unique('users', 'email')],
            "password" => ["required", "min:4", "max:5"]
        ]);

        $user = new User;
        $user->name = $request->username;
        $user->email = $request->email;
        $user->password = $request->password;
        
        $user->save();

        return redirect("/products");
        
    }
    public function login() {
        return view("users.login");
    }
    public function login2(Request $request){
        $request->validate([
            
        ]);
    }

}
