<?php

namespace Database\Seeders;

use App\Models\Tags;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class TagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tags::insert([
            [
                "id" => 1,
                "name" => "Ingenieria",
                "deleted_at" => Carbon::now(),
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now()
            ],
            [
                "id" => 2,
                "name" => "Tecnico",
                "deleted_at" => Carbon::now(),
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now()
            ],
            [
                "id" => 3,
                "name" => "Licenciatura",
                "deleted_at" => Carbon::now(),
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now()
            ],
            [
                "id" => 4,
                "name" => "Maestria",
                "deleted_at" => Carbon::now(),
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now()
            ],
        ]);
    }
}
