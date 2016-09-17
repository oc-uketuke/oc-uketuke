<?php

use Illuminate\Database\Seeder;

class opencanpass_table_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker=Faker\Factory::create('ja_JP');
      for($i=0;$i<5;$i++){
        DB::table('Opencanpass')->insert([
          'date'=>$faker->date($format='Y-m-d',$max='now')
        ]);
      }
    }
}
