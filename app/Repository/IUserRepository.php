<?php

namespace App\Repository;

use App\Models\User;
interface IUserRepository 
{
    public function register(array $userData) : User;

    public function authenticate(string $email, string $password);
}