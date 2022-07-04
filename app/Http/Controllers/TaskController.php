<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    // Show all tasks
    public function index() {
        return view('tasks.index', [
            'tasks' => Task::all()
        ]);

    }

    // Show single task
    public function show(Task $task) {
        return view('tasks.show', [
            'task' => $task
        ]);
    }
}
