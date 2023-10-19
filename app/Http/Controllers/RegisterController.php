<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repository\IUserRepository;

class RegisterController extends Controller
{
    protected $data;
    public function __construct(IUserRepository $data)
    {
        $this->data = $data;
        
    }
    public function index(){
        return view('user.register');
    }
    

    public function register(Request $request)
    {
     //dd($request->avatar);
        $validated = $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required|email|unique:users',
            'avatar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:9048',
            'password' => 'required|min:6',
        ]);

        $user = $this->data->register($validated);
        
        Auth::login($user);

        return redirect('/dashboard');
    }
}
