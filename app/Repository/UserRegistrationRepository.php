<?php

namespace App\Repository;

use App\Models\User;
use App\Mail\WelcomeEmail;
use App\Helpers\EmailHelper;
use App\Repository\IUserRepository;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserRegistrationRepository implements IUserRepository {
    public function register(array $userData): User
    {
        $data = User::create([
            'fname' => $userData['fname'],
            'lname' => $userData['lname'],
            'email' => $userData['email'],
            'avatar' => $userData['avatar'],
            'password' => Hash::make($userData['password']),

        ]);

        if ($userData['avatar']) {
            $fileName = time() . '_' . $userData['avatar']->getClientOriginalName();
            $filePath = $userData['avatar']->storeAs('avatars', $fileName, 'public');
            $data->update(['avatar' => $filePath]); 
        }
        $email = new WelcomeEmail($data);
        $to = $userData['email'];
        $subject = 'Welcome Email';

        EmailHelper::sendWelcomeEmail($email, $to, $subject);

        return $data;
    }

    public function authenticate(string $email, string $password){
        $credentials = ['email' => $email, 'password' => $password];
        
        if (Auth::attempt($credentials)) {
            return Auth::user();
        }
        

        return null;
    }
}