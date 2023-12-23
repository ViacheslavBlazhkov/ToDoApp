<?php

namespace App\Models\ModelControllers;

use App\Exceptions\TaskNotFoundException;
use App\Models\ModelControllers\Repositories\TaskRepository;
use App\Models\Task;
use Illuminate\Database\Eloquent\Collection;

/**
 * Class TaskController
 * @package App\Models\ModelControllers
 */
class TaskController
{
	/*** @var TaskRepository */
	private TaskRepository $repo;

	/*** @return void */
	public function __construct()
	{
		$this->repo = new TaskRepository();
	}

	/**
	 * @param int $id
	 * @return Task
	 * @throws TaskNotFoundException
	 */
	public function findById(int $id): Task
	{
		return $this->repo->findById($id);
	}

	/*** @return Collection */
	public function getAll(): Collection
	{
		return $this->repo->getAll();
	}
}