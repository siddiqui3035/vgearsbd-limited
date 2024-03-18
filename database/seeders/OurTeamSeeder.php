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
        // $teams = [
        //     [
        //         'name' => 'Biplob Kumar Kundu',
        //         'degnigation' => 'Managing Partner & CEO',
        //         'details' => 'Your team',
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'name' => 'Md. Abdullah Al Mamun',
        //         'degnigation' => 'Director, Business Development',
        //         'details' => 'Your team',
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'name' => 'Uzzal Kumer Mazumder',
        //         'degnigation' => 'Director, Finance',
        //         'details' => 'Your team',
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'name' => 'Md. Masud Iqbal',
        //         'degnigation' => 'Director, Tecnical & Sales',
        //         'details' => 'Your team',
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'name' => 'Md. Razaur Rahman',
        //         'degnigation' => 'Director Operation',
        //         'details' => 'Your team',
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'name' => 'SM Samiur Rahman ',
        //         'degnigation' => 'Head of Marketing',
        //         'details' => 'Your team',
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        // ];

        // OurTeam::insert($teams);

        $sql = "INSERT INTO `our_teams` (`id`, `image`, `name`, `degnigation`, `details`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
        (1, 'images/teams/ZlmxUo1sxn5jV9dqBa0Kn6BQforcHE1t7703Gca4.jpg', 'Biplob Kumar Kundu', 'Managing Partner & CEO', 'Your team', 0, NULL, '2023-03-31 23:38:00', '2023-03-31 23:42:07'),
        (2, 'images/teams/4lVRfVAG8BkOY4EKGK6Imu5QB4scTd5xG7vNQ2mN.jpg', 'SM Samiur Rahman', 'Head of Marketing', 'Your team', 0, NULL, '2023-03-31 23:38:00', '2023-03-31 23:43:21'),
        (3, 'images/teams/aw757wwFFCFhyDupyCnRYGOVe69H9GTCvEuiQUR6.jpg', 'Uzzal Kumer Mazumder', 'Director, Finance', 'Your team', 0, NULL, '2023-03-31 23:38:00', '2023-03-31 23:42:46'),
        (4, 'images/teams/oSJ86xufYuVbV8C0Mj27AtdF4V5DZkKvaf2kYKJj.jpg', 'Md. Masud Iqbal', 'Director, Tecnical & Sales', 'Your team', 1, NULL, '2023-03-31 23:38:00', '2023-03-31 23:42:57'),
        (5, 'images/teams/XKSh4EEKW7wDpfqqjz3Cj6alkyOhmqSXNtgqLIlb.jpg', 'Md. Razaur Rahman', 'Director Operation', 'Your team', 1, NULL, '2023-03-31 23:38:00', '2023-03-31 23:43:06'),
        (6, 'images/teams/Be4kDHixri09D3PMaKJTBglBH4CuECKzqTeL2APB.jpg', 'Md. Abdullah Al Mamun', 'Director, Business Development', 'Your team', 0, NULL, '2023-03-31 23:38:00', '2023-03-31 23:42:26');";

        DB::insert($sql);
    }
}
