<?php

namespace Database\Seeders;

use App\Models\Investigation;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class InvestigationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Investigation::insert([
            [
                "id" => 1,
                "title" => "Trabajo de graduacion Desarrollo de Software",
                "description" => "Trabajo de final de ciclo para la carrera de Ing. en Desarrollo de Software",
                "statuses_id" => 1,
                "deleted_at" => Carbon::now(),
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now()
            ],
            [
                "id" => 2,
                "title" => "Trabajo de graduacion Ingenieria Civil",
                "description" => "Trabajo de final de ciclo para la carrera de Tec. en Ingenieria Civil",
                "statuses_id" => 2,
                "deleted_at" => Carbon::now(),
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now()
            ],
            [
                "id" => 3,
                "title" => "Trabajo de graduacion Gastronomia",
                "description" => "Trabajo de final de ciclo para la carrera de Tec. en Gastronomia",
                "statuses_id" => 3,
                "deleted_at" => Carbon::now(),
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now()
            ],
            [
                "id" => 4,
                "title" => "Trabajo de graduacion Ingenieria Mecatronica",
                "description" => "Trabajo de final de ciclo para la carrera de Ingenieria Mecatronica",
                "statuses_id" => 2,
                "deleted_at" => Carbon::now(),
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now()
            ],
        ]);
    }
}
