<x-layout>

    <h3 class="mt-5">Task: <b>{{$task->name}}</b></h3>
    <br>
    <p class="lead">Assigned to: <b>{{ucwords($task->user->name)}}</b></p>
    <p class="lead">Estimated Hours: <b>{{$task->estimated_hours}}</b></p>
    <p class="lead">Project Related: <b>{{$task->project->name}}</b></p>
    <p class="lead">Deadline: <b>{{$task->deadline}}</b></p>
    <p class="lead">Description: {{$task->description}}</p>

    {{--<br>
    Work In Progress
    <br>--}}

</x-layout>