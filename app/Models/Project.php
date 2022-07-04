<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'owner',
    ];

    public function tasks(){
        return $this->hasMany(Task::class);
    }

    // Get Project Total Hours
    public function get_project_hours ($id) {

        $project_hours = DB::table('tasks')
            ->where('project_id', $id)
            ->sum('estimated_hours');

        return $project_hours;
    }

    // Get members involved in this project
    public function get_members($id) {
        $members = DB::table('tasks')
            ->join('projects', 'tasks.project_id', '=', 'projects.id')
            ->join('users', 'tasks.user_id', '=', 'users.id')
            ->select('users.name')
            ->where('tasks.project_id', $id)
            ->get();

        return $members;
    }
}
