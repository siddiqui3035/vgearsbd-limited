<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sql = "INSERT INTO `categories` (`id`, `user_id`, `parent_id`, `name`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
        (1, 1, NULL, 'Oil', 0, NULL, '2023-03-26 11:16:03', '2023-03-26 11:16:03'),
        (3, 1, 1, 'V Lube', 0, NULL, '2023-03-26 11:16:32', '2023-03-26 11:16:32'),
        (4, 1, 1, 'V Race', 0, NULL, '2023-03-26 11:16:46', '2023-03-26 11:16:46');";

        DB::insert($sql);
    }
}
