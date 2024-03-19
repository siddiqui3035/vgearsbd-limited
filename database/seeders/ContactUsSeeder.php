<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\ContactUs;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ContactUsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contacts = [
            [
                "name" => "Basia Thompson",
                "email" => "sydamebana@mailinator.com",
                "subject" => "Exercitation qui et",
                "message" => "Qui ab dolor aliquip",
                "status" => "0",
                "deleted_at" => null,
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "Nora Pena",
                "email" => "sehys@mailinator.com",
                "subject" => "Illo ad accusamus en",
                "message" => "Quis occaecat mollit",
                "status" => "0",
                "deleted_at" => null,
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "Nasim Lester",
                "email" => "fyraf@mailinator.com",
                "subject" => "Deserunt consequat",
                "message" => "Quam dolore ut sit e",
                "status" => "0",
                "deleted_at" => null,
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "Maile Duran",
                "email" => "xise@mailinator.com",
                "subject" => "Amet et quis conseq",
                "message" => "Molestiae Nam qui ac",
                "status" => "0",
                "deleted_at" => null,
                "created_at" => now(),
                "updated_at" => now(),
            ],
        ];

        ContactUs::insert($contacts);
    }
}
