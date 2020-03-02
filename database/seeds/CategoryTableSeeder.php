<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Category;

class CategoryTableSeeder extends Seeder
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
                'name' => 'Super heroes',
                'slug' => 'super heroes',
                'description' => 'lorem sdsads,dasdnsakjdnsdnsndsjndsajndksnsakjnsjdns',
                'color' => '#440022'

            ],

            [
                'name' => 'VICTOR',
                'slug' => 'Rivera',
                'description' => 'HOLA CRAYOLA',
                'color' => '#445500'
            ]


        );


        Category::insert($data);
    }
}