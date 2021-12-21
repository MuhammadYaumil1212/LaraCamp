<?php

namespace Database\Seeders;

use App\Models\CampBenefit;
use Illuminate\Database\Seeder;

class CampBenefitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $campBenefits = [
            [
                'camp_id' => 1,
                'name' => 'Pro TechStack Kit',
            ],
            [
                'camp_id' => 1,
                'name' => 'iMac Pro 2021 & Display',
            ],
            [
                'camp_id' => 1,
                'name' => '1-1 Mentoring program',
            ],
            [
                'camp_id' => 1,
                'name' => 'Final project sertificate',
            ],
            [
                'camp_id' => 1,
                'name' => 'Offline Course Videos',
            ],
            [
                'camp_id' => 1,
                'name' => 'Future Job Opportunity',
            ],
            [
                'camp_id' => 1,
                'name' => 'Premium Design Kit',
            ],
            [
                'camp_id' => 1,
                'name' => 'Website Builder',
            ],
            [
                'camp_id' => 2,
                'name' => '1-1 Mentoring program',
            ],
            [
                'camp_id' => 2,
                'name' => 'Final project sertification',
            ],
            [
                'camp_id' => 2,
                'name' => 'Offline Course Videos',
            ]
        ];
           foreach ($campBenefits as $key => $benefit) {
            CampBenefit::create($benefit);
           }
    }
}
