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
        $sql = "INSERT INTO `brands` (`id`, `name`, `image`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
        (1, 'V One', 'storage/images/brands/wGV24jxHoYlPTMRyXcf9MQRVgC9Z54j5oxRmWfTK.png', 0, NULL, '2023-03-26 11:28:52', '2023-03-26 11:28:52'),
        (2, 'G Race', 'storage/images/brands/95yZ59hKCTZNKICadVCigOKtDIsDRRATAQ6ngs0n.png', 0, NULL, '2023-03-26 11:29:05', '2023-03-26 11:29:05');";

        DB::insert($sql);
    }
}
