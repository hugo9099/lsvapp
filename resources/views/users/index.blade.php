<x-layout>

    <h2>Team</h2>

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
                <th scope="col">Name</th>
                <th scope="col">Total Tasks</th>
                <th scope="col">Project List</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $key => $user)
                <tr>
                    <td>{{ucwords($user->name)}}</td>
                    <td>{{$user->tasks->count()}}</td>
                    <td><a href="/user/{{$user->id}}">
                            <button type="button" class="btn btn-info">Project List</button>
                        </a></td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <hr>

    </div> <!-- /container -->

</x-layout>