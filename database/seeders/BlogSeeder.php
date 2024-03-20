<?php

namespace Database\Seeders;

use App\Models\Blog;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $blogs = [
            [
                "title" => "Et ad magna et maior",
                "category" => "Cum sit inventore e",
                "short_description" => "Vero velit nulla la",
                "long_description" => "Laudantium fugiat",
                "image" => "_IJWJzxgDL3_.png",
                "status" => "0",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "title" => "Duis praesentium lau",
                "category" => "Est laboris nostrud",
                "short_description" => "Ipsum ea quos dolori",
                "long_description" => "Provident et et inc",
                "image" => "_DTVSR54U6T_.png",
                "status" => "0",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "title" => "Itaque maxime ullam",
                "category" => "Velit expedita nobis",
                "short_description" => "Perferendis modi qui",
                "long_description" => "Blanditiis quis ea a",
                "image" => "_G2dfSelgLi_.png",
                "status" => "0",
                "created_at" => now(),
                "updated_at" => now(),
            ],
        ];

        Blog::insert($blogs);
    }
}
