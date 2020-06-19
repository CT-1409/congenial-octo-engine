@extends('layout')

@section('content')
<div class="heading">
		<h2 style="font-style: 'Hervetica';">To Do List Application</h2>
	</div>
	<form method="post" action="/store">
	{{ csrf_field() }}
		<input type="text" name="task" class="task_input" placeholder="add task here">
		<button type="submit" name="submit" id="add_btn" class="add_btn">Add Task</button>
	</form>
	<h2>Active tasks:</h2>

@endsection




