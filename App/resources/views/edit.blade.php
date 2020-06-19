@extends('layout')

@section('editContent')

<form action="/update/{{ $task->id }}" method="post">
	@csrf
    @method('put')
            Task: {{ $task->task_name }}
            <br>
                <input type="text" title="{{$task->task_name}}" placeholder="here you can edit your task" name="updated_task">
				<button type="submit" name="submit">Update</button>
</form>

@endsection