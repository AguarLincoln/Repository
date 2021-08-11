<?php

namespace App\Repositories;

use App\Models\User;
use App\Repositories\Contracts\UserRepositoryInterface;

class UserRepositoryEloquent implements UserRepositoryInterface{

    private $model;

	public function __construct(User $model)
	{
		$this->model = $model;
	}

    public function findAll()
	{
		return response()->json([
			'data' => $this->model->paginate(10)
		]);
	} 

	public function create(array $data = []){
		
		$this->model->create($data);

		return response()->json([
			'msg' => 'Usúario criado com sucesso!'
		]);
		
	}

}