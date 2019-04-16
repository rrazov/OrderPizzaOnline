<?php

use Illuminate\Database\Seeder;

class ExtraTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $extra=new\App\Extra([
        	'name'=> 'KUKURUZ',
        	'price'=>3,
        	]);
        $extra->save();


        $extra=new\App\Extra([
        	'name'=> 'SUHI VRAT',
        	'price'=>6,
        	]);
        $extra->save();


        $extra=new\App\Extra([
        	'name'=> 'MOZZARELLA',
        	'price'=>8,
        	]);
        $extra->save();


        $extra=new\App\Extra([
        	'name'=> 'GLJIVE',
        	'price'=>4,
        	]);
        $extra->save();



        $extra=new\App\Extra([
        	'name'=> 'TUNJEVINA',
        	'price'=>5,
        	]);
        $extra->save();


        $extra=new\App\Extra([
        	'name'=> 'KISELO VRHNJE',
        	'price'=>4,
        	]);
        $extra->save();

        $extra=new\App\Extra([
        	'name'=> 'MAJONEZA',
        	'price'=>5,
        	]);
        $extra->save();


        $extra=new\App\Extra([
        	'name'=> 'FEFERONI',
        	'price'=>5,
        	]);
        $extra->save();

        $extra=new\App\Extra([
        	'name'=> 'RUKOLA',
        	'price'=>6,
        	]);
        $extra->save();

    }
}
