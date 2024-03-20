<?php

namespace Database\Seeders;

use App\Models\Banner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $banners = [
            [
                "id" => "1",
                "title_one" => "Sint nulla eos quid",
                "title_two" => "Cupiditate provident",
                "short_details" => "Ut et placeat sit q",
                "image" => "UMPz398NJzSxtmM4iCoLosBDxmg9nFzCTJbqPhFu.png",
                "status" => "0",
                "deleted_at" => null,
                "created_at" => "2024-03-20 17:52:54",
                "updated_at" => "2024-03-20 17:52:54",
            ],
        ];

        Banner::insert($banners);
    }
}
