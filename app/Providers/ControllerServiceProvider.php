<?php

namespace App\Providers;

use App\Models\ModelControllers\TaskController;
use Illuminate\Support\ServiceProvider;

/**
 * Class ControllerServiceProvider
 * @package App\Providers
 */
class ControllerServiceProvider extends ServiceProvider
{
	/**
	 * Bootstrap services.
	 * @return void
	 */
	public function boot(): void
	{
		$this->app->singleton(TaskController::class);
		$this->app->alias(TaskController::class, 'TaskController');
	}
}
