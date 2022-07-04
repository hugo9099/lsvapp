<x-layout>

    @php
        // Total Hours for This Project
        $tasks = $project->tasks;
        $project_hours = 0;
        foreach ($tasks as $task) {
            $project_hours += $task->estimated_hours;
        }
    @endphp

    <h3 class="mt-5">Project: <b>{{$project->name}}</b></h3>
    <p class="lead">{{$project->description}}</p>
    <p class="lead">Owner: <b>{{$project->owner}}</b></p>
    <p class="lead">Estimated Hours: <b>{{$project_hours}}</b></p>
    <p class="lead">Deadline: <b>{{$project->deadline}}</b></p>

    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">No.</th>
            <th scope="col">Task</th>
            <th scope="col">Assigned To</th>
            <th scope="col">Estimated Hours</th>
            <th scope="col">Deadline</th>
            <th scope="col">Finished</th>
        </tr>
        </thead>
        <tbody>
        @foreach($tasks as $key => $task)
            <tr>
                <th scope="row">{{$key+1}}</th>
                <td>{{$task->name}}</td>
                <td>{{ucwords($task->user->name)}}</td>
                <td>{{$task->estimated_hours}}</td>
                <td>{{$task->deadline}}</td>
                <td>{{($task->finished) ? 'Yes' : 'No'}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

</x-layout>