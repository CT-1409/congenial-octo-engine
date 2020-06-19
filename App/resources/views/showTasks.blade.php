@extends('layout')

@section('content')
<div class="heading">
		<h2 style="font-style: 'Hervetica';">To Do List Application</h2>
	</div>
	<form method="post" action="/create">
		{{ csrf_field() }}
		<input type="text" name="task_name" placeholder="add task here">
		<button type="submit" name="submit">Add Task</button>
	</form>




<h2>Current tasks:</h2>

    <ul>
        @foreach($tasks as $task)
			<li>
			<table>
			  {{ $task->task_name }}
			  <a href="/task/{{ $task->id }} " title='{{ $task->task_name }}'><strong>[ i ]</strong></a>
			  <br>
			  <a href="/task/{{ $task->id }}/edit"><strong>Edit</strong></a>
			</table>
			</li>
			<form action="/delete/{{ $task->id }}" method="post">
				@csrf
				@method('delete')
					<button type="submit" name="submit">Delete</button>
			</form>

        @endforeach
		
    </ul>

@endsection




  