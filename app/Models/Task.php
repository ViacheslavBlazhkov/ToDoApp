<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Task
 * @property int    $id
 * @property string $title
 * @property bool   $is_completed
 * @property bool   $is_starred
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @package App\Models
 * @method static where(string $column, string $operator, string $value)
 */
class Task extends Model
{
	/*** @return int */
	public function getId(): int
	{
		return $this->id;
	}

	/**
	 * @param int $id
	 * @return void
	 */
	public function setId(int $id): void
	{
		$this->id = $id;
	}

	/*** @return string */
	public function getTitle(): string
	{
		return $this->title;
	}

	/**
	 * @param string $title
	 * @return void
	 */
	public function setTitle(string $title): void
	{
		$this->title = $title;
	}

	/*** @return bool */
	public function isIsCompleted(): bool
	{
		return $this->is_completed;
	}

	/**
	 * @param bool $isCompleted
	 * @return void
	 */
	public function setIsCompleted(bool $isCompleted): void
	{
		$this->is_completed = $isCompleted;
	}

	/*** @return bool */
	public function isIsStarred(): bool
	{
		return $this->is_starred;
	}

	/**
	 * @param bool $isStarred
	 * @return void
	 */
	public function setIsStarred(bool $isStarred): void
	{
		$this->is_starred = $isStarred;
	}

	/*** @return Carbon */
	public function getCreatedAt(): Carbon
	{
		return $this->created_at;
	}

	/*** @return Carbon */
	public function getUpdatedAt(): Carbon
	{
		return $this->updated_at;
	}

}
