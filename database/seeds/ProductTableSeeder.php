<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Product;

class ProductTableSeeder extends Seeder
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
                'name' 			=> 'Avene ',
                'slug' 			=> 'Eucerin',
                'description' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
                'extract' 		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                'price' 		=> 275.00,
                'image' 		=> 'avene.png',
                'visible' 		=> 1,
                'created_at' 	=> new DateTime,
                'updated_at' 	=> new DateTime,
                'category_id' 	=> 1
            ],
            [
                'name' 			=> 'Avene',
                'slug' 			=> 'Claunature',
                'description' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
                'extract' 		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                'price' 		=> 255.00,
                'image' 		=> 'avene1.png',
                'visible' 		=> 1,
                'created_at' 	=> new DateTime,
                'updated_at' 	=> new DateTime,
                'category_id' 	=> 1
            ],
            [
                'name' 			=> 'Emulucion corporal',
                'slug' 			=> 'percutalfa',
                'description' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
                'extract' 		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                'price' 		=> 300.00,
                'image' 		=> 'bioderma.png',
                'visible' 		=> 1,
                'created_at' 	=> new DateTime,
                'updated_at' 	=> new DateTime,
                'category_id' 	=> 1
            ],
            [
                'name' 			=> 'Avene',
                'slug' 			=> 'Photoderm M ',
                'description' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
                'extract' 		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                'price' 		=> 475.00,
                'image' 		=> 'cl.png',
                'visible' 		=> 1,
                'created_at' 	=> new DateTime,
                'updated_at' 	=> new DateTime,
                'category_id' 	=> 2
            ],
            [
                'name' 			=> 'Neostrata',
                'slug' 			=> 'NeoStrata Triple Anti-edad',
                'description' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
                'extract' 		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                'price' 		=> 280.00,
                'image' 		=> 'eliocare.png',
                'visible' 		=> 1,
                'created_at' 	=> new DateTime,
                'updated_at' 	=> new DateTime,
                'category_id' 	=> 2
            ],
            [
                'name' 			=> 'Vichy',
                'slug' 			=> 'Dercos',
                'description' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
                'extract' 		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                'price' 		=> 275.00,
                'image' 		=> 'vichy.png',
                'visible' 		=> 1,
                'created_at' 	=> new DateTime,
                'updated_at' 	=> new DateTime,
                'category_id' 	=> 2
            ],
            [
                'name' 			=> 'Endocare',
                'slug' 			=> 'Endocare Tensage Serum',
                'description' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
                'extract' 		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                'price' 		=> 275.00,
                'image' 		=> 'eu.png',
                'visible' 		=> 1,
                'created_at' 	=> new DateTime,
                'updated_at' 	=> new DateTime,
                'category_id' 	=> 1
            ],
            [
                'name' 			=> 'Avene',
                'slug' 			=> 'Agua termal Avène',
                'description' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
                'extract' 		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                'price' 		=> 275.00,
                'image' 		=> 'isdin.png',
                'visible' 		=> 1,
                'created_at' 	=> new DateTime,
                'updated_at' 	=> new DateTime,
                'category_id' 	=> 2
            ],



        );



    }
}