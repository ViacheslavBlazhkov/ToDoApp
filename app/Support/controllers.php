<?php

use App\Models\ModelControllers\TaskController;

if ( ! function_exists('taskController')) {
	/*** @return TaskController */
	function taskController(): TaskController
	{
		return app('TaskController');
	}
}