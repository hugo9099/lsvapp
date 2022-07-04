<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // Extra Data to Generate
        $create_records = 60;

        $verbs = array(
            'Adjust',
            'Upgrade',
            'Fix',
            'Test',
            'Enable',
            'Review',
            'Develop',
            'Design',
            'Connect',
            'Deploy',
        );

        $technologies = array(
            'Website',
            'PHP',
            'Angular',
            'Laravel',
            'MySQL',
            'SocketIO',
            'Network',
            'AWS Instances',
            'Interface',
            'Bootstrap',
            'Testing',
            'API Endpoints',
            'Asterisk',
            'Kamailio',
            'React',
            'Git Repos',
        );

        $task_description = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.";


        for ($i = 0; $i < $create_records; $i++) {

            // Generate Random date
            $rand = mt_rand(1662292478,1664884478);
            $date_time = date("Y-m-d", $rand);

            // Insert new Record
            DB::table('tasks')->insert([
                'name' => $verbs[array_rand($verbs)] . " " . $technologies[array_rand($technologies)],
                'description' => $task_description,
                'user_id' => rand(1, 20),
                'project_id' => rand(1, 30),
                'estimated_hours' => rand(2, 16),
                'deadline' => $date_time,
                'finished' => rand(0, 1),
            ]);

        }



        // Data provided on Requirements
        /*
        DB::table('tasks')->insert([
            'name' => 'Product Pages',
            'user_id' => 3,
            'project_id' => 1,
            'estimated_hours' => 5,
        ]);

        DB::table('tasks')->insert([
            'name' => 'Shopping Cart',
            'user_id' => 2,
            'project_id' => 1,
            'estimated_hours' => 10,
        ]);

        DB::table('tasks')->insert([
            'name' => 'My Account',
            'user_id' => 3,
            'project_id' => 1,
            'estimated_hours' => 5,
        ]);

        DB::table('tasks')->insert([
            'name' => 'Add to SocketIO',
            'user_id' => 1,
            'project_id' => 2,
            'estimated_hours' => 2,
        ]);

        DB::table('tasks')->insert([
            'name' => 'Enable Broadcasting',
            'user_id' => 1,
            'project_id' => 2,
            'estimated_hours' => 5,
        ]);

        DB::table('tasks')->insert([
            'name' => 'Adjust Interface',
            'user_id' => 1,
            'project_id' => 2,
            'estimated_hours' => 3,
        ]);

        DB::table('tasks')->insert([
            'name' => 'Upgrade Angular',
            'user_id' => 4,
            'project_id' => 3,
            'estimated_hours' => 15,
        ]);

        DB::table('tasks')->insert([
            'name' => 'Fix Broken Things',
            'user_id' => 1,
            'project_id' => 3,
            'estimated_hours' => 10,
        ]);

        DB::table('tasks')->insert([
            'name' => 'Test',
            'user_id' => 4,
            'project_id' => 3,
            'estimated_hours' => 10,
        ]);
        */

    }
}
