<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;


class UserController extends Controller
{
    public function logoutuser(){
        auth()->logout();
        redirect('/');
    }
    public function registerUser(Request $request){
        $incomingFields = $request-> validate([
            'name'=> ['required', 'min:3', 'max:20', Rule::unique('users', 'name')],
            'email'=>['required', 'email', Rule::unique('users', 'name')],
            'password'=>['required', 'min:8', 'max:20']
        ]);
        
        $incomingFields['password'] = bcrypt($incomingFields['password']);
        $user = User::create($incomingFields);
        auth()->login($user);
        return redirect('/');       
        
    }
}
