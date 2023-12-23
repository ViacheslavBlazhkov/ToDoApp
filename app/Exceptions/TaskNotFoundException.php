<?php

namespace App\Exceptions;

use Exception;

/**
 * Class TaskNotFoundException
 * @package App\Exceptions
 */
class TaskNotFoundException extends Exception
{
	/*** @var string */
	protected $message = 'Task Not Found';
}