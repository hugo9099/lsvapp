<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // Extra Data to Generate
        $users = array(
            'hyman',
            'leonidas',
            'julita',
            'walther',
            'dottie',
            'olga',
            'arden',
            'imojean',
            'kit',
            'filippo',
            'allegra',
            'ced',
            'janeen',
            'hertha',
            'artemas',
            'natassia',
            'batholomew',
            'reba',
            'maureene',
            'agnella',
        );

        $domain = 'lsvapp.com';

        foreach ($users as $user) {
            DB::table('users')->insert([
                'name' => $user,
                'email' => $user.'@'.$domain,
                'password' => bcrypt($user),
            ]);
        }


        // Data provided on Requirements
        /*
        $users = array(
            'stuart',
            'tyler',
            'adam',
            'lan',
        );

        $domain = 'lsvapp.com';

        foreach ($users as $user) {
            DB::table('users')->insert([
                'name' => $user,
                'email' => $user.'@'.$domain,
                'password' => bcrypt($user),
            ]);
        }
        */

    }
}
