<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserSignin;
use App\User;
use Illuminate\Http\Request;
use Auth;

class UserController extends Controller
{
    public function getSignup()
    {
        return view('user.signup');
    }

    public function postSignup(Request $request)
    {
        $this->validate($request, [
            'email' => 'email|required|unique:users',
            'password' => 'required|min:4'
        ]);

        $user = new User([
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password'))
        ]);
        $user->save();
        Auth::login($user);

        return redirect()->route('user.profile');
    }

    public function getSignin()
    {
        return view('user.signin');
    }

    public function postSignin(UserSignin $request)
    {
        if (Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])) {
            return redirect()->route('user.profile');
        }

        return redirect()->back();
    }

    public function getProfile()
    {
        return view('user.profile', ['user' => Auth::user()]);

    }

    public function getLogout()
    {
        Auth::logout();
        return redirect()->route('product.index');
    }

    public function getEditProfile()
    {
        return view('user.edit-profile', ['user' => Auth::user()]);
    }

    public function updateProfile(Request $request)
    {

        $user = Auth::User([

        'last_name' => $request->input('last_name'),
        'phone_number' => $request->input('phone_number'),
        'age' => $request->input('age'),
        'name' => $request->input('name')
        ]);
        $input = $request->only('name','last_name','phone_number','age');
        $user->update($input);


        return redirect()->route('user.profile');
        //return view('user.edit-profile', ['user' => Auth::user()]);
    }

}
