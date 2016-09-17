<?php

use Illuminate\Database\Seeder;

class people_table_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker=Faker\Factory::create('ja_JP');
      for($i=0;$i<200;$i++){
        DB::table('People')->insert([
          'name' => $faker->name(),
          'code' => str_random(7),
          'oc_id' => mt_rand()%10,
          'furigana'=>'ほげほげ',
          'school_name'=>$faker->name(),
          'gakunen'=>rand(1,3),
          'taiken1'=>rand(1,21),
          'taiken2'=>rand(1,21),
          'taiken3'=>rand(1,21),
          'entry'=>false
        ]);
      }
    }
}
