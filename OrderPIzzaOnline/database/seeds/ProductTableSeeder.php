<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product=new\App\Product([
        	'imagePath'=> 'mijesana.jpg',
        	'title'=>'MIJEŠANA',
        	'description'=>'sir, pelat, šunka, masline, gljive, origano',
        	'price'=> 42
        	]);
        $product->save();

        $product=new\App\Product([
        	'imagePath'=> 'margherita.jpg',
        	'title'=>'MARGHERITA',
        	'description'=>'sir, rajčica, masline',
        	'price'=> 38
        	]);
        $product->save();

        $product=new\App\Product([
        	'imagePath'=> 'vegetariana.jpg',
        	'title'=>'VEGETARIANA',
        	'description'=>'sir, rajčica, artičoke, šparoge, šampinjoni, kukuruz, paprika, masline',
        	'price'=> 40
        	]);
        $product->save();

        $product=new\App\Product([
        	'imagePath'=> 'slavonska.jpg',
        	'title'=>'SLAVONSKA',
        	'description'=>'sir, rajčica, panceta, kobasica, kulen, kiselo vrhnje, ljuti feferoni)',
        	'price'=> 43
        	]);
        $product->save();

        $product=new\App\Product([
            'imagePath'=> 'bolognese.jpg',
            'title'=>'BOLOGNESE',
            'description'=>'rajčica, sir, umak bolognese',
            'price'=> 47
            ]);
        $product->save();

       

        $product=new\App\Product([
            'imagePath'=> 'calzone.jpg',
            'title'=>'CALZONE',
            'description'=>'rajčica, sir, šunka, gljive (oblik štruce)',
            'price'=> 35
            ]);
        $product->save();

        $product=new\App\Product([
            'imagePath'=> 'ljetna_pizza.jpg',
            'title'=>'LJETNA PIZZA',
            'description'=>'rajčica, sir, pesto genovese, crveni luk, kapari, zelene i crne masline',
            'price'=> 44
            ]);
        $product->save();

        $product=new\App\Product([
            'imagePath'=> 'pizza_marinero.jpg',
            'title'=>'PIZZA MARINERO',
            'description'=>'rajčica, sir, rikola, marinirani inćuni, marinirane kozice, kapari, cherry rajčica',
            'price'=> 42
            ]);
        $product->save();

        $product=new\App\Product([
            'imagePath'=> 'pizza_mozzarella.jpg',
            'title'=>'PIZZA MOZZARELLA',
            'description'=>'rajčica, sir, rikola, pršut, mozzarella, cherry rajčica',
            'price'=> 43
            ]);
        $product->save();

        $product=new\App\Product([
            'imagePath'=> 'pizza_piletina.jpg',
            'title'=>'PIZZA SA PILETINOM',
            'description'=>'rajčica, sir, piletina, svježa paprika',
            'price'=> 44
            ]);
        $product->save();

        $product=new\App\Product([
            'imagePath'=> 'pizza_roko.jpg',
            'title'=>'PIZZA ROKO',
            'description'=>'rajčica, sir, panceta, buđola, salama, gljive, vrhnje',
            'price'=> 45
            ]);
        $product->save();

        $product=new\App\Product([
            'imagePath'=> 'prosciutto.jpg',
            'title'=>'PROSCIUTTO',
            'description'=>'rajčica, sir, pršut, gljive',
            'price'=> 45
            ]);
        $product->save();

        $product=new\App\Product([
            'imagePath'=> 'vesuvio.jpg',
            'title'=>'VESUVIO',
            'description'=>'rajčica, sir, šunka',
            'price'=> 40
            ]);
        $product->save();




    }
}
