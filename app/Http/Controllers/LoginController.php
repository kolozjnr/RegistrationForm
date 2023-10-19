<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repository\IUserRepository;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    protected $credentials;

    public function __construct(IUserRepository $credentials){
        $this->credentials = $credentials;
    }
    public function getLogin(){
        
        if (Auth::check()) {
            return redirect()->route('/Dashboard');
        }
        return view('user.login');
    }


}
