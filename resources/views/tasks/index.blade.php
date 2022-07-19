<x-layout>

    <h2>Tasks</h2>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron py-4">
        <div class="container">
            {{--<h1 class="display-3">Hello, world!</h1>
            <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
            <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>--}}
        </div>
    </div>

    <div class="container">

        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Task</th>
                <th scope="col">Assigned To</th>
                <th scope="col">Details</th>
                {{--<th scope="col">Project</th>--}}
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
                    <td><a href="/task/{{$task->id}}">
                            <button type="button" class="btn btn-info btn-sm">Details</button>
                        </a></td>
                    {{--<td>{{$task->project->name}}</td>--}}
                    <td>{{$task->estimated_hours}}</td>
                    <td>{{($task->deadline) ? date("Y-m-d", strtotime($task->deadline)) : 'N/A'}}</td>
                    <td>{{($task->finished) ? 'Yes' : 'No'}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <hr>

    </div> <!-- /container -->

</x-layout>