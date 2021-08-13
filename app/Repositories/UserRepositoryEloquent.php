<?php

namespace App\Repositories;

use App\Http\Resources\UserResource;
use App\Models\User;
use App\Repositories\Contracts\BaseRepository;

class UserRepositoryEloquent extends BaseRepository{

    protected $model;

	public function __construct(User $model)
	{
		$this->model = $model;
	}

    public function findAll()
	{

		return UserResource::collection($this->model->select('name','email')->paginate(10));
	} 

	public function create(array $data = []){
		
		$this->model->create($data);

		return response()->json([
			'msg' => 'Usúario criado com sucesso!'
		]);
		
	}

	public function update(array $data = [], int $id = 0){
		$this->model = User::findOrFail($id);
		$this->model->update($data);

		return response()->json([
			'msg' => 'Usúario atualizado com sucesso com sucesso!'
		]);
		
	}

}