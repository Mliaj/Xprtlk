<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExpertRolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            ['role' => 'Conference Speaker'],
            ['role' => ' Keynote Speaker'],
            ['role' => 'After Dinner Speaker'],
            ['role' => 'Panel Discussant'],
            ['role' => 'Trainer(workshop)'],
            ['role' => 'Moderator'],
        ];

        DB::table('expert_roles')->insert($roles);
    }
}
