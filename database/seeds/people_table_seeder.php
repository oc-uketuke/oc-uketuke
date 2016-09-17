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
      $name=array('青山 洋介','中村 翼','桐山 くみ子','佐藤 あすか','山本 洋介');
      $furigana=array('あおき　ようすけ','なかむら　つばさ','きりやま　くみこ','さとう　あすか','やまもと　ようへい');
      for($i=0;$i<5;$i++){
        DB::table('People')->insert([
          'name' => $name[$i],
          'code' => str_random(7),
          'oc_id' => mt_rand()%10,
          'furigana'=>$furigana[$i],
          'school_name'=>'大阪情報コンピュータ専修学校',
          'gakunen'=>rand(2,3),
          'taiken1'=>rand(1,20),
          'taiken2'=>rand(1,20),
          'taiken3'=>rand(1,20),
          'entry'=>false
        ]);
      }
    }
}
