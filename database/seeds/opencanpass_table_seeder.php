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
      $titles=array('学校説明会','学校説明会','校説明会','オープンキャンパス',
                      'オープンキャンパス','オープンキャンパス','オープンキャンパス','オープンキャンパス','オープンキャンパス');
      $dates=array('2016-09-03','2016-09-24','2016-12-03',
                      '2016-09-17','2016-10-22','2016-11-05','2016-12-10');
      // $faker=Faker\Factory::create('ja_JP');
      for($i=0;$i<7;$i++){
        DB::table('Opencanpass')->insert([
          'date'=>$dates[$i],
          'title'=>$titles[$i],
          'code' => str_random(7)
        ]);
      }
    }
}
