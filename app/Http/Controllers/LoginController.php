<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repository\IUserRepository;

class LoginController extends Controller
{
    protected $credentials;

    public function __construct(IUserRepository $credentials){
        $this->credentials = $credentials;
    }
    public function getLogin(){
        return view('user.login');
    }

    public function postLogin(Request $request){
        $validated = $request->validate([
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
        
        $email = $validated['email'];
        $password = $validated['password'];

        $user = $this->credentials->authenticate($email, $password);

        if ($user) {
            return redirect()->to('/dashboard');
        } else {
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ])->onlyInput('email');
        }
    }

}
