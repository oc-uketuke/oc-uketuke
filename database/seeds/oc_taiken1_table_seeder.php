<?php

use Illuminate\Database\Seeder;

class oc_taiken1_table_seeder extends Seeder
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
        DB::table('Oc_Taiken1')->insert([
          'oc_id'=>mt_rand()%10,
          'taiken_id'=>mt_rand()%10
        ]);
      }
    }
}
