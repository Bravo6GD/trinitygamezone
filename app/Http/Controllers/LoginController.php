<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use DB;


class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */


    public function create_user() {
        return view("register");
    }

public function store_user(Request $request) {
    $request->validate([
        'name' => ['required'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
        'password' => ['required', Rules\Password::defaults()],
    ]);

    $user = new User();
    $user->email = $request->email;
    $user->name = $request-> name;
    $user->password=Hash::make($request->password);

    $user->save();

    return redirect('login');

}

public function login() {
        return view('login') ;
}
public function store_login(Request $request) {
    $request->validate([
        'email' => ['required'],
        'password' => ['required'],
    ]);

     $credentials = [
        'email'=> $request->email,
        'password'=> $request->password,
    ];
       
    if(Auth::attempt($credentials)){
        return redirect('/admin_page');
    }
    else{
        return redirect('login');
    }
}
public function admin_page() {
        return view('adminhome');
}
public function logout() {
    Auth::logout();
    return view('login');
}
}