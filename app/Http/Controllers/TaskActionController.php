<?php

namespace App\Http\Controllers;

use App\Exceptions\TaskNotFoundException;
use App\Models\Task;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;

/**
 * Class TaskActionController
 * @package App\Http\Controllers
 */
class TaskActionController extends Controller
{
	/*** @return Application|Factory|View|\Illuminate\Foundation\Application */
	public function index()
	{
		return view('tasks');
	}

	/**
	 * @param string $title
	 * @return JsonResponse
	 */
	public function create(string $title): JsonResponse
	{
		$task = new Task();
		$task->setTitle($title);
		$task->save();
		return response()->json([
			'ack' => 'success',
		]);
	}

	/**
	 * @param int $id
	 * @return JsonResponse
	 * @throws TaskNotFoundException
	 */
	public function delete(int $id): JsonResponse
	{
		taskController()->findById($id)->delete();
		return response()->json([
			'ack' => 'success',
		]);
	}

}
