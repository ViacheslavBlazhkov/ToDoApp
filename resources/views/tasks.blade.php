@foreach( taskController()->getAll() as $task)
	<p>{{$task->getTitle()}}</p>
@endforeach