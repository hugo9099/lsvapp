<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $projects = array(
            'E-Commerce Website',
            'Websocket Updates',
            'Angular Upgrade',
        );

        foreach ($projects as $project) {
            DB::table('projects')->insert([
                'name' => $project,
            ]);
        }

    }
}
