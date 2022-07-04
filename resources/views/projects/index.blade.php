<x-layout>

    <h2>Projects</h2>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron py-4">
        <div class="container">
            {{--<h1 class="display-3">Hello, world!</h1>
            <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
            <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>--}}
        </div>
    </div>

    <div class="container">
        <!-- Example row of columns -->
        <div class="row">
            @foreach($projects as $project)
                <div class="col-md-4 py-4">
                    <h3>{{$project->name}}</h3>
                    <p>{{$project->description}}</p>
                    <p><a class="btn btn-primary" href="/project/{{$project->id}}" role="button">View details &raquo;</a></p>
                </div>
            @endforeach
        </div>

        <hr>

    </div> <!-- /container -->

</x-layout>