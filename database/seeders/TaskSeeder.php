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

    }
}
