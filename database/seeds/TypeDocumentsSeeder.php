<?php

use Illuminate\Database\Seeder;

class TypeDocumentsSeeder extends Seeder
{
    
    public function run()
    {
        DB::table('tipe_documents')->insert([
            [
                'code' => 'RC',
                'name' => 'Registro Civil',
            ],
            [
                'code' => 'TI',
                'name' => 'Trajeta Identidad',
            ],
            [
                'code' => 'CC',
                'name' => 'Cedula Ciudadania',
            ],
            [
                'code' => 'CE',
                'name' => 'Cedula Extranjera',
            ],
            [

                'code' => 'NIT',
                'name' => 'NIT',
            ],
            [
                'code' => 'TIE',
                'name' => 'Trajeta de Identidad Extranjera',
            ],
            [
                'code' => 'PS',
                'name' => 'Pasaporte',
            ],
            [
                'code' => 'NIUP',
                'name' => 'NIUP',
            ],
            [
                'code' => 'NOP',
                'name' => 'Nit de otro pais',
            ],
            
            [
                'code' => 'DIE',
                'name' => 'Documento de Identificaion Extranjera',
            ],
        ]);

        
    }
}
