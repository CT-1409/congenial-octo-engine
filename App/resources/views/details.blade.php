@extends('layout')

@section('content_details')
    Users:
    <table> 
    <tr>
    @foreach($task->users as $user)
        {{ $user->name }}

    @endforeach
    </tr>
    </table>
    
@endsection

