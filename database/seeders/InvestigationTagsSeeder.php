<?php

namespace Database\Seeders;

use App\Models\Investigation_tags;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class InvestigationTagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Investigation_tags::insert([
            [
                "id" => 1,
                "investigation_id" => 1,
                "tag_id" => 1,
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now()
            ],
            [
                "id" => 2,
                "investigation_id" => 2,
                "tag_id" => 2,
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now()
            ],
            [
                "id" => 3,
                "investigation_id" => 1,
                "tag_id" => 2,
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now()
            ],
            [
                "id" => 4,
                "investigation_id" => 4,
                "tag_id" => 3,
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now()
            ]
        ]);
    }
}
