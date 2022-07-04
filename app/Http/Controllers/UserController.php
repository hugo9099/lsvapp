<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    // Show all users
    public function index() {
        return view('users.index', [
            'users' => User::all()
        ]);

    }


    // Show single user with Projects
    public function show(User $user) {

        // Get projects for this user
        $user_projects = DB::table('users')
            ->join('tasks', 'users.id', '=', 'tasks.user_id')
            ->join('projects', 'projects.id', '=', 'tasks.project_id')
            ->select('projects.id', 'projects.name')->distinct('projects.name')
            ->where('users.id', '=', $user->id)
            ->get();

        // Get Project names and ids for this user
        $user_projects_names = array();
        $user_projects_ids = array();
        foreach ($user_projects as $user_project) {
            $user_projects_names[] = $user_project->name;
            $user_projects_ids[] = $user_project->id;
        }


        // Get members for each project
        $projects_members = array();
        foreach ($user_projects_ids as $id) {

            $projects_members[$id] = array();
            $cur_project_members = Project::get_members($id);

            foreach ($cur_project_members as $mem) {
                if (!in_array(ucwords($mem->name), $projects_members[$id])) {
                    $projects_members[$id][] = ucwords($mem->name);
                }
            }
        }


        // Get Hours for user's projects
        $projects_hours = array();
        foreach ($user_projects_ids as $id) {
            $projects_hours[] = Project::get_project_hours($id);
        }


        return view('users.show', [
            'user' => $user,
            'user_projects_names' => $user_projects_names,
            'projects_members' => $projects_members,
            'projects_hours' => $projects_hours,
            'user_projects_ids' => $user_projects_ids,
        ]);
    }


}
