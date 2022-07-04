<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    // Show all projects
    public function index() {
        return view('projects.index', [
            'projects' => Project::all()
        ]);
    }

    // Show single project
    public function show(Project $project) {
        return view('projects.show', [
            'project' => $project
        ]);
    }

}
