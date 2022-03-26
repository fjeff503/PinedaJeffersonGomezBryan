<?php

namespace Database\Seeders;

use App\Models\Departments;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class DepartmentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Departments::insert([
            [
                "id" => 1,
                "title" => "Informatica",
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now()
            ],
            [
                "id" => 2,
                "title" => "Electrica",
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now()
            ],
            [
                "id" => 3,
                "title" => "Electronica",
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now()
            ],
            [
                "id" => 4,
                "title" => "Arquitectura",
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now()
            ]
            
        ]);
    }
}
