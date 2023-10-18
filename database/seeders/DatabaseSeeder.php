<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Profesores;
use App\Models\Estudiantes;
use App\Models\Asignaturas;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Profesores::factory(10)->create();
        Estudiantes::factory(10)->create();
        Asignaturas::factory(10)->create();
    }
}
