<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function registerAction(Request $request){
        $this->validate(request(),[
            'role'=>'required',
            'fname'=>'required',
            'lname'=>'required',
            'email'=>'required',
            'password'=>'required'
        ]); 

        $user = User::create(request(['role','fname','lname','email','password']));

        // auth()->login($user);lek mau langsung login

        return redirect()->to('/');
    }

    public function loginAction(Request $request)
    {
        if (auth()->attempt(request(['email', 'password'])) == false) {
            return back()->withErrors([
                'message' => 'The email or password is incorrect. Please try again'
            ]);
        }

        return redirect()->to('/');
    }

    public function destroy()
    {
        auth()->logout();
        return redirect()->to('/');
    }
}
