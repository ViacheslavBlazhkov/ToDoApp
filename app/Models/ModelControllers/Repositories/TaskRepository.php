<?php

namespace App\Models\ModelControllers\Repositories;

use App\Exceptions\TaskNotFoundException;
use App\Models\Task;
use Illuminate\Database\Eloquent\Collection;

/**
 * Class TaskRepository
 * @package App\Models\ModelControllers\Repositories
 */
class TaskRepository
{
	/**
	 * @param int $id
	 * @return Task
	 * @throws TaskNotFoundException
	 */
	public function findById(int $id): Task
	{
		$task = Task::where('id', '=', $id)->first();
		if ($task === NULL) {
			throw new TaskNotFoundException();
		}
		return $task;
	}

	/*** @return Collection */
	public function getAll(): Collection
	{
		return Task::all();
	}
}