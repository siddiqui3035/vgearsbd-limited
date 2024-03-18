<?php

namespace Database\Seeders;

use App\Models\Unit;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $units =[
            [
                'name' => 'Kilogram',
                'short_name' => 'kg',
                'unit_type' => 'kilogram',
                'base_unit' => '1',
                'operator' => '*',
                'operator_value' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Meter',
                'short_name' => 'm',
                'unit_type' => 'meter',
                'base_unit' => '1',
                'operator' => '*',
                'operator_value' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Piece',
                'short_name' => 'pc',
                'unit_type' => 'piece',
                'base_unit' => '1',
                'operator' => '*',
                'operator_value' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Liters',
                'short_name' => 'ltr',
                'unit_type' => 'liters',
                'base_unit' => '1',
                'operator' => '*',
                'operator_value' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                "name" => "Grams",
                "short_name" => "g",
                "unit_type" => "kilogram",
                "base_unit" => 0,
                "operator" => "/",
                "operator_value" => "1000",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                "name" => "Ton",
                "short_name" => "tn",
                "unit_type" => "kilogram",
                "base_unit" => 0,
                "operator" => "*",
                "operator_value" => "1000",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                "name" => "Centimeter",
                "short_name" => "cm",
                "unit_type" => "meter",
                "base_unit" => 0,
                "operator" => "/",
                "operator_value" => "100",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                "name" => "Dozen box",
                "short_name" => "box",
                "unit_type" => "piece",
                "base_unit" => 0,
                "operator" => "*",
                "operator_value" => "12",
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        Unit::insert($units);
    }
}
