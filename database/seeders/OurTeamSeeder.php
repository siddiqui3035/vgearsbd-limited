<?php

namespace Database\Seeders;

use App\Models\OurTeam;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class OurTeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $teams = [
            [
                "image" => "_biplob_kumar_kundu_.png",
                "name" => "Biplob Kumar Kundu",
                "designation" => "Managing Partner & CEO",
                "details" => "Your team",
                "status" => "0",
                "deleted_at" => null,
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "image" => "_s_m_samiur_rahman_.png",
                "name" => "SM Samiur Rahman",
                "designation" => "Head of Marketing",
                "details" => "Your team",
                "status" => "0",
                "deleted_at" => null,
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "image" => "_uzzal_kumer_mazumder_.png",
                "name" => "Uzzal Kumer Mazumder",
                "designation" => "Director, Finance",
                "details" => "Your team",
                "status" => "0",
                "deleted_at" => null,
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "image" => "_md._abdullah_al_mamun_.png",
                "name" => "Md. Abdullah Al Mamun",
                "designation" => "Director, Business Development",
                "details" => "Your team",
                "status" => "0",
                "deleted_at" => null,
                "created_at" => now(),
                "updated_at" => now(),
            ],
        ];

        OurTeam::insert($teams);
    }
}
