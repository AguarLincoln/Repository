<?php

namespace App\Http\Controllers;

use App\Repositories\UserRepositoryEloquent;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create(UserRepositoryEloquent $user, Request $request)
    {
        $data = $request->only('name', 'email', 'password');
        return $user->create($data);
    }
    
    public function list(UserRepositoryEloquent $user)
    {
        return $user->findAll(10);
    }
}
