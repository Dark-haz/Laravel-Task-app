{{-- show all tasks of user --}}

list of tasks for  {{$project['pname']}}  : <br> <br>
@php
    $num = 0
@endphp

@foreach ($tasks as $task)
 task {{++$num}}  {{$task['tname']}}
 <br> {{$task['description']}}
<br> <br> <br>
@endforeach