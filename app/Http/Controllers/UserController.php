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

    public function update(UserRepositoryEloquent $user, Request $request, int $id){
        $data = $request->only('name', 'email', 'password');
        return $user->update($data, $id);
    }
}
