<?php

namespace Database\Seeders;

use App\Models\Ambiente;
use App\Models\Sensor;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        Ambiente::create([
            'nome' => 'Sala 11',
            'descricao' => 'Sala de aula número 11',
            'status' => 1,
        ]);

        Ambiente::create([
            'nome' => 'Sala 12',
            'descricao' => 'Sala de aula número 12',
            'status' => 1,
        ]);

        Ambiente::create([
            'nome' => 'Pátio',
            'descricao' => 'Área de convivência',
            'status' => 1,
        ]);

        Sensor::create([
            'ambiente_id' => '1',
            'codigo' => 'TEMP01',
            'tipo' => 'Temperatura',
            'descricao' => 'Sensor de Temperatura',
            'status' => 1,
        ]);

        Sensor::create([
            'ambiente_id' => '2',
            'codigo' => 'TEMP02',
            'tipo' => 'Temperatura',
            'descricao' => 'Sensor de Temperatura',
            'status' => 0,
        ]);

        Sensor::create([
            'ambiente_id' => '3',
            'codigo' => 'LED01',
            'tipo' => 'LED',
            'descricao' => 'Sensor LED',
            'status' => 0,
        ]);
    }
}
