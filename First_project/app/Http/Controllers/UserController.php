<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function logout()
    {
        auth()->logout();
        return redirect('/');

    }
    public function register(Request $request)
    {
        $incomingField = $request->validate([
            'name' => ['required', 'min:3', 'max:7', Rule::unique('users', 'name')],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => ['required', 'min:4', 'max:12']


        ]);

        $incomingField['password'] = bcrypt($incomingField['password']);
        /*  $user=new User();
           $user->name=$request->input('name');
           $user->email=$request->input('email');
           $user->password=$request->input('password');
           
           $user->save();*/


        $user = User::create($incomingField);
        auth()->login($user);

        return redirect('/');

    }
    public function login(Request $request)
    {
        $incomingField = $request->validate([
            'loginname' => 'required',
            'loginpassword' => 'required'

        ]);
        if (auth()->attempt(['name' => $incomingField['loginname'], 'password' => $incomingField['loginpassword']])) {
            $request->session()->regenerate();
           //
           return redirect('/');

        }
        return redirect('/');

    }

}
