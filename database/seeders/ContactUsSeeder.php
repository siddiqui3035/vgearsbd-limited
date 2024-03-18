<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ContactUsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sql = "INSERT INTO `contact_us` (`id`, `name`, `email`, `subject`, `message`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
        (1, 'Basia Thompson', 'sydamebana@mailinator.com', 'Exercitation qui et', 'Qui ab dolor aliquip', 0, NULL, '2023-03-31 23:36:20', '2023-03-31 23:36:20'),
        (2, 'Nora Pena', 'sehys@mailinator.com', 'Illo ad accusamus en', 'Quis occaecat mollit', 0, NULL, '2023-03-31 23:36:25', '2023-03-31 23:36:25'),
        (3, 'Nasim Lester', 'fyraf@mailinator.com', 'Deserunt consequat', 'Quam dolore ut sit e', 0, NULL, '2023-03-31 23:36:30', '2023-03-31 23:36:30'),
        (4, 'Maile Duran', 'xise@mailinator.com', 'Amet et quis conseq', 'Molestiae Nam qui ac', 0, NULL, '2023-03-31 23:36:35', '2023-03-31 23:36:35');";

        DB::insert($sql);
    }
}
