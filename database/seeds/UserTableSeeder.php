<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            [
                'name' => 'Victor',
                'last_name' => 'Rivera',
                'email'  => 'victoritcelaya@gmail.com',
                'user' => 'wayne',
                'password' => \Hash::make('123456'),
                'type' => 'admin',
                'active' => 1,
                'address' => 'Privada de Allende no1',
                'colonia' => 'barrio de la clemencia',
                'ciudad' => 'Santiago Maravatio',
                'estado' => 'Guanajuato',
                'telefono' => '461-312-4967',
                'telefono_2' => '442-312-5674',
                'codigo_postal' => '38970',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],

            [
                'name' => 'Samanta',
                'last_name' => 'Lopez',
                'email'  => 'comerciowebherrera@gmail.com',
                'user' => 'samanta',
                'password' => \Hash::make('123456'),
                'type' => 'user',
                'active' => 1,
                'address' => 'Tonala no1',
                'colonia' => 'andadores',
                'ciudad' => 'Zapopan',
                'estado' => 'Jalisco',
                'telefono' => '461-312-4967',
                'telefono_2' => '455-5667-7645',
                'codigo_postal' => '38000',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
        );

        User::insert($data);
    }
}
