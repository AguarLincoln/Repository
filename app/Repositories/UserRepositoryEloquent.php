<?php

namespace App\Repositories;

use App\Models\User;
use App\Repositories\Contracts\BaseRepository;


class UserRepositoryEloquent extends BaseRepository{

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

	public function update(array $data = []){
		
		$this->model->update($data);

		return response()->json([
			'msg' => 'Usúario atualizado com sucesso com sucesso!'
		]);
		
	}

}