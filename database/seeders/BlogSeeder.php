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
                "image" => "images/blogs/60GzkwkKCOyq1MScToueCIHs4jALuJAcgQWUQVmZ.jpg",
                "status" => "0",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "title" => "Duis praesentium lau",
                "category" => "Est laboris nostrud",
                "short_description" => "Ipsum ea quos dolori",
                "long_description" => "Provident et et inc",
                "image" => "images/blogs/TQ6eu9R2LiK6xSZ37WGSZAqiyYx4qgNVTqSk42J5.jpg",
                "status" => "0",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "title" => "Itaque maxime ullam",
                "category" => "Velit expedita nobis",
                "short_description" => "Perferendis modi qui",
                "long_description" => "Blanditiis quis ea a",
                "image" => "images/blogs/ZIGyldDbTiu0RLx7j6RgVgg9hNlGZXFVETtBwKOF.jpg",
                "status" => "0",
                "created_at" => now(),
                "updated_at" => now(),
            ],
        ];

        Blog::insert($blogs);
    }
}
