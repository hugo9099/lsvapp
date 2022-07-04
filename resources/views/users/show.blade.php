<x-layout>

    <h2>{{ucwords($user->name) . "'s Project List"}}</h2>

@php
    foreach ($projects_members as $project_members) {
        $projects_members_show[] = implode(", ", $project_members);
    }
@endphp


<!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron py-3">
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
                <th scope="col">Project</th>
                <th scope="col">Members</th>
                <th scope="col">Estimated Hours</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
            @for($i = 0; $i < sizeof($user_projects_ids); $i++)
                <tr>
                    <td>{{$user_projects_names[$i]}}</td>
                    <td>{{$projects_members_show[$i]}}</td>
                    <td>{{$projects_hours[$i]}}</td>
                    <td><a href="/project/{{$user_projects_ids[$i]}}">
                            <button type="button" class="btn btn-info">View</button>
                        </a>
                    </td>
                </tr>
            @endfor
            </tbody>
        </table>

        <hr>

    </div> <!-- /container -->

</x-layout>