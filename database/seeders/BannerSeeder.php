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
                "title_one" => "Sint nulla eos quid",
                "title_two" => "Cupiditate provident",
                "short_details" => "Ut et placeat sit q",
                "image" => "_3G2m8BQfow_.png",
                "status" => "0",
                "deleted_at" => null,
                "created_at" => "2024-03-20 17:52:54",
                "updated_at" => "2024-03-20 17:52:54",
            ],
            [
                "title_one" => "Sint nulla eos 2",
                "title_two" => "Cupiditate provident",
                "short_details" => "Ut et placeat sit q",
                "image" => "_dSUWL1HooY_.png",
                "status" => "0",
                "deleted_at" => null,
                "created_at" => "2024-03-20 17:52:54",
                "updated_at" => "2024-03-20 17:52:54",
            ],
            [
                "title_one" => "Sint nulla eos 3",
                "title_two" => "Cupiditate provident",
                "short_details" => "Ut et placeat sit q",
                "image" => "_gaFQuh38J7_.png",
                "status" => "0",
                "deleted_at" => null,
                "created_at" => "2024-03-20 17:52:54",
                "updated_at" => "2024-03-20 17:52:54",
            ],
            [
                "title_one" => "Sint nulla eos 4",
                "title_two" => "Cupiditate provident",
                "short_details" => "Ut et placeat sit q",
                "image" => "_KhdODKmPxY_.png",
                "status" => "0",
                "deleted_at" => null,
                "created_at" => "2024-03-20 17:52:54",
                "updated_at" => "2024-03-20 17:52:54",
            ],
            [
                "title_one" => "Sint nulla eos 5",
                "title_two" => "Cupiditate provident",
                "short_details" => "Ut et placeat sit q",
                "image" => "_tIWvZuPv4S_.png",
                "status" => "0",
                "deleted_at" => null,
                "created_at" => "2024-03-20 17:52:54",
                "updated_at" => "2024-03-20 17:52:54",
            ],
            [
                "title_one" => "Sint nulla eos 6",
                "title_two" => "Cupiditate provident",
                "short_details" => "Ut et placeat sit q",
                "image" => "_vQO5lGPtzX_.png",
                "status" => "0",
                "deleted_at" => null,
                "created_at" => "2024-03-20 17:52:54",
                "updated_at" => "2024-03-20 17:52:54",
            ],
            [
                "title_one" => "Sint nulla eos 7",
                "title_two" => "Cupiditate provident",
                "short_details" => "Ut et placeat sit q",
                "image" => "_ZwWbzyawbx_.png",
                "status" => "0",
                "deleted_at" => null,
                "created_at" => "2024-03-20 17:52:54",
                "updated_at" => "2024-03-20 17:52:54",
            ],
        ];

        Banner::insert($banners);
    }
}
