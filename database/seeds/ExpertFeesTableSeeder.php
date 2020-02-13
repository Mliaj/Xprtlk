<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExpertFeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $feeDesc = [
            ['description' => 'Free'],
            ['description' => 'Negotiable'],
            ['description' => 'Up to ₱10,000'],
            ['description' => '₱10,000 to ₱50,000'],
            ['description' => '₱50,000 to ₱500,000'],
            ['description' => 'More than ₱500,000'],
        ];

        DB::table('expert_fees')->insert($feeDesc);
    }
}
