<?php

use Illuminate\Database\Seeder;

class EdutacionLeveSeeder extends Seeder
{
    
    public function run()
    {
        DB::table('education_level')->insert([
            [
                'name' => 'Kinder',
            ],
            [
                'name' => 'Primaria',
            ],
            [
                'name' => 'Bachiller Academico',
            ],
            [
                'name' => 'Tecnico',
            ],
            [
                'name' => 'Tegnologo',
            ],
            [
                'name' => 'Profesional',
            ],
            [
                'name' => 'Maestria',
            ],
            [
                'name' => 'Doctorado',
            ],
            [
                'name' => 'PhD',
            ],
            [
                'name' => 'Bachiller Basico',
            ],
            
        ]);
    }
}
