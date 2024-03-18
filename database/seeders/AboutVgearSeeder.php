<?php

namespace Database\Seeders;

use App\Models\AboutVgear;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutVgearSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $abouts = [
            [
                'title' => 'Sales',
                'details' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin non blandit nibh. Sed eget tortor tincidunt, auctor sem eget, mollis nisi. Pellentesque ipsum erat, facilisis ut venenatis eu, sodales vel dolor fusce diam ornare.',
                'serial' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Digital Marketing',
                'details' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin non blandit nibh. Sed eget tortor tincidunt, auctor sem eget, mollis nisi. Pellentesque ipsum erat, facilisis ut venenatis eu, sodales vel dolor fusce diam ornare.',
                'serial' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Food Importer',
                'details' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin non blandit nibh. Sed eget tortor tincidunt, auctor sem eget, mollis nisi. Pellentesque ipsum erat, facilisis ut venenatis eu, sodales vel dolor fusce diam ornare.',
                'serial' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Lublicant Importer',
                'details' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin non blandit nibh. Sed eget tortor tincidunt, auctor sem eget, mollis nisi. Pellentesque ipsum erat, facilisis ut venenatis eu, sodales vel dolor fusce diam ornare.',
                'serial' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Organic food',
                'details' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin non blandit nibh. Sed eget tortor tincidunt, auctor sem eget, mollis nisi. Pellentesque ipsum erat, facilisis ut venenatis eu, sodales vel dolor fusce diam ornare.',
                'serial' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        AboutVgear::insert($abouts);
    }
}
