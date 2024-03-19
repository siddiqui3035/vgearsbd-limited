<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $brands = [
            [
                'name' => 'G race',
                'image' => '_g_race_.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'V one',
                'image' => '_v_one_.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'V oil',
                'image' => '_v_oil_.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        Brand::insert($brands);
    }
}
