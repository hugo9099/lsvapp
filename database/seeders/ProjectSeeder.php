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

        // Extra Data to Generate
        $create_records = 30;

        $project_objects = array(
            'Website',
            'E-Commerce',
            'Platform',
            'CRM',
            'Websocket',
            'Magento',
            'Wordpress',
            'Shopify',
        );

        $project_actions = array(
            'Upgrade',
            'Update',
            'Install',
            'Deploy',
            'Design',
        );

        $project_description = "Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.";

        $companies = array(
            'Raynor, Ruecker and Kunze',
            'Murray LLC',
            'Fritsch-Kunde',
            'Sawayn-Hammes',
            'Gislason-Miller',
            'Moore PLC',
            'Gottlieb, Kutch and Aufderhar',
            'Zieme, Steuber and Bradtke',
            'Kunde Group',
            'Block and Sons',
        );

        $rand = mt_rand(1662292478,1664884478);
        $date_time = date("Y-m-d", $rand);

        for ($i = 0; $i < $create_records; $i++) {

            // Generate Random date
            $rand = mt_rand(1662292478,1664884478);
            $date_time = date("Y-m-d", $rand);

            // Insert new Record
            DB::table('projects')->insert([
                'name' => $project_objects[array_rand($project_objects)] . " " .
                    $project_actions[array_rand($project_actions)],
                'description' => $project_description,
                'owner' => $companies[array_rand($companies)],
                'deadline' => $date_time,
            ]);

        }


        // Data provided on Requirements
        /*
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
        */

    }
}
