<?php

use Illuminate\Database\Seeder;

class oc_taiken3_table_seeder extends Seeder
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
        DB::table('Oc_taiken3')->insert([
          'oc_id'=>mt_rand()%10,
          'taiken_id'=>mt_rand()%10
        ]);
      }
    }
}
