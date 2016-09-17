<?php
namespace App\Services;

class LandingService {
	public function getWeek($date){
		$datetime = new \DateTime($date);
		$weekjp = array(
			'日', //0
			'月', //1
			'火', //2
			'水', //3
			'木', //4
			'金', //5
			'土'  //6
		);
 
		//現在の曜日番号（日:0  月:1  火:2  水:3  木:4  金:5  土:6）を取得
		$weekno = (int)$datetime->format('w');
 
		//日本語曜日を出力
		return $weekjp[$weekno];
	}

	public function getDate($date){
		$datetime = new \DateTime($date);
		return $datetime->format('m/d');
	}
}