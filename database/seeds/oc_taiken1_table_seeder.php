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

      $taiken123=array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20);
      $taiken4=array(3,4,7,12,13,16,18);
      $taiken5=array(2,4,5,6,10,11,14,15,17,19,20,21);
      $taiken6=array(2,3,6,7,10,13,16,18,20,21);
      $taiken7=array(1,3,4,7,12,13,16,18,21);
      for($i=1;$i<50;$i++){
        $id_rand=rand(1,3);
        $taiken_rand=rand(1,21);
        $hoge=array(1=>$taiken123,2=>$taiken123,3=>$taiken123,4=>$taiken123,5=>$taiken123,6=>$taiken123,7=>$taiken123);
        for($j=1;$j<=count($hoge[$id_rand]);$j++){
          if(in_array($taiken_rand,$hoge[$id_rand])){
            break;
          }
        }
        if($j>count($hoge[$id_rand])){
          DB::table('Oc_Taiken1')->insert([
            'oc_id'=>$id_rand,
            'taiken_id'=>$taiken_rand
          ]);
        }else{
          $i--;
        }
      }
    }
}
