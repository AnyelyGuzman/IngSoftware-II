<?php

use Illuminate\Database\Seeder;

class PersonsSeeder extends Seeder
{
    public function run()
    {
        DB::table('persons')->insert([
            [
                'tipedocuments_id' => 3,
                'name' => 'Anyely ',
                'surname' => 'Guzman',
                'address' => 'cll 19 ',
                'phone' => '3152432557',
                'email' => 'anyelyguzman04@gmail.com',
                'educationlevel_id' => 1

            ],
            [
                'tipedocuments_id' => 6,
                'name' => 'Michell',
                'surname' => 'Guzman',
                'address' => 'cll 12',
                'phone' => '3174635725',
                'email' => 'michel@gmail.com',
                'educationlevel_id' => 6
            ],
            [
                'tipedocuments_id' => 1,
                'name' => 'Alan ',
                'surname' => 'Galviz',
                'address' => 'cra 12 ',
                'phone' => '3145286525',
                'email' => 'alan@gmail.com',
                'educationlevel_id' => 4
            ],
            [
                'tipedocuments_id' => 2,
                'name' => 'camilo',
                'surname' => 'lopez',
                'address' => 'cra 43 ',
                'phone' => '5441718225',
                'email' => 'camilo@gmail.com',
                'educationlevel_id' => 3
            ],
            [
                'tipedocuments_id' => 3,
                'name' => 'juan',
                'surname' => 'Perez',
                'address' => 'cll 23 ',
                'phone' => '3102569585',
                'email' => 'juanito@gmail.com',
                'educationlevel_id' => 5
            ],
            [
                'tipedocuments_id' => 5,
                'name' => 'David',
                'surname' => 'Forero',
                'address' => 'cll 30 ',
                'phone' => '3102562589',
                'email' => 'forero@gmail.com',
                'educationlevel_id' => 7
            ],
            [
                'tipedocuments_id' => 7,
                'name' => 'Alberto',
                'surname' => 'Cruz',
                'address' => 'cll 25 # 23 -45 ',
                'phone' => '3102569585',
                'email' => 'alberto@gmail.com',
                'educationlevel_id' => 10
            ],
            [
                'tipedocuments_id' => 9,
                'name' => 'Luis',
                'surname' => 'Rojas',
                'address' => 'cll 78 # 23-23 ',
                'phone' => '3102569585',
                'email' => 'adames@gmail.com',
                'educationlevel_id' => 9
            ],
            [
                'tipedocuments_id' => 8,
                'name' => 'Alberto',
                'surname' => 'Adames',
                'address' => 'cra 12 #23-45 ',
                'phone' => '3102547964',
                'email' => 'rojasadames@gmail.com',
                'educationlevel_id' => 8
            ],
            [
                'tipedocuments_id' => 10,
                'name' => 'Leonardo ',
                'surname' => 'Jimenez',
                'address' => 'cra 45 # 34-56 ',
                'phone' => '3102569585',
                'email' => 'leo@gmail.com',
                'educationlevel_id' => 5
            ],
            
        ]);
    }
}
