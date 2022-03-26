<?php

namespace Database\Seeders;

use App\Models\Status;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Status::insert([
        [
           'id' => 1,
           'name' => 'Iniciado',
           "deleted_at" => Carbon::now(),
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ],
        [
            'id' => 2,
            'name' => 'En proceso',
            "deleted_at" => Carbon::now(),
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ],
        [
            'id' => 3,
            'name' => 'Con observaciones',
            "deleted_at" => Carbon::now(),
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ],
        [
            'id' => 4,
            'name' => 'Finalizado',
            "deleted_at" => Carbon::now(),
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ],
    ]);
    }
}
