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
        $categories = [
            [
                "id" => "1",
                "user_id" => "1",
                "parent_id" => null,
                "name" => "Oil",
                "status" => "0",
                "deleted_at" => null,
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "id" => "3",
                "user_id" => "1",
                "parent_id" => "1",
                "name" => "V Lube",
                "status" => "0",
                "deleted_at" => null,
                "created_at" =>  now(),
                "updated_at" => now(),
            ],
            [
                "id" => "4",
                "user_id" => "1",
                "parent_id" => "1",
                "name" => "V Race",
                "status" => "0",
                "deleted_at" => null,
                "created_at" => now(),
                "updated_at" => now(),
            ],
        ];

        Category::insert($categories);
    }
}
