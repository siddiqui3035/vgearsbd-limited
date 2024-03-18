<?php

namespace Database\Seeders;

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
        $sql = "INSERT INTO `blogs` (`id`, `title`, `category`, `short_description`, `long_description`, `image`, `status`, `created_at`, `updated_at`) VALUES
        (1, 'Et ad magna et maior', 'Cum sit inventore e', 'Vero velit nulla la', 'Laudantium fugiat', 'images/blogs/60GzkwkKCOyq1MScToueCIHs4jALuJAcgQWUQVmZ.jpg', 0, '2023-03-31 23:31:18', '2023-03-31 23:32:36'),
        (2, 'Duis praesentium lau', 'Est laboris nostrud', 'Ipsum ea quos dolori', 'Provident et et inc', 'images/blogs/TQ6eu9R2LiK6xSZ37WGSZAqiyYx4qgNVTqSk42J5.jpg', 0, '2023-03-31 23:32:54', '2023-03-31 23:32:54'),
        (3, 'Itaque maxime ullam', 'Velit expedita nobis', 'Perferendis modi qui', 'Blanditiis quis ea a', 'images/blogs/ZIGyldDbTiu0RLx7j6RgVgg9hNlGZXFVETtBwKOF.jpg', 0, '2023-03-31 23:33:12', '2023-03-31 23:33:12');";

        DB::insert($sql);
    }
}
